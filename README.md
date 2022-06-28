# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Articles
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=AlbumsSeeder



FRONT END

1. Create Bio Component
2. Create Lanscape Component
3. Map Objects to Landscape Components Using Ajax

BACK END 

1. Build Landscape Migration
2. Build Landscape Seeds
3. Connect Database 