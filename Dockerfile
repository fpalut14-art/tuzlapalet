FROM php:8.2-apache

# Copy repository contents to Apache document root
COPY . /var/www/html/

# Ensure correct permissions and enable rewrite (if needed)
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

EXPOSE 80
CMD ["apache2-foreground"]
