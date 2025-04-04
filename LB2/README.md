# Projektdokumentation – Notizen-App mit Markdown-Editor

## 📌 Projekttitel
Notizen-App mit Markdown-Editor

## 👥 Team
- Nevio
- Gabriel

## 📝 Projektbeschreibung
Unsere Applikation ist eine containerisierte Webanwendung zur Erstellung, Bearbeitung und Verwaltung von Notizen im Markdown-Format. Der Fokus liegt auf Benutzerfreundlichkeit, Markdown-Kompatibilität und einem klar strukturierten technischen Aufbau. Die App besteht aus einem React-Frontend mit Live-Preview sowie einem Backend zur persistenten Speicherung der Notizen in einer Datenbank.

## 🎯 Projektziele (SMART)
1. Ich entwickle eine containerisierte Web-Applikation (Frontend & Backend) zur Erstellung und Speicherung von Markdown-Notizen bis spätestens [Abgabedatum].
2. Der integrierte Editor unterstützt mindestens 5 Markdown-Funktionen, darunter fette/kursive Formatierung, Listen, Überschriften und Codeblöcke.
3. Die Anwendung wird mittels Docker Compose bereitgestellt, dokumentiert und ist jederzeit reproduzierbar über ein Gitlab-Repository mit nachvollziehbarer Commit-History.

## 🛠️ Technologiestack
- **Frontend**: React, SimpleMDE oder React-Markdown
- **Backend**: Node.js mit Express *(oder Python Flask)*
- **Datenbank**: SQLite oder PostgreSQL
- **Containerisierung**: Docker, Docker Compose
- **Repository**: GitLab

## ⚙️ Aufbau & Architektur
```
notizen-app/
├── frontend/         # React App mit Markdown-Editor
├── backend/          # REST API zur Notiz-Verwaltung
├── docker-compose.yml
└── README.md         # Projektdokumentation
```

## 🔄 Ablauf / Vorgehen
1. Projektinitialisierung & Struktur im GitLab-Repo aufbauen
2. Frontend entwickeln mit Markdown-Editor + Preview
3. REST API und Datenbankspeicherung im Backend
4. Dockerisierung von Frontend und Backend
5. Setup von Docker Compose und Tests
6. Dokumentation, Demos und Präsentation vorbereiten

## 🔐 Sicherheit
- Keine offenen Ports außer HTTP/HTTPS
- Keine vertraulichen Daten im Repo (Umgang mit `.env`)
- Dockerfiles mit Minimal-Images (z. B. `alpine`)

## 🧪 Tests
- Manuelle Tests der Markdown-Features
- API-Tests mit Postman
- Container-Tests via Compose-Setup

## 📸 Screenshots
*Hier Screenshots der App einfügen: Editor, Vorschau, DB-Test etc.*

## 📽️ Präsentation
Ein 3–5-minütiges Video mit:
- Kurzvorstellung des Projekts
- Live-Demo der App
- Verweis auf GitLab-Repo und Doku

## 🔗 GitLab-Repository
[Link zum Repository einfügen]

## 📦 Abgabeobjekte
- GitLab Repo mit Code und Markdown-Doku
- ZIP-File des Projekts
- Präsentationsvideo (MP4)

---
*Stand: [Datum einfügen]*

