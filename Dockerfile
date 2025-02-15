# Use official PHP image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install required extensions
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring xml bcmath zip

# Enable Apache Rewrite module
RUN a2enmod rewrite

# Copy project files
COPY . .

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# **Update Apache to use Laravel's public directory**
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Restart Apache
RUN service apache2 restart

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
