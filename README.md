# coding-collective-test

## Requirement
- PHP 8.2
- Node 22.11.0
- Composer 2.8.*
- Mysql

## Installation
```
composer install
npm install
```

## Database installation
- make sure to set `.env` and your own MySQL database first.
- `php artisan migrate`
- `php artisan db:seed`

## Running the web
- Run both `php artisan serve` and `npm run dev` at the same time.
