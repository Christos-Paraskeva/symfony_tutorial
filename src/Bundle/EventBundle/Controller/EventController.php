<?php

namespace Bundle\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bundle\EventBundle\Entity\Event;
use Bundle\EventBundle\Form\EventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Event controller.
 *
 */
class EventController extends Controller
{

    /**
     * Lists all Event entities.
     * @Template()
     * @Route("/", name="event")
     */
    public function indexAction()
    {
        // can use this to get username
        $userName = $this->getUser()->getUsername();

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventBundle:Event')->findAll();

//        can query using custom function from user repository
//        $userRepo = $em->getRepository('UserBundle:User');
//        var_dump($userRepo->findOneByUsernameOrEmail('wayne'));die;

        return array(
            'userName' => $userName,
            'entities' => $entities,
        );
    }

    /**
     * @Route("/upcoming", name="upcoming")
     */
    public function upcomingEvents()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('EventBundle:Event')->findAll();

        return $this->render('EventBundle:Event:_upcomingEvents.html.twig', array(
            'events' => $events
        ));
    }

    /**
     * Creates a new Event entity.
     *
     */
    public function createAction(Request $request)
    {
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');
        $entity = new Event();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user = $this->getUser();
            $entity->setOwner($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('event_show', array('slug' => $entity->getSlug())));
        }

        return $this->render('EventBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Event entity.
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction()
    {
//        $this->enforceUserSecurity();

        $entity = new Event();
        $form   = $this->createCreateForm($entity);

        return $this->render('EventBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Event entity.
     *
     */
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventBundle:Event')
            ->findOneBy(array('slug' => $slug));
        $users = $em->getRepository('UserBundle:User')
            ->findAll();

        $this->checkForNotFoundException($entity, 'Unable to find Event entity.');

        $deleteForm = $this->createDeleteForm($entity->getId());

        return $this->render('EventBundle:Event:show.html.twig', array(
            'entity'      => $entity,
            'users'       => $users,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function inviteAction(Request $request, $user_id)
    {
        $em = $this->getDoctrine()->getManager();
        $eventId = $request->query->get('event_id');

        $event = $em->getRepository('EventBundle:Event')->find($eventId);
        $user = $em->getRepository('UserBundle:User')->find($user_id);

        $this->checkForNotFoundException($event, 'No event found for id '.$eventId);

        if (!$event->hasInvitee($user)) {
            $event->getInvitees()->add($user);
        }

        $em->persist($event);
        $em->flush();

        $url = $this->generateUrl('event_show', array(
            'slug' => $event->getSlug(), ));
        return $this->redirect($url);

        //        $request->query->get('foo');
//        var_dump($request->query->get('event_id'), $user_id);die;
//        var_dump($user_id);die;
//        $url = $this->generateUrl('event_show', array(
//            'slug' => $event->getSlug(), ));
//        return $this->redirect($url);
    }

    /**
     * @Template
     */
    public function upcomingAction()
    {
        $userName = $this->getUser()->getUsername();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventBundle:Event')->getUpcomingEvents();

        return array(
            'userName' => $userName,
            'entities' => $entities,
        );
    }

    public function attendAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var $event \Bundle\EventBundle\Entity\Event */
        $event = $em->getRepository('EventBundle:Event')->find($id);

        $this->checkForNotFoundException($event, 'No event found for id '.$id);

        if (!$event->hasAttendee($this->getUser())) {
            $event->getAttendees()->add($this->getUser());
        }

        $em->persist($event);
        $em->flush();
        $url = $this->generateUrl('event_show', array(
            'slug' => $event->getSlug(), ));
        return $this->redirect($url);
    }

    public function unattendAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var $event \Bundle\EventBundle\Entity\Event */
        $event = $em->getRepository('EventBundle:Event')->find($id);

        $this->checkForNotFoundException($event, 'No event found for id '.$id);

        if ($event->hasAttendee($this->getUser())) {
            $event->getAttendees()->removeElement($this->getUser());
        }

        $em->persist($event);
        $em->flush();

        $url = $this->generateUrl('event_show', array(
            'slug' => $event->getSlug(), ));
        return $this->redirect($url);
    }

    /**
     * Displays a form to edit an existing Event entity.
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction($id)
    {
//        $this->enforceUserSecurity();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventBundle:Event')->find($id);

        $this->checkForNotFoundException($entity, 'Unable to find Event entity.');
        $this->enforceOwnerSecurity($entity);

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Event entity.
    *
    * @param Event $entity The entity
    * @Security("has_role('ROLE_USER')")
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Event $entity)
    {
//        $this->enforceUserSecurity();

        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Event entity.
     * @Security("has_role('ROLE_USER')")
     */
    public function updateAction(Request $request, $id)
    {
//        $this->enforceUserSecurity();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventBundle:Event')->find($id);

        $this->checkForNotFoundException($entity, 'Unable to find Event entity.');

        $this->enforceOwnerSecurity($entity);

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('event_edit', array('id' => $id)));
        }

        return $this->render('EventBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Event entity.
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, $id)
    {
//        $this->enforceUserSecurity();

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventBundle:Event')->find($id);

            $this->checkForNotFoundException($entity, 'Unable to find Event entity.');

            $this->enforceOwnerSecurity($entity);

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('event'));
    }

    /**
     * Creates a form to delete a Event entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

}
