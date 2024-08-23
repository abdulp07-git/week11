# Use the official PHP image with Nginx and PHP-FPM
FROM php:8.0-fpm

# Install necessary packages
RUN apt-get update && apt-get install -y nginx

# Copy Nginx configuration file
COPY default.conf /etc/nginx/conf.d/default.conf

# Copy the application code to the container
COPY ../app /var/www/html

# Set permissions for the web root
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["sh", "-c", "nginx && php-fpm"]
