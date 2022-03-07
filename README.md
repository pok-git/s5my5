s5my5
========================

Testing a _Symfony 5.4_ _mySql 5.7_ setup

config/packages/doctrine.yaml

    doctrine:
        dbal:
            charset: utf8mb4
            default_table_options:
                charset:    utf8mb4
                collate:    utf8mb4_unicode_ci
                engine:     InnoDB

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

Useful
--------
`composer install`  

### database
`php bin/console doctrine:database:drop --force`  
`php bin/console doctrine:database:create`  

### migrations
`php bin/console doctrine:migrations:status`  
`php bin/console doctrine:migrations:list`  

`php bin/console doctrine:migrations:version --delete --all`  

`php bin/console make:migration`  
`php bin/console doctrine:migrations:migrate`  

### fixtures
`php bin/console doctrine:fixtures:load`  







[2]: https://symfony.com/
[3]: https://symfony.com/doc/current/setup.html
[4]: https://symfonycasts.com/
[5]: https://symfony.com/doc/current/best_practices.html
[6]: https://symfony.com/doc/current/reference/requirements.html
[7]: https://symfony.com/cloud/
[8]: https://symfony.com/doc/current/