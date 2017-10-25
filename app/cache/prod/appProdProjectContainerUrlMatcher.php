<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // event_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<firstName>[^/]++)/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_homepage')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\DefaultController::indexAction',));
        }

        // event_show
        if (preg_match('#^/(?P<slug>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::showAction',));
        }

        // event_new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
        }

        // event_create
        if ('/create' === $pathinfo) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_event_create;
            }

            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
        }
        not_event_create:

        // event_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::editAction',));
        }

        // event_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_event_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::updateAction',));
        }
        not_event_update:

        // event_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_event_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::deleteAction',));
        }
        not_event_delete:

        // event_upcoming
        if ('/upcoming' === $pathinfo) {
            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::upcomingAction',  '_route' => 'event_upcoming',);
        }

        // event_attend
        if (preg_match('#^/(?P<id>[^/]++)/attend$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_attend')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::attendAction',));
        }

        // event_unattend
        if (preg_match('#^/(?P<id>[^/]++)/unattend$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_unattend')), array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::unattendAction',));
        }

        // event
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'event');
            }

            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
        }

        // upcoming
        if ('/upcoming' === $pathinfo) {
            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::upcomingEvents',  '_route' => 'upcoming',);
        }

        // _event_report_showallevents
        if ('/events/report/showAllEvents.csv' === $pathinfo) {
            return array (  '_controller' => 'Bundle\\EventBundle\\Controller\\ReportController::showAllEventsAction',  '_route' => '_event_report_showallevents',);
        }

        // user_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'Bundle\\UserBundle\\Controller\\RegisterController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login_form
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_form',);
                }

                // login_check
                if ('/login_check' === $pathinfo) {
                    return array (  '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
