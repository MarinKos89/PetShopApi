<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/pet')) {
            // petID
            if (preg_match('#^/pet/(?P<petID>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'petID')), array (  '_controller' => 'App\\API\\ByIDFindPet',));
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_petID;
                }

                return $ret;
            }
            not_petID:

            // pet_findByStatus
            if ('/pet/findByStatus' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\ByStatusFindPet',  '_route' => 'pet_findByStatus',);
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_pet_findByStatus;
                }

                return $ret;
            }
            not_pet_findByStatus:

        }

        // app_home_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\API\\HomeController::homepage',  '_route' => 'app_home_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_home_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_home_homepage'));
            }

            return $ret;
        }
        not_app_home_homepage:

        // app_home_show
        if (0 === strpos($pathinfo, '/news') && preg_match('#^/news/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_show')), array (  '_controller' => 'App\\API\\HomeController::show',));
        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
