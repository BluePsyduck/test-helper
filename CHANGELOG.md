# Changelog

## 2.0.0 - 2021-01-12

### Added

- New methods `injectStaticProperty`, `extractStaticProperty` and `invokeStaticMethod` to work with static members
  of a class.
- [BC Break] Added `object` type-hints to the non-static methods of the `TestTrait`. Classnames can no longer be used
  with these methods. Use the new static methods instead in these cases.

### Removed

- Support for PHP 7.0 through 7.3. Minimum required version is now PHP 7.4.

## 1.0.0 - 2019-04-23

- Initial release with the `ReflectionTrait`.
