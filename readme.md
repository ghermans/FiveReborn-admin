# FiveReborn admin

This web application allowes you to control your FiveReborn server from the browser.
It is based on the version from [Slluxx](https://github.com/Slluxx/Fivereborn-Webmanager) however it has some major security and features improvements.

## Changelog

- Changed the current players page to a reloadable widget.
- Added translations.
- Added user management.
- Added notification if no players are connected to the server.

## Installation

- Run composer install
- Open .env_example and edit the DB and FIVEREBORN settings.
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

## TODO

- Add a installation wizard to make the installation process easier

## License

FiveReborn admin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
