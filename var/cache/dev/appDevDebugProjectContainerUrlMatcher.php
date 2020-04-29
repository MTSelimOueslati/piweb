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

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // esprit_api_homepage
        if ('/esprit' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_api_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_esprit_api_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'esprit_api_homepage'));
            }

            return $ret;
        }
        not_esprit_api_homepage:

        if (0 === strpos($pathinfo, '/esprit/tasks')) {
            if (0 === strpos($pathinfo, '/esprit/tasks/all')) {
                // all
                if ('/esprit/tasks/all' === $pathinfo) {
                    return array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::allAction',  '_route' => 'all',);
                }

                // all_associations
                if ('/esprit/tasks/allAssociations' === $pathinfo) {
                    return array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::allAssociationsAction',  '_route' => 'all_associations',);
                }

            }

            elseif (0 === strpos($pathinfo, '/esprit/tasks/find')) {
                // find_task
                if (preg_match('#^/esprit/tasks/find/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_task']), array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::findAction',));
                }

                // find_association
                if (0 === strpos($pathinfo, '/esprit/tasks/findAssociation') && preg_match('#^/esprit/tasks/findAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_association']), array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::findAssociationAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/esprit/tasks/new')) {
                // create_task
                if ('/esprit/tasks/new' === $pathinfo) {
                    return array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::newAction',  '_route' => 'create_task',);
                }

                // create_association
                if ('/esprit/tasks/newAssociation' === $pathinfo) {
                    return array (  '_controller' => 'EspritApiBundle\\Controller\\EspritApiController::newAssociationAction',  '_route' => 'create_association',);
                }

            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/associations')) {
            // associations_homepage
            if ('/associations' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AssociationsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'associations_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_associations_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'associations_homepage'));
                }

                return $ret;
            }
            not_associations_homepage:

            // associations_ajouterAssociation
            if ('/associations/ajouterAssociation' === $pathinfo) {
                return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::ajouterAssociationAction',  '_route' => 'associations_ajouterAssociation',);
            }

            if (0 === strpos($pathinfo, '/associations/afficherAssociation')) {
                // associations_afficherAssociation
                if ('/associations/afficherAssociation' === $pathinfo) {
                    return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::afficherAssociationAction',  '_route' => 'associations_afficherAssociation',);
                }

                // associations_afficherAssociationClient
                if ('/associations/afficherAssociationClient' === $pathinfo) {
                    return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::afficherAssociationClientAction',  '_route' => 'associations_afficherAssociationClient',);
                }

            }

            // associations_modifierAssociation
            if (0 === strpos($pathinfo, '/associations/modifierAssociation') && preg_match('#^/associations/modifierAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_modifierAssociation']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::modifierAssociationAction',));
            }

            // associations_supprimerAssociation
            if (0 === strpos($pathinfo, '/associations/supprimerAssociation') && preg_match('#^/associations/supprimerAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_supprimerAssociation']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::supprimerAssociationAction',));
            }

            if (0 === strpos($pathinfo, '/associations/showDetails')) {
                // associations_showDetails
                if (preg_match('#^/associations/showDetails/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_showDetails']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::showDetailsAction',));
                }

                // associations_showDetailsAdmin
                if (0 === strpos($pathinfo, '/associations/showDetailsAdmin') && preg_match('#^/associations/showDetailsAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_showDetailsAdmin']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::showDetailsAdminAction',));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
