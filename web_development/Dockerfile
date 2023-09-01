# Use the official PHP image with Apache
FROM php:7.4-apache

# Install PHP extensions and system packages as needed
RUN apt-get update && \
    apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install mysqli extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy all project files into the container
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80
