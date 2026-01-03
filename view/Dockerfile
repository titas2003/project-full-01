FROM php:8.2-apache

# Enable Apache rewrite (optional but common)
RUN a2enmod rewrite

# Copy PHP files into Apache web root
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose Apache port
EXPOSE 80
