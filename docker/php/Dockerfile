FROM php:7.4-apache

RUN apt-get update \
    && apt-get install -y \
    libzip-dev \
    curl \
    unzip \
    zip \
    git \
    zlib1g-dev \
    locales \
    httrack \
    vim \
    cron \
    curl \
    wget \
    libxslt1-dev


RUN mkdir /usr/local/bin -p

RUN PATH=$PATH:/var/www/html/vendor/bin:bin

RUN a2enmod rewrite

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mv composer /usr/local/bin/composer


ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/