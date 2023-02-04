# Austria vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Austria vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/at-vat-format-validator
```

## Usage example

Valid Austria vat number:

```php
$validator = new ATVatFormatValidator();
$validator->isValid('ATU12345678');
$validator->isValid('U12345678');
```

Returns:

```shell
true
true
```

Invalid Austria vat number:

```php
$validator = new ATVatFormatValidator();
$validator->isValid('AT99999999');
$validator->isValid('U123456789');
```

```shell
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
