run:
	php artisan serve
seed:
	php artisan db:seed --class=DatabaseSeeder
migrate:
	php artisan migrate
fresh:
	php artisan migrate:fresh --seed --seeder=DatabaseSeeder
