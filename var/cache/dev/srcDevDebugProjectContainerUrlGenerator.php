<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'pet_findByStatus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\Pet\\Action\\ByStatusFindPet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pet/findByStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_key' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\Pet\\Action\\DeletePet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pet/{petID',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petID' => array (  0 =>   array (    0 => 'petID',  ),  1 =>   array (    '_controller' => 'App\\API\\Pet\\Action\\InStoreUpdatePet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'petID',    ),    1 =>     array (      0 => 'text',      1 => '/pet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'orderID' => array (  0 =>   array (    0 => 'orderID',  ),  1 =>   array (    '_controller' => 'App\\API\\Store\\Action\\ByIDFindsPurchaseOrderinStore',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'orderID',    ),    1 =>     array (      0 => 'text',      1 => '/store/order',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inventory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\Store\\Action\\ByStatusReturnInventoryStore',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/inventory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\User\\Action\\LogOutUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'username' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\User\\Action\\UpdateUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/{username',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'body' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\API\\User\\Action\\WithListCreateUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/createWithList',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
