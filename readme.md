# FiveReborn admin

This application allows you to manage your five reborn server.
You have the ability to:

- Add multiple users
- Kick players from the five reborn server
- Ban players from the five reborn server

## Server Requirements

- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

- Run composer install
- Open .env and edit the DB and FIVEREBORN settings
```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

```
FIVEREBORN_IP=
FIVEREBORN_PORT=
FIVEREBORN_PASSWORD=
```

- Run php artisan migrate:install
- Run php artisan migrate
- Run php artisan db:seed
- Open the application in your browser and login with the username **admin** and password **admin**.

## Changelog

24/12/2016

- Changed the current players page to a reloadable widget.
- Added translations.
- Added user management.
- Added notification if no players are connected to the server.

## TODO

- Add a installation wizard to make the installation process easier
- Add integration with [Freeroam 2 by Kanersps](https://forum.fivem.net/t/release-freeroam-2-by-kanersps/2474)

## License

FiveReborn admin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
