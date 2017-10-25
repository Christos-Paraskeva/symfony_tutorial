<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'event_homepage' => array (  0 =>   array (    0 => 'firstName',    1 => 'count',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'count',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'firstName',    ),    2 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_upcoming' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::upcomingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upcoming',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_attend' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::attendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/attend',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_unattend' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::unattendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/unattend',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'upcoming' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\EventController::upcomingEvents',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upcoming',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_event_report_showallevents' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\EventBundle\\Controller\\ReportController::showAllEventsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/events/report/showAllEvents.csv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\UserBundle\\Controller\\RegisterController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
