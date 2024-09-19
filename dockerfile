FROM php:8.3-apache

# Install OpenSSL
RUN apt-get update && \
    apt-get install -y libssl1.1 libssl-dev && \
    docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy your app into the container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html
