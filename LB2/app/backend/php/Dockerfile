FROM php:8.2-fpm

# PostgreSQL-Unterstützung installieren
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# App-Verzeichnis vorbereiten
RUN mkdir -p /var/www/html/app

# Alle lokalen Dateien ins App-Verzeichnis kopieren
COPY . /var/www/html/app

# Arbeitsverzeichnis auf App setzen
WORKDIR /var/www/html/app
