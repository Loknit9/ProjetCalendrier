@REM n'efface pas la base de données
symfony console make:migration
symfony console doctrine:migrations:migrate

@REM pour remplir la BD avec des fausses données
@REM symfony console doctrine:fixtures:load

@REM Pour lancer le fichier: appeler le fichier dans le terminal
