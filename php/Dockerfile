FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
    && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip

# composer (https://getcomposer.org/download/)

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir="/usr/local/bin" \
    && php -r "unlink('composer-setup.php');" \
    && mv '/usr/local/bin/composer.phar' '/usr/local/bin/composer'

# 環境変数設定
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV PATH "$PATH:/root/.composer/vendor/bin"

RUN composer global require "laravel/installer=~2.1"