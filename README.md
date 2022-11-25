<h1 align="center">Convention</h1>

Trip Teknologi's Codebase Convention.

Getting Started
---

Installation :

```
$ composer require --dev tripteki/laravelphp-test
```

How to use :

- Publish `phpunit.xml` file in the root of your project's directory with running :

```
php artisan vendor:publish --tag=tripteki-laravelphp-test
```

- Publish functional test needed files :

```
php artisan dusk:install
```

Usage
---

`php artisan test --coverage`

Author
---

- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))
