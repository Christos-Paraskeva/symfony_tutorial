<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/8e49901')) {
            // _assetic_8e49901
            if ('/css/8e49901.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8e49901',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8e49901',);
            }

            if (0 === strpos($pathinfo, '/css/8e49901_')) {
                if (0 === strpos($pathinfo, '/css/8e49901_event')) {
                    // _assetic_8e49901_0
                    if ('/css/8e49901_event_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8e49901',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8e49901_0',);
                    }

                    // _assetic_8e49901_1
                    if ('/css/8e49901_events_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8e49901',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8e49901_1',);
                    }

                }

                // _assetic_8e49901_2
                if ('/css/8e49901_main_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8e49901',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8e49901_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if ('/_configurator' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ('/_configurator/final' === $pathinfo) {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
