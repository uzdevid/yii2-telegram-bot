<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\Service;

trait ObjectTrait {
    use AttributeComponentTrait;

    public function __construct(array $data) {
        $attributes = [];
        $attributeObjects = self::attributeObjects();

        foreach ($data as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            if (isset($attributeObjects[$camelCaseName])) {
                $className = $attributeObjects[$camelCaseName];
                $attributes[$camelCaseName] = new $className($value);
            } else {
                $attributes[$camelCaseName] = $value;
            }
        }

        $this->setAttributes($attributes);
    }
}