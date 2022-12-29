<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    //Conexión a gestor de base de datos "Postgresql"
    'default' => env('DB_CONNECTION', 'pgsql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


        'pgsql' => [
            'driver' => env('DB_DRIVER_P'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_001_Yolomecatl' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_1', '127.0.0.1'),
            'port' => env('DB_PORT_1', '5432'),
            'database' => env('DB_DATABASE_1', 'forge'),
            'username' => env('DB_USERNAME_1', 'forge'),
            'password' => env('DB_PASSWORD_1', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_002_Nochixtlan' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_2', '127.0.0.1'),
            'port' => env('DB_PORT_2', '5432'),
            'database' => env('DB_DATABASE_2', 'forge'),
            'username' => env('DB_USERNAME_2', 'forge'),
            'password' => env('DB_PASSWORD_2', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_003_Oaxaca_Arteaga' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_3', '127.0.0.1'),
            'port' => env('DB_PORT_3', '5432'),
            'database' => env('DB_DATABASE_3', 'forge'),
            'username' => env('DB_USERNAME_3', 'forge'),
            'password' => env('DB_PASSWORD_3', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_005_Huajuapan' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_5', '127.0.0.1'),
            'port' => env('DB_PORT_5', '5432'),
            'database' => env('DB_DATABASE_5', 'forge'),
            'username' => env('DB_USERNAME_5', 'forge'),
            'password' => env('DB_PASSWORD_5', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_006_Nicananduta' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_6', '127.0.0.1'),
            'port' => env('DB_PORT_6', '5432'),
            'database' => env('DB_DATABASE_6', 'forge'),
            'username' => env('DB_USERNAME_6', 'forge'),
            'password' => env('DB_PASSWORD_6', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_007_Coixtlahuaca' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_7', '127.0.0.1'),
            'port' => env('DB_PORT_7', '5432'),
            'database' => env('DB_DATABASE_7', 'forge'),
            'username' => env('DB_USERNAME_7', 'forge'),
            'password' => env('DB_PASSWORD_7', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_008_Tepelmeme' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_8', '127.0.0.1'),
            'port' => env('DB_PORT_8', '5432'),
            'database' => env('DB_DATABASE_8', 'forge'),
            'username' => env('DB_USERNAME_8', 'forge'),
            'password' => env('DB_PASSWORD_8', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_010_Tezoatlan' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_10', '127.0.0.1'),
            'port' => env('DB_PORT_10', '5432'),
            'database' => env('DB_DATABASE_10', 'forge'),
            'username' => env('DB_USERNAME_10', 'forge'),
            'password' => env('DB_PASSWORD_10', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_012_Ajalpan' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_12', '127.0.0.1'),
            'port' => env('DB_PORT_12', '5432'),
            'database' => env('DB_DATABASE_12', 'forge'),
            'username' => env('DB_USERNAME_12', 'forge'),
            'password' => env('DB_PASSWORD_12', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_015_Oficinas_Generales' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_15', '127.0.0.1'),
            'port' => env('DB_PORT_15', '5432'),
            'database' => env('DB_DATABASE_15', 'forge'),
            'username' => env('DB_USERNAME_15', 'forge'),
            'password' => env('DB_PASSWORD_15', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'pgsql_015_Oficinas_Generales_login' => [
            'driver' => env('DB_DRIVER'),
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_15_l', '127.0.0.1'),
            'port' => env('DB_PORT_15_l', '5432'),
            'database' => env('DB_DATABASE_15_l', 'forge'),
            'username' => env('DB_USERNAME_15_l', 'forge'),
            'password' => env('DB_PASSWORD_15_l', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
