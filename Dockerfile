# BUILD: docker build --no-cache --rm -t julienbreux/human:latest .
# SHIP:  docker push julienbreux/human:latest
# RUN:   docker run --rm julienbreux/human:latest
# Use PHP 7.x
FROM bureauxapartager/php:7.x

# Maintainer
MAINTAINER Julien Breux <julien.breux@gmail.com>

# Copy files
COPY . /www

# Install deps
RUN composer install

# Run example
CMD ["php", "examples/index.php"]
