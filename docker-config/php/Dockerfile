From php:7.4-apache
MAINTAINER eirblaze@live.jp

# 共通設定
RUN apt -y update && \
#
# mailcatcher にメールを送る仕掛け
  apt install \
  msmtp msmtp-mta \
  -y && \
#
# XDebug
  pecl install xdebug && \
  docker-php-ext-enable xdebug && \
# 上記を実行することで/usr/local/etc/php/conf.d/docker-php-ext-xdebug.iniに
# zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20170718/xdebug.so
# が出力されます。(内容は個人によって異なる可能性があります)
#
# PDO - MySQL
  docker-php-ext-install pdo_mysql

WORKDIR /var/www
