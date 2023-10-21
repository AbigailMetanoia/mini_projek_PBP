## How to Install

<!-- #### Preset Laravel Excel
```
pastikan uncomment `extension=gd` pada `php.ini` server xampp
``` -->

#### 1. Install composer dependencies
```
composer install
```

#### 2. Copy .env.example or rename the .env.example file to .env
```
cp .env.example .env
```
Edit the configuration inside .env, for example:
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=Bukorama

#### 3. Generate key
```
php artisan key:generate
```

#### 4. Run the migration
```
php artisan migrate --seed
```

#### 5. Run the server
```
php artisan serve
```
