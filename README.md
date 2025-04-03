[![Laravel Brevo](https://raw.githubusercontent.com/hofmannsven/laravel-brevo/main/art/banner.png)](https://hofmannsven.com/?ref=github)

# Laravel Brevo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hofmannsven/laravel-brevo.svg?labelColor=232e4a&color=55597b&style=for-the-badge)](https://packagist.org/packages/hofmannsven/laravel-brevo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hofmannsven/laravel-brevo/run-tests.yml?branch=main&label=tests&labelColor=232e4a&color=55597b&style=for-the-badge)](https://github.com/hofmannsven/laravel-brevo/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub license](https://img.shields.io/github/license/hofmannsven/laravel-brevo.svg?labelColor=232e4a&color=55597b&style=for-the-badge)](https://raw.githubusercontent.com/hofmannsven/laravel-brevo/master/LICENSE.md)

This package is a wrapper for [Brevo's API v3 PHP library](https://github.com/getbrevo/brevo-php).

Tested with PHP versions 8.1, 8.2, 8.3, and 8.4 on Laravel 10, Laravel 11, and Laravel 12.

## Installation

You can install the package via Composer:

```bash
composer require hofmannsven/laravel-brevo
```

### Publish the config files

Publish package config files:

```bash
php artisan vendor:publish --provider="Hofmannsven\Brevo\BrevoServiceProvider"
```

### Set the API Key

In your `.env' file, add your Brevo API key:

```
BREVO_API_KEY=xxx
```

## Usage

```php
use Hofmannsven\Brevo\Facades\Brevo;

// Account
$result = Brevo::AccountApi()->getAccount();
var_dump($result);

// Domains
$result = Brevo::DomainsApi()->getDomains();
var_dump($result);

// Contacts
$result = Brevo::ContactsApi()->getContacts();
var_dump($result);

// With custom client
$result = Brevo::AccountApi(
    new \GuzzleHttp\Client()
)->getAccount();
```

## Available APIs

Use any `getbrevo/brevo-php` API (see [supported functions](https://developers.brevo.com/docs/available-functions-in-api-clients)):

- AccountApi
- AttributesApi
- CompaniesApi
- ContactsApi
- ConversationsApi
- CouponsApi
- CRMApi
- DealsApi
- DomainsApi
- EcommerceApi
- EmailCampaignsApi
- EventsApi
- ExternalFeedsApi
- FilesApi
- FoldersApi
- InboundParsingApi
- ListsApi
- MasterAccountApi
- NotesApi
- ProcessApi
- ResellerApi
- SendersApi
- SMSCampaignsApi
- TasksApi
- TransactionalEmailsApi
- TransactionalSMSApi
- TransactionalWhatsAppApi
- UserApi
- WebhooksApi
- WhatsAppCampaignsApi

## Development

### Code Style Fixer

```bash
composer format
```

### Testing

```bash
composer test
```

## Changelog

Please read the [changelog](https://github.com/hofmannsven/laravel-brevo/blob/master/CHANGELOG.md) for more information about recent changes.

## Contributing

Please read the [contribution guidelines](https://github.com/hofmannsven/laravel-brevo/blob/master/.github/CONTRIBUTING.md) for details.

## Support

Always feel free to [raise an issue](https://github.com/hofmannsven/laravel-brevo/issues) on GitHub.

## Security

If you discover a security issue, please contact me directly. 
My GPG fingerprint/key is available on [Keybase](https://keybase.io/hofmannsven).

## Credits

- [Sven Hofmann](https://github.com/hofmannsven)
- [All Contributors](https://github.com/hofmannsven/laravel-brevo/graphs/contributors)

## License

MIT License (MIT). Please read the [license](LICENSE.md) for more information.

<sup><sub>Laravel and the Laravel logo are trademarks of Taylor Otwell. Banner image generated with banners.beyondco.de</sub></sup>
