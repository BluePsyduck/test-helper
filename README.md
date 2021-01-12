# BluePsyduck's Test Helper

[![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/BluePsyduck/test-helper)](https://github.com/BluePsyduck/test-helper/releases)
[![GitHub](https://img.shields.io/github/license/BluePsyduck/test-helper)](LICENSE.md)
[![build](https://img.shields.io/github/workflow/status/BluePsyduck/test-helper/CI?logo=github)](https://github.com/BluePsyduck/test-helper/actions)
[![Codecov](https://img.shields.io/codecov/c/gh/BluePsyduck/test-helper?logo=codecov)](https://codecov.io/gh/BluePsyduck/test-helper)

This library contains a trait helping with testing classes using PHPUnit by providing some shortcut methods for the 
test cases.

## ReflectionTrait

The `ReflectionTrait` is a trait which adds methods for easier access to non-public properties and methods, making
mocking them easier. The trait comes with the following methods:

* `injectProperty($object, $name, $value)`: Injects the value to a property of the object.
* `injectStaticProperty($className, $name, $value)`: Injects the value to a static property of the class.
* `extractProperty($object, $name)`: Extracts the value of a property from the object.
* `extractStaticProperty($className, $name)`: Extracts the value of a static property from the class.
* `invokeMethod($object, $name, ...$params)`: Invokes a non-public method on the object.
* `invokeStaticMethod($className, $name, ...$params)`: Invokes a non-public static method on the class.
  
Note: The parameters passed to `invokeMethod()` and `invokeStaticMethod()` are passed-by-value. If the method uses 
references, the changes made by the method will not be visible to the outside.
