<?php

declare(strict_types=1);

namespace BluePsyduckTest\TestHelper;

use BluePsyduck\TestHelper\ReflectionTrait;
use BluePsyduckTestAsset\TestHelper\TestClass;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * The PHPUnit test of the reflection trait.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \BluePsyduck\TestHelper\ReflectionTrait
 */
class ReflectionTraitTest extends TestCase
{
    use ReflectionTrait;

    /**
     * Tests the injectProperty method.
     * @covers ::injectProperty
     * @throws ReflectionException
     */
    public function testInjectProperty()
    {
        $value = 42;
        $class = new TestClass();

        $this->injectProperty($class, 'protectedProperty', $value);

        $this->assertSame($value, $class->getProtectedProperty());
    }

    /**
     * Tests the extractProperty method.
     * @covers ::extractProperty
     * @throws ReflectionException
     */
    public function testExtractProperty()
    {
        $value = 42;
        $class = new TestClass();
        $class->setProtectedProperty($value);

        $result = $this->extractProperty($class, 'protectedProperty');

        $this->assertSame($value, $result);
    }

    /**
     * Tests the invokeMethod method.
     * @covers ::invokeMethod
     * @throws ReflectionException
     */
    public function testInvokeMethod()
    {
        $value1 = 42;
        $value2 = 21;
        $expectedResult = 63;
        $class = new TestClass();

        $result = $this->invokeMethod($class, 'protectedMethod', $value1, $value2);

        $this->assertSame($expectedResult, $result);
    }
}
