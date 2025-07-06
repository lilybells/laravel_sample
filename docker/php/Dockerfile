FROM php:8.2-fpm

# システムパッケージの更新と必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 作業ディレクトリの設定
WORKDIR /var/www

# ユーザーの作成（www-dataの代わりにlaravelユーザーを作成）
RUN useradd -G www-data,root -u 1000 -d /home/laravel laravel
RUN mkdir -p /home/laravel/.composer && \
    chown -R laravel:laravel /home/laravel

# 権限の設定
RUN chown -R laravel:laravel /var/www

# ユーザーをlaravelに変更
USER laravel

# ポート9000を公開
EXPOSE 9000

# PHP-FPMを起動
CMD ["php-fpm"] 