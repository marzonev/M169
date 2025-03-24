# Notizen-App mit Markdown-Vorschau

## Projekttitel
Notizen-App mit Markdown-Editor

## Projektbeschreibung
In diesem Projekt entwickeln wir eine containerisierte Web-Applikation zum Erstellen, Bearbeiten und Anzeigen von Notizen. Die Notizen unterstützen das Markdown-Format, wodurch Nutzer Inhalte strukturiert darstellen können. 

Die Applikation besteht aus einem Frontend-Service mit einer benutzerfreundlichen Editor-Oberfläche und einem Backend-Service, der die Notizen speichert und über eine REST-API zur Verfügung stellt. Optional können Notizen als Datei exportiert oder in einer Datenbank gespeichert werden.

## Ziele (SMART)

1. **Spezifisch:** Eine funktionierende Web-Applikation entwickeln, die Markdown-Notizen erstellt, bearbeitet und löscht. 
   **Messbar:** Mindestens 5 Notizen müssen korrekt erstellt, gespeichert und dargestellt werden können.
   **Erreichbar:** Durch Einsatz von React für das Frontend und Express für das Backend
   **Relevant:** Ermöglicht strukturierte Dokumentation und Notizerfassung in Markdown
   **Zeitlich:** Umsetzung innerhalb von 2 Wochen

2. **Spezifisch:** Die gesamte Anwendung soll mit Docker containerisiert sein.
   **Messbar:** Docker Compose startet Frontend, Backend und Datenbank
   **Erreichbar:** Mit Basis-Docker-Knowhow
   **Relevant:** Erfüllt IaC-Anforderung von M169
   **Zeitlich:** Containerisierung innerhalb von 2 Tagen umsetzen

3. **Spezifisch:** GitLab-Repository strukturiert dokumentieren
   **Messbar:** Mindestens 10 Commits mit aussagekräftigen Messages und README mit Setup-Anleitung
   **Erreichbar:** Durch kontinuierliches Arbeiten mit Git
   **Relevant:** Nachvollziehbare Entwicklung ist Teil der Bewertung
   **Zeitlich:** Während der gesamten Projektdauer fortlaufend

## Services (Container)
- **notizen-frontend**: React/Vue App mit Markdown-Editor und Live-Vorschau
- **notizen-backend**: Express.js oder Flask API mit Endpunkten für Notizen
- **notizen-db** (optional): MongoDB oder SQLite als Datenbankcontainer

## Technologie-Stack
- React.js oder Vue.js
- Express.js oder Flask
- Docker / Docker Compose
- Markdown-Parser (z. B. marked.js, react-markdown)
- GitLab für Versionierung

## Extras / Erweiterungen
- Export als PDF
- Dark Mode
- Authentifizierung (JWT oder Basic Auth)
- Kategorien oder Tags für Notizen

## Speicherort
- GitLab Repository: `M169-Services/<Projektname>`
- Dokumentation in Markdown im Repo abgelegt

## Abgabe
- Projekt als Zip (via Teams)
- Video-Demo (3–5 Minuten) mit Slides und Live-Vorstellung

