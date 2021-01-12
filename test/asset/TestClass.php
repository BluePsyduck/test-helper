<?php

declare(strict_types=1);

namespace BluePsyduckTestAsset\TestHelper;

/**
 * A class for testing the reflections.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class TestClass
{
    /**
     * A protected property.
     * @var mixed
     */
    protected $protectedProperty;

    /**
     * A protected static property.
     * @var mixed
     */
    protected static $protectedStaticProperty;

    /**
     * Sets the protected property.
     * @param mixed $protectedProperty
     * @return $this
     */
    public function setProtectedProperty($protectedProperty): self
    {
        $this->protectedProperty = $protectedProperty;
        return $this;
    }

    /**
     * Returns the protected property.
     * @return mixed
     */
    public function getProtectedProperty()
    {
        return $this->protectedProperty;
    }

    /**
     * Sets the protected static property.
     * @param mixed $protectedStaticProperty
     */
    public static function setProtectedStaticProperty($protectedStaticProperty): void
    {
        self::$protectedStaticProperty = $protectedStaticProperty;
    }

    /**
     * Returns the protected static property.
     * @return mixed
     */
    public static function getProtectedStaticProperty()
    {
        return self::$protectedStaticProperty;
    }

    /**
     * A protected method adding two numbers.
     * @param int $a
     * @param int $b
     * @return int
     */
    protected function protectedMethod(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * A protected static method multiplying two numbers.
     * @param int $a
     * @param int $b
     * @return int
     */
    protected static function protectedStaticMethod(int $a, int $b): int
    {
        return $a * $b;
    }
}
