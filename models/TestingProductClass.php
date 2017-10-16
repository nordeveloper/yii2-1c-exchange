<?php


namespace carono\exchange1c\models;

use carono\exchange1c\interfaces\ProductInterface;

/**
 * Class TestingProductClass
 *
 * @package carono\exchange1c\models
 * @method static ProductInterface getPropertyClass()
 */
class TestingProductClass extends TestingClass
{
    protected static $property = 'productClass';

    public static function getContext()
    {
        $class = self::getPropertyClass();
        return call_user_func_array("$class::createModel1c", self::getParams(['cml.catalog.products.0']));
    }

    public function getResultCreateModel1c()
    {
        $params = self::getParams(['cml.catalog.products.0']);
        self::getMethodResult('createModel1c', ['cml.catalog.products.0']);
        $class = self::getPropertyClass();
        return $class::findOne([$class::getIdFieldName1c() => $params[0]->id]);
    }

    public static function methodRules()
    {
        return [
            'getIdFieldName1c' => [
                'return' => 'string',
                'auto' => true
            ],
            'createModel1c' => [
                'return' => 'interface',
                'value' => '\carono\exchange1c\interfaces\ProductInterface',
                'params' => ['cml.catalog.products.0']
            ],
            'getOffer1c' => [
                'return' => 'interface',
                'value' => '\carono\exchange1c\interfaces\OfferInterface',
                'params' => ['cml.offerPackage.offers.0']
            ],
            'setGroup1c' => [
                'return' => '',
                'params' => ['cml.catalog.products.0.group']
            ],
            'getGroup1c' => [
                'return' => 'interface',
                'value' => '\carono\exchange1c\interfaces\GroupInterface'
            ]
        ];
    }
}