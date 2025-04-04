FROM postgres:16

# Setze Umgebungsvariablen für die DB beim Build (kann überschrieben werden)
ENV POSTGRES_DB=tododb
ENV POSTGRES_USER=m169
ENV POSTGRES_PASSWORD=geheim

# Kopiere dein init.sql ins Standard-Init-Verzeichnis von Postgres
COPY ./init.sql /docker-entrypoint-initdb.d/

