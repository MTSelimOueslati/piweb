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

        // esprit_api_homepage
        if ('' === $trimmedPathinfo) {
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

        // all
        if ('/tasks/all' === $pathinfo) {
            return array (  '_controller' => 'EspritApiBundle:Task:all',  '_route' => 'all',);
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

        // associations_homepage
        if ('' === $trimmedPathinfo) {
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
        if ('/ajouterAssociation' === $pathinfo) {
            return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::ajouterAssociationAction',  '_route' => 'associations_ajouterAssociation',);
        }

        if (0 === strpos($pathinfo, '/afficherAssociation')) {
            // associations_afficherAssociation
            if ('/afficherAssociation' === $pathinfo) {
                return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::afficherAssociationAction',  '_route' => 'associations_afficherAssociation',);
            }

            // associations_afficherAssociationClient
            if ('/afficherAssociationClient' === $pathinfo) {
                return array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::afficherAssociationClientAction',  '_route' => 'associations_afficherAssociationClient',);
            }

        }

        // associations_modifierAssociation
        if (0 === strpos($pathinfo, '/modifierAssociation') && preg_match('#^/modifierAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_modifierAssociation']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::modifierAssociationAction',));
        }

        // associations_supprimerAssociation
        if (0 === strpos($pathinfo, '/supprimerAssociation') && preg_match('#^/supprimerAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_supprimerAssociation']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::supprimerAssociationAction',));
        }

        if (0 === strpos($pathinfo, '/showDetails')) {
            // associations_showDetails
            if (preg_match('#^/showDetails/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_showDetails']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::showDetailsAction',));
            }

            // associations_showDetailsAdmin
            if (0 === strpos($pathinfo, '/showDetailsAdmin') && preg_match('#^/showDetailsAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'associations_showDetailsAdmin']), array (  '_controller' => 'AssociationsBundle\\Controller\\AssociationController::showDetailsAdminAction',));
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
