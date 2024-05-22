FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git

# Установка расширений PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копирование исходного кода
WORKDIR /var/www

# Копирование текущего приложения
COPY . .

# Установка зависимостей
RUN composer install

# Настройка прав доступа
RUN chown -R www-data:www-data /var/www

EXPOSE 9000

CMD ["php-fpm"]
