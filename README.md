# This is my package VueForm

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mahmudz/vue_form.svg?style=flat-square)](https://packagist.org/packages/mahmudz/vue_form)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mahmudz/vue_form/run-tests?label=tests)](https://github.com/mahmudz/vue_form/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mahmudz/vue_form/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mahmudz/vue_form/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/mahmudz/vue_form.svg?style=flat-square)](https://packagist.org/packages/mahmudz/vue_form)

[](delete) 1) manually replace `Mahmudul Hasan, mahmudz, auhor@domain.com, mahmudz, mahmudz, Vendor Name, vue-form, vue_form, vue_form, VueForm, This is my package VueForm` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, VueForm.php, VueFormCommand.php, VueFormFacade.php, VueFormServiceProvider.php, TestCase.php, composer.json, create_vue_form_table.php.stub`
[](delete) and delete `configure-vue_form.sh`

[](delete) 2) You can also run `./configure-vue_form.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-vue_form-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-vue_form-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require mahmudz/vue_form
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Mahmudz\VueForm\VueFormServiceProvider" --tag="vue_form-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Mahmudz\VueForm\VueFormServiceProvider" --tag="vue_form-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$vue_form = new Mahmudz\VueForm();
echo $vue_form->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mahmudul Hasan](https://github.com/mahmudz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
