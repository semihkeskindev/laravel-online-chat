# Laravel Online Chat With Socket.io
![Version](https://img.shields.io/badge/version-0.0.1-blue.svg?cacheSeconds=2592000)
![Prerequisite](https://img.shields.io/badge/npm-%3E%3D5.5.0-blue.svg)
![Prerequisite](https://img.shields.io/badge/node-%3E%3D9.3.0-blue.svg)
[![Documentation](https://img.shields.io/badge/documentation-yes-brightgreen.svg)](https://github.com/kefranabg/readme-md-generator#readme)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kefranabg/readme-md-generator/graphs/commit-activity)
[![Twitter: 0x8b612](https://img.shields.io/twitter/follow/0x8b612.svg?style=social)](https://twitter.com/0x8b612)

> chat with other people real time

### 🏠 [Homepage](https://github.com/0x8b612/laravel-online-chat-websocket)

## Prerequisites

- npm >=5.5.0
- node >=9.3.0

## Install

```sh
npm install
```

```sh
laravel-echo-server configure
```

Example laravel-echo-server.json
```sh
{
	"authHost": "http://localhost",
	"authEndpoint": "/broadcasting/auth",
	"clients": [
		{
			"appId": "5d7428abeb5cb128",
			"key": "737d187f564e7e221bdd1df131bf8cf3"
		}
	],
	"database": "redis",
	"databaseConfig": {
		"redis": {},
		"sqlite": {
			"databasePath": "/database/laravel-echo-server.sqlite"
		}
	},
	"devMode": true,
	"host": null,
	"port": "6001",
	"protocol": "http",
	"socketio": {},
	"secureOptions": 67108864,
	"sslCertPath": "",
	"sslKeyPath": "",
	"sslCertChainPath": "",
	"sslPassphrase": "",
	"subscribers": {
		"http": true,
		"redis": true
	},
	"apiOriginAllow": {
		"allowCors": true,
		"allowOrigin": "http://localhost:80",
		"allowMethods": "GET, POST",
		"allowHeaders": "Origin, Content-Type, X-Auth-Token, X-Requested-With, Accept, Authorization, X-CSRF-TOKEN, X-Socket-Id"
	}
}
```

## Usage

```sh
laravel-echo-server start
```

## Author

👤 **Semih Keskin**

* Twitter: [@0x8b612](https://twitter.com/0x8b612)
* Github: [@0x8b612](https://github.com/0x8b612)
* Github: [@0x8b612](https://gitlab.com/0x8b612)

## Show your support

Give a ⭐️ if this project helped you!


## 📝 License

Copyright © 2019 [Semih Keskin](https://github.com/0x8b612).

***
