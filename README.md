# How to run project:
1. Make copy of `.env.dev` and name it to `.env`
2. In project's catalog run command: `docker-compose build --pull --no-cache`
3. After build passed run another command: `docker-compose up -d`
4. Enter php container: `docker exec -it ahe-projekt-php /bin/bash`
5. In php container run: `composer install`
6. After composer finished run: `php artisan migrate`
6. Seed the database: `php artisan db:seed`
7. Next generate app key: `php artisan key:generate`
8. Assign role to your user: `sync:user-roles-permissions --id={your_user_id} --roles={role_name}'`
9. Make 777 to storage: `chmod 777 storage -R`
10. Finally add host to `/etc/hosts`: `192.168.99.2 kidsec.pl`
11. Enjoy!