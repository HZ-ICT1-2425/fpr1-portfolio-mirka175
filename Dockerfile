# Stage 1: Composer dependencies
FROM composer:latest AS composer-deps
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --optimize-autoloader

# Stage 2: Node build (if needed)
# Node build stage
FROM node:20-alpine AS node-build
WORKDIR /app

# First copy package files
COPY package*.json ./

# Install dependencies with legacy peer deps
RUN npm install --legacy-peer-deps

# Copy remaining files and build
COPY . .
RUN npm run build

# Final stage
FROM php:8.2-apache-bullseye
WORKDIR /var/www/html

# Copy application files
COPY . .

# Copy from previous stages
COPY --from=composer-deps /app/vendor ./vendor
COPY --from=node-build /app/public/build ./public/build

# Set permissions and optimize
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Heroku port configuration
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/*.conf && \
    docker-php-entrypoint apache2-foreground
