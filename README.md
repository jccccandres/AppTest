## Installation

#### cd into project foler
```sh
cd AppTest
```

#### install composer dependencies
```sh
composer install
```

#### create a copy of .env
```sh
cp .env.example .env
```

#### create an empty database and add database information to .env
fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`

#### migrate and seed the database
```sh
php artisan migrate:fresh --seed
```

#### run the app
```sh
php artisan serve
```

## API
<details>
    <summary><code>GET</code> <code><b>/</b></code> <code>(get all users)</code></summary>
    
##### Responses
    
> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `application/json`                | {"data":[{"id":1,"name":"sample",..},..]}                           |
    
##### Example cURL

> ```javascript
> curl -X GET -H "Content-Type: application/json" http://127.0.0.1:8000/api/v1/users
> ```
    
</details>

<details>
    <summary><code>GET</code> <code><b>/</b></code> <code>(get all roles)</code></summary>
    
##### Responses
    
> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `application/json`                | {"data":[{"id":1,"description":"sample",..},..]}                           |
    
##### Example cURL

> ```javascript
> curl -X GET -H "Content-Type: application/json" http://127.0.0.1:8000/api/v1/roles
> ```
    
</details>

<details>
    <summary><code>POST</code> <code><b>/</b></code> <code>(insert user)</code></summary>

##### Parameters

> | name      |  type     | data type               | description                                                           |
> |-----------|-----------|-------------------------|-----------------------------------------------------------------------|
> | name      |  required | string   | - |
> | email     |  required | string   | - |
> | roles     |  required | array    | - |

##### Responses
    
> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `201`         | `application/json`                | {"data":[{"id":1,"name":"sample",..},..]}                           |

##### Example cURL

> ```javascript
> curl -X POST -H "Content-Type: application/json" --data @post.json http://127.0.0.1:8000/api/v1/roles
> ```
</details>
