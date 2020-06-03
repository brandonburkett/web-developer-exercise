FROM php:7.3-fpm

# php extensions: zip, pdo, pdo_mysql, gd
RUN apt-get update \
    && apt-get install -y --no-install-recommends git zip zlib1g-dev libzip-dev libpng-dev libfreetype6-dev libjpeg62-turbo-dev unzip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/  --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install zip pdo pdo_mysql bcmath gd exif

# phpredis
ENV PHPREDIS_VERSION 5.1.1
RUN mkdir -p /usr/src/php/ext/redis \
    && curl -L https://github.com/phpredis/phpredis/archive/$PHPREDIS_VERSION.tar.gz | tar xvz -C /usr/src/php/ext/redis --strip 1 \
    && echo 'redis' >> /usr/src/php-available-exts \
    && docker-php-ext-install redis

# install composer
RUN cd /tmp && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/bin --filename=composer && \
    php -r "unlink('composer-setup.php');" && \
    rm -rf /tmp/*

EXPOSE 9000
CMD ["php-fpm"]
