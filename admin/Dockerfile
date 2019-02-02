FROM php:7.3-fpm-alpine

RUN apk add --update \
    make \
    composer \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

CMD ["php-fpm"]

WORKDIR /app

EXPOSE 9000