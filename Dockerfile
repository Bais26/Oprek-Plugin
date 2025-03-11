# Gunakan image PHP dengan FPM sebagai dasar
FROM php:8.1-fpm

# Install dependencies dan ekstensi PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql

# Set working directory di dalam container
WORKDIR /var/www

# Copy aplikasi ke dalam container
COPY . /var/www

# Install Composer untuk mengelola dependensi PHP
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Install dependensi PHP yang diperlukan dari composer.json
RUN composer install --no-dev --optimize-autoloader

# Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# Menjalankan PHP-FPM ketika container berjalan
CMD ["php-fpm"]
