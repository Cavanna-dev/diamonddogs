FROM php:7.0-apache

RUN a2enmod rewrite headers \

    && apt-get update \
    && apt-get install -y --no-install-recommends \
        apt-utils \
        bash \
        ca-certificates \
        curl \
        git \
        libcurl3 \
        libcurl3-dev \
        libjpeg62-turbo-dev \
        libpng12-dev \
        mysql-client \
        zlib1g-dev \
        openssh-client \
    && docker-php-ext-install \
        curl \
        gd \
        mysqli \
        opcache \
        pdo_mysql \
        zip \

    && pecl channel-update pecl.php.net \
    && pecl install \
        apcu \
        xdebug \
    && docker-php-ext-enable \
        apcu \
        xdebug \

    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ADD ./bin/* /usr/local/bin/

ENTRYPOINT ["entrypoint.sh"]
CMD ["apache2-foreground"]
