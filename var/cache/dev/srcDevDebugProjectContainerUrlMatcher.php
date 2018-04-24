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
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'petID')), array (  '_controller' => 'App\\API\\Pet\\Action\\ByIDFindPet',));
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_petID;
                }

                return $ret;
            }
            not_petID:

            // pet_findByStatus
            if ('/pet/findByStatus' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\Pet\\Action\\ByStatusFindPet',  '_route' => 'pet_findByStatus',);
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_pet_findByStatus;
                }

                return $ret;
            }
            not_pet_findByStatus:

            // delete_pet
            if ('/pet/{petID' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\Pet\\Action\\DeletePet',  '_route' => 'delete_pet',);
                if (!in_array($requestMethod, array('DELETE', 'DELETE'))) {
                    $allow = array_merge($allow, array('DELETE', 'DELETE'));
                    goto not_delete_pet;
                }

                return $ret;
            }
            not_delete_pet:

            // image_upload_pet
            if (preg_match('#^/pet/(?P<petID>[^/]++)/uploadImage$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'image_upload_pet')), array (  '_controller' => 'App\\API\\Pet\\Action\\ImageUploadPet',));
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_image_upload_pet;
                }

                return $ret;
            }
            not_image_upload_pet:

            // in_store_update_pet
            if (preg_match('#^/pet/(?P<petID>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'in_store_update_pet')), array (  '_controller' => 'App\\API\\Pet\\Action\\InStoreUpdatePet',));
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_in_store_update_pet;
                }

                return $ret;
            }
            not_in_store_update_pet:

            // to_store_add_pet
            if ('/pet' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\Pet\\Action\\ToStoreAddPet',  '_route' => 'to_store_add_pet',);
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_to_store_add_pet;
                }

                return $ret;
            }
            not_to_store_add_pet:

            // update_pet
            if ('/pet' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\Pet\\Action\\UpdatePet',  '_route' => 'update_pet',);
                if (!in_array($requestMethod, array('PUT', 'PUT'))) {
                    $allow = array_merge($allow, array('PUT', 'PUT'));
                    goto not_update_pet;
                }

                return $ret;
            }
            not_update_pet:

        }

        elseif (0 === strpos($pathinfo, '/store/order')) {
            // by_id_delete_purchase
            if (preg_match('#^/store/order/(?P<orderID>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'by_id_delete_purchase')), array (  '_controller' => 'App\\API\\Store\\Action\\ByIDDeletePurchaseOrderInStore',));
                if (!in_array($requestMethod, array('DELETE', 'DELETE'))) {
                    $allow = array_merge($allow, array('DELETE', 'DELETE'));
                    goto not_by_id_delete_purchase;
                }

                return $ret;
            }
            not_by_id_delete_purchase:

            // by_id_finds_purchase_order
            if (preg_match('#^/store/order/(?P<orderID>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'by_id_finds_purchase_order')), array (  '_controller' => 'App\\API\\Store\\Action\\ByIDFindsPurchaseOrderinStore',));
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_by_id_finds_purchase_order;
                }

                return $ret;
            }
            not_by_id_finds_purchase_order:

            // order_a_pet_from_store
            if ('/store/order' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\Store\\Action\\OrderAPetFromStore',  '_route' => 'order_a_pet_from_store',);
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_order_a_pet_from_store;
                }

                return $ret;
            }
            not_order_a_pet_from_store:

        }

        // status_inventory
        if ('/store/inventory' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\API\\Store\\Action\\ByStatusReturnInventoryStore',  '_route' => 'status_inventory',);
            if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                $allow = array_merge($allow, array('GET', 'GET'));
                goto not_status_inventory;
            }

            return $ret;
        }
        not_status_inventory:

        if (0 === strpos($pathinfo, '/user')) {
            // get_user
            if (preg_match('#^/user/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'App\\API\\User\\Action\\ByUserNameGetUser',));
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_get_user;
                }

                return $ret;
            }
            not_get_user:

            // create_user
            if ('/user' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\CreateUser',  '_route' => 'create_user',);
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_create_user;
                }

                return $ret;
            }
            not_create_user:

            // delete_user
            if (preg_match('#^/user/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'App\\API\\User\\Action\\DeleteUser',));
                if (!in_array($requestMethod, array('DELETE', 'DELETE'))) {
                    $allow = array_merge($allow, array('DELETE', 'DELETE'));
                    goto not_delete_user;
                }

                return $ret;
            }
            not_delete_user:

            // logout_user
            if ('/user/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\LogOutUser',  '_route' => 'logout_user',);
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_logout_user;
                }

                return $ret;
            }
            not_logout_user:

            // login_user
            if ('/user/login' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\LoginUser',  '_route' => 'login_user',);
                if (!in_array($canonicalMethod, array('GET', 'GET'))) {
                    $allow = array_merge($allow, array('GET', 'GET'));
                    goto not_login_user;
                }

                return $ret;
            }
            not_login_user:

            // update_user
            if ('/user/{username' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\UpdateUser',  '_route' => 'update_user',);
                if (!in_array($requestMethod, array('PUT', 'PUT'))) {
                    $allow = array_merge($allow, array('PUT', 'PUT'));
                    goto not_update_user;
                }

                return $ret;
            }
            not_update_user:

            // with_array_create_user
            if ('/user/createWithArray' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\WithArrayCreateUser',  '_route' => 'with_array_create_user',);
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_with_array_create_user;
                }

                return $ret;
            }
            not_with_array_create_user:

            // with_list_create_user
            if ('/user/createWithList' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\API\\User\\Action\\WithListCreateUser',  '_route' => 'with_list_create_user',);
                if (!in_array($requestMethod, array('POST', 'POST'))) {
                    $allow = array_merge($allow, array('POST', 'POST'));
                    goto not_with_list_create_user;
                }

                return $ret;
            }
            not_with_list_create_user:

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
