s5my5
========================

Symfony 5.4
mySql 5.7


Requirements
------------
* PHP 7.4 or higher;
* PDO-MySql-5.7;
* and the [usual Symfony application requirements][6].

Resources
------------
* [Symfony Documentations][8].
* [Symfony Best Practices][5].
* [SymfonyCasts][4].

Setup
--------

- `composer install`


- `php bin/console doctrine:database:create`


- `php bin/console make:migration`
- `php bin/console doctrine:migrations:migrate`


- `php bin/console doctrine:fixtures:load`







[2]: https://symfony.com/
[3]: https://symfony.com/doc/current/setup.html
[4]: https://symfonycasts.com/
[5]: https://symfony.com/doc/current/best_practices.html
[6]: https://symfony.com/doc/current/reference/requirements.html
[7]: https://symfony.com/cloud/
[8]: https://symfony.com/doc/current/