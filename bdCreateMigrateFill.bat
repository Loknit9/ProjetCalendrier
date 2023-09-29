del migrations\*
symfony console doctrine:database:drop --force
symfony console doctrine:database:create
symfony console make:migration
symfony console doctrine:migration:migrate
@REM pour remplir la BD avec des fausses données
symfony console doctrine:fixtures:load
