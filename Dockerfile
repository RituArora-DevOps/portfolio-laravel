# Base PHP image
FROM php:8.2-cli-alpine

# Set working directory
WORKDIR /app

# Install dependencies
RUN apk update && apk add --no-cache \
    git curl zip unzip libzip-dev libpng-dev oniguruma-dev libxml2-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy app files
COPY . .
RUN chmod -R 775 storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install Node dependencies and build assets
RUN npm install && npm run build

# Cache config
# RUN php artisan config:cache

# Expose port
EXPOSE 8000

# Start Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

