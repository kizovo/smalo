<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Laravel Build Process Re-run:

1. $ composer install --no-interaction
2. $ php artisan clear-compiled
3. $ composer dumpautoload -o
4. $ php artisan optimize:clear
5. $ php artisan optimize
5. $ php artisan modelCache:clear
6. $ php artisan responsecache:clear
7. $ php artisan self-diagnosis
8. $ php artisan migrate
*note: #2-#6 can be shorten by calling: $ php artisan smalo:build

## Laravel Extras
1. Check Laravel Code by laravel-microscope:
🔹 php artisan check:events
🔹 php artisan check:gates
🔹 php artisan check:views
🔹 php artisan check:routes
🔹 php artisan check:psr4 {-s|--nofix}
🔹 php artisan check:imports {-s|--nofix}
🔹 php artisan check:stringy_classes
🔹 php artisan check:dd
🔹 php artisan check:early_returns
🔹 php artisan check:compact
🔹 php artisan check:blade_queries
🔹 php artisan check:action_comments
🔹 php artisan check:bad_practices
🔹 php artisan check:extract_blades
🔹 php artisan pp:route
🔹 php artisan check:generate
🔹 php artisan check:endif
🔹 php artisan check:all

## Additional Plugins

- [geneaLabs/laravel-model-caching](https://github.com/GeneaLabs/laravel-model-caching)
```
1. $ composer require genealabs/laravel-model-caching
2. php artisan modelCache:publish --config
3. .env config: MODEL_CACHE_ENABLED=true
4. to clear the cache: $ php artisan modelCache:clear
```

- [sentry/sentry-laravel](https://docs.sentry.io/platforms/php/guides/laravel/)
```
1. $ composer require sentry/sentry-laravel
2. $ php artisan sentry:publish --dsn=https://6c1865c30ce242b7aeaf36eb2f2b12df@o557927.ingest.sentry.io/5838839
3. .env config: SENTRY_LARAVEL_DSN=https://6c1865c30ce242b7aeaf36eb2f2b12df@o557927.ingest.sentry.io/5838839
```

- [laravel/telescope](https://laravel.com/docs/8.x/telescope)
```
1. $ composer require laravel/telescope --dev
2. $ php artisan telescope:install
3. $ php artisan migrate
```

- [spatie/laravel-responsecache](https://github.com/spatie/laravel-responsecache)
1. $ composer require spatie/laravel-responsecache
2. $ php artisan vendor:publish --provider="Spatie\ResponseCache\ResponseCacheServiceProvider"

- [imanghafoori1/laravel-microscope](https://github.com/imanghafoori1/laravel-microscope)
1. $ composer require imanghafoori/laravel-microscope --dev
2. $ php artisan vendor:publish

- [beyondcode/laravel-query-detector](https://github.com/beyondcode/laravel-query-detector)
1. $ composer require beyondcode/laravel-query-detector --dev
2. $ php artisan vendor:publish --provider="BeyondCode\QueryDetector\QueryDetectorServiceProvider"

- [beyondcode/laravel-self-diagnosis](https://github.com/beyondcode/laravel-self-diagnosis)
1. $ composer require beyondcode/laravel-self-diagnosis
2. $ php artisan vendor:publish --provider=BeyondCode\\SelfDiagnosis\\SelfDiagnosisServiceProvider
3. to check: $ php artisan self-diagnosis
