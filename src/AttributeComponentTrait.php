<?php

namespace uzdevid\telegram\bot;

use Exception;
use Throwable;
use yii\base\InvalidCallException;
use yii\base\UnknownPropertyException;

/**
 * Trait AttributeComponentTrait
 * @package uzdevid\telegram\bot
 *
 * @property array $attributes
 */
trait AttributeComponentTrait {
    private array $_attributes = [];

    public function __construct(array $attributes = []) {
        $this->setAttributes($attributes);
    }

    public function __get($name) {
        if (isset($this->_attributes[$name]) || array_key_exists($name, $this->_attributes)) {
            return $this->_attributes[$name];
        }

        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        if (method_exists($this, 'set' . $name)) {
            throw new InvalidCallException('Getting write-only property: ' . get_class($this) . '::' . $name);
        }

        throw new UnknownPropertyException('Getting unknown property: ' . get_class($this) . '::' . $name);
    }

    public function __set($name, $value) {
        $setter = 'set' . $name;

        if (property_exists($this, $name)) {
            $this->$name = $value;
        } elseif (method_exists($this, $setter)) {
            $this->$setter($value);
        } else {
            $this->_attributes[$name] = $value;
        }
    }

    public function __isset($name) {
        try {
            return $this->__get($name) !== null;
        } catch (Exception $t) {
            return false;
        } catch (Throwable $e) {
            return false;
        }
    }

    public function hasAttribute($name) {
        return isset($this->_attributes[$name]);
    }

    public function __unset($name) {
        if ($this->hasAttribute($name)) {
            unset($this->_attributes[$name]);
            return;
        }

        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter(null);
            return;
        }

        throw new InvalidCallException('Unsetting an unknown or read-only property: ' . get_class($this) . '::' . $name);
    }

    /**
     * @return array
     */
    public function getAttributes(): array {
        return $this->_attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void {
        $this->_attributes = $attributes;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function addAttribute(string $name, mixed $value): void {
        $this->_attributes[$name] = $value;
    }

    public function pushAttribute(string $name, mixed $value): void {
        $values = [];

        if ($this->issetAttribute($name)) {
            $values = $this->getAttribute($name);
        }

        $values[] = $value;
        $this->addAttribute($name, $values);
    }

    public function getAttribute(string $name): mixed {
        $attributes = $this->getAttributes();
        return $attributes[$name];
    }

    public function issetAttribute(string $name): bool {
        $attributes = $this->getAttributes();
        return isset($attributes[$name]);
    }
}