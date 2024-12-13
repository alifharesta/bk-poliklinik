composer update
cp .env.example .env
php artisan key:generate
ganti koneksi database pada file .env
php artisan migrate --seed
php artisan serve
