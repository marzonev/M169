FROM php:8.2-apache

# PostgreSQL-Unterstützung installieren
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Rewrite-Modul aktivieren (falls du z. B. .htaccess brauchst)
RUN a2enmod rewrite

# Arbeitsverzeichnis festlegen
WORKDIR /var/www/html

# Dateien in den Webroot kopieren
COPY . /var/www/html/
