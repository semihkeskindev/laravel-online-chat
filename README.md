# Laravel Online Chat With Socket.io
![Version](https://img.shields.io/badge/version-0.0.1-blue.svg?cacheSeconds=2592000)
![Prerequisite](https://img.shields.io/badge/npm-%3E%3D5.5.0-blue.svg)
![Prerequisite](https://img.shields.io/badge/node-%3E%3D9.3.0-blue.svg)
[![Documentation](https://img.shields.io/badge/documentation-yes-brightgreen.svg)](https://github.com/kefranabg/readme-md-generator#readme)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kefranabg/readme-md-generator/graphs/commit-activity)
[![Twitter: 0x8b612](https://img.shields.io/twitter/follow/0x8b612.svg?style=social)](https://twitter.com/0x8b612)

> chat with other people real time

![image](https://i.ibb.co/QN14JmZ/image.png)


## Installation

```sh
cp .env.example .env
```

Set up Database Configuration on .env
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```

Then run this commands:
```sh
composer install
php artisan key:generate
php artisan migrate
npm install -g laravel-echo-server
npm install
npm run prod
```

## Usage

Run the command:
```sh
laravel-echo-server configure
```

Then enter as in the screenshot below:

![image](https://i.ibb.co/qFDxrxn/Screen-Shot-2020-01-12-at-19-12-28.png)


Run the command (**_AND KEEP COMMAND RUNNING!!!_**):
```sh
laravel-echo-server start
```

![image](https://i.ibb.co/DGMTpdy/image.png)

Enjoy the online chat! ^^

* Twitter: [@semihkeskindev](https://twitter.com/semihkeskindev)
* Github: [@semihkeskindev](https://github.com/semihkeskindev)
* Gitlab: [@semihkeskin](https://gitlab.com/semihkeskin)

***

    
