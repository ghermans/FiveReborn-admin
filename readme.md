# FiveReborn admin

This web application allowes you to control the FiveReborn server from your browser.
It is based on the version from [Slluxx](https://github.com/Slluxx/Fivereborn-Webmanager) however it has some major security and features improvements.

## Changelog

- Changed the current players page to a reloadable widget.
- Added translations.
- Added user management.
- Added notification if no players are connected to the server.

## Installation

- composer install
- open .env_example and edit the DB and FIVEREBORN settings.
- run php artisan migrate:install
- run php artisan migrate
- open the application in your browser and login with the username **admin** and password **admin**.

## TODO

- Add a installation wizard to make the installation process easier

## License

FiveReborn admin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).