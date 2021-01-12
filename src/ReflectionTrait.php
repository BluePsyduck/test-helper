<?php

declare(strict_types=1);

namespace BluePsyduck\TestHelper;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;

/**
 * The trait helping with accessing protected and private members in tests.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
trait ReflectionTrait
{
    /**
     * Injects a property value into an object.
     * @param object $object
     * @param string $name
     * @param mixed $value
     * @return $this
     * @throws ReflectionException
     */
    protected function injectProperty(object $object, string $name, $value): self
    {
        $reflectedProperty = new ReflectionProperty($object, $name);
        $reflectedProperty->setAccessible(true);
        $reflectedProperty->setValue($object, $value);
        return $this;
    }

    /**
     * Injects a static property value into a class.
     * @param string $className
     * @param string $name
     * @param mixed $value
     * @return $this
     * @throws ReflectionException
     */
    protected function injectStaticProperty(string $className, string $name, $value): self
    {
        $reflectedClass = new ReflectionClass($className);
        $reflectedClass->setStaticPropertyValue($name, $value);
        return $this;
    }

    /**
     * Extracts a property value from an object.
     * @param object $object
     * @param string $name
     * @return mixed
     * @throws ReflectionException
     */
    protected function extractProperty(object $object, string $name)
    {
        $reflectedProperty = new ReflectionProperty($object, $name);
        $reflectedProperty->setAccessible(true);
        return $reflectedProperty->getValue($object);
    }

    /**
     * Extracts a static property value from a class.
     * @param string $className
     * @param string $name
     * @return mixed
     * @throws ReflectionException
     */
    protected function extractStaticProperty(string $className, string $name)
    {
        $reflectedClass = new ReflectionClass($className);
        return $reflectedClass->getStaticPropertyValue($name);
    }

    /**
     * Invokes a method on an object.
     * @param object $object
     * @param string $name
     * @param mixed ...$params
     * @return mixed
     * @throws ReflectionException
     */
    protected function invokeMethod(object $object, string $name, ...$params)
    {
        $reflectedMethod = new ReflectionMethod($object, $name);
        $reflectedMethod->setAccessible(true);
        return $reflectedMethod->invokeArgs($object, $params);
    }

    /**
     * Invokes a static method on a class.
     * @param string $className
     * @param string $name
     * @param mixed ...$params
     * @return mixed
     * @throws ReflectionException
     */
    protected function invokeStaticMethod(string $className, string $name, ...$params)
    {
        $reflectedClass = new ReflectionClass($className);
        $reflectedMethod = $reflectedClass->getMethod($name);
        $reflectedMethod->setAccessible(true);
        return $reflectedMethod->invokeArgs(null, $params);
    }
}
