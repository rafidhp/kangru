#!/bin/bash

# Jalankan migrasi
php artisan migrate:fresh --force

# Jalankan seeder (opsional)
php artisan db:seed --force || echo "Seeder error, lanjut ke Apache..."

php artisan storage:link

php artisan config:clear
php artisan cache:clear

# Start apache
exec apache2-foreground
