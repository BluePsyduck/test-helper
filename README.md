# BluePsyduck's Test Helper

This library contains a trait helping with testing classes using PHPUnit by providing some shortcut methods for the 
test cases.

## ReflectionTrait

The `ReflectionTrait` is a trait which adds methods for easier access to non-public properties and methods, making
mocking them easier. The trait comes with the following methods:

* `injectProperty($object, $name, $value)`: Injects the value to a property of the object, or to a static property of a 
  class.
* `extractProperty($object, $name)`: Extracts the value of a property from the object, or of a static property of a 
  class.
* `invokeMethod($object, $name, ...$params)`: Invokes a non-public method on the object. Note that parameters are 
  passed as value, so the passed variables will not get modified if the invoked method uses reference parameters.
  
Additional note: Instead of actual instances a fully qualified class name can be passed as `$object` for each of the 
methods to access static member of that class.