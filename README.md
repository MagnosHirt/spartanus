# Spartanus

Laravel + Livewire application, built on the official [Livewire starter kit](https://github.com/laravel/livewire-starter-kit).

## Requirements

- PHP ^8.3
- Composer
- Node.js + npm

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

Or, in one step:

```bash
composer run setup
```

## Development

Run the app (server, queue listener, logs, and Vite) together:

```bash
composer run dev
```

## Testing & code quality

```bash
composer run lint       # format code (Pint)
composer run lint:check # check formatting without changing files
composer run types:check # static analysis (PHPStan/Larastan)
composer run test       # full test suite
```
