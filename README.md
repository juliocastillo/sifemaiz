ninfac
======

A Symfony project created on May 14, 2017, 11:43 am.

symfony new ninfac 2.8

setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

php app/console cache:clear; php app/console cache:clear --env=prod; php app/console assets:install web --symlink; php app/console assets:install web --symlink --env=prod

composer require sonata-project/admin-bundle

composer require sonata-project/doctrine-orm-admin-bundle

composer require sonata-project/easy-extends-bundle

composer require sonata-project/user-bundle --no-update

php app/console sonata:easy-extends:generate SonataUserBundle -d src

php app/console doctrine:schema:update --force

php app/console fos:user:create --super-admin


#mapear una sola entidad
php app/console doctrine:mapping:convert xml ./src/Ninfac/ContaBundle/Resources/config/doctrine/metadata/orm  --from-database --filter="CtlEmpresa" --force
php app/console doctrine:mapping:import NinfacContaBundle annotation --filter="CtlEmpresa"
php app/console doctrine:generate:entities NinfacContaBundle:CtlEmpresa

