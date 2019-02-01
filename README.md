# oAuth2 client for Ecwid
A simple oAuth2 client for using [Ecwid API](http://api.ecwid.com/). 

## Requirements

### PHP
Supported versions:
- PHP 5.5
- PHP 5.6
- PHP 7.0
- HHVM

### Composer
Composer is used to install the dependencies: https://getcomposer.org/

## Installation
Place the following files in your working directory:

- EcwidOAuth2Provider.php
- composer.json

Run composer install to install the dependencies
`php composer.phar install`

Include `EcwidOAuth2Provider.php` in your project and use the oAuth2 client as in the example: [example/index.php](https://github.com/Ecwid/ecwid-oauth2-client-php/blob/master/example/index.php)

## Usage
See [example/index.php](https://github.com/Ecwid/ecwid-oauth2-client-php/blob/master/example/index.php)

## Ecwid API
Ecwid API docs: https://developers.ecwid.com/api-documentation

## Credits
OAuth2 client library: https://github.com/thephpleague/oauth2-client

