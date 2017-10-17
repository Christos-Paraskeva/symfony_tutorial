<?php

namespace Yoda\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_form")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        // pasted from tutorial - depreciated method?
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        return array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
            'error' => $error,
        );


//        // pasted from symfony docs - symfony 2.7
//        $authenticationUtils = $this->get('security.authentication_utils');
//
//        // get the login error if there is one
//        $error = $authenticationUtils->getLastAuthenticationError();
//
//        // last username entered by the user
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('security/login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error'         => $error,
//        ));
    }
}