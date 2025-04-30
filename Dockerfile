# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite for Laravel
RUN a2enmod rewrite

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libpng-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app to container
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set file permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# ✅ Point Apache to the public directory (required for Laravel)
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# ✅ Allow .htaccess rules (Laravel needs this for routing)
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]

