# 📝 M169 Notizen-Web-App

Dies ist die Dokumentation zur containerisierten **Markdown-Notizen-App**, entwickelt im Rahmen des Moduls **M169**.

Ziel ist es, eine moderne Web-App mit einem React-Frontend, einem API-Backend (Node.js oder Flask) und einer PostgreSQL-Datenbank bereitzustellen – alles sauber orchestriert mit **Docker Compose** und **GitLab CI/CD**.

---

## 🚧 Tech-Stack

| Komponente | Technologie |
|------------|-------------|
| Frontend   | React + Markdown-Editor |
| Backend    | Node.js (alternativ Flask) |
| Datenbank  | PostgreSQL |
| Orchestrierung | Docker Compose |
| CI/CD      | GitLab Pipelines + Container Registry |

---

## ⚙️ Features

-  Markdown-Editor mit Vorschau
-  REST-API für Notizverwaltung
-  Containerisiert: Frontend, Backend & DB
-  Persistente Daten mit `volumes`
-  Eigene OCI-Images via GitLab Registry
-  Deklaratives Deployment (Compose)

---

## 📚 Inhaltsverzeichnis

## Tabellenstruktur

### Tabelle: users

| Spalte       | Typ           | Eigenschaften                          |
|--------------|----------------|----------------------------------------|
| id           | SERIAL         | Primärschlüssel, automatisch steigend  |
| username     | VARCHAR(50)    | Eindeutig, nicht NULL                  |
| email        | VARCHAR(100)   | Eindeutig, nicht NULL                  |
| password     | TEXT           | Nicht NULL (gehashter Wert)            |
| created_at   | TIMESTAMP      | Standardwert: CURRENT_TIMESTAMP        |

---

### Tabelle: tickets

| Spalte        | Typ            | Eigenschaften                                       |
|---------------|----------------|-----------------------------------------------------|
| id            | SERIAL         | Primärschlüssel, automatisch steigend               |
| user_id       | INTEGER        | Fremdschlüssel auf users(id), ON DELETE CASCADE     |
| title         | VARCHAR(100)   | Nicht NULL                                          |
| description   | TEXT           | Optional                                            |
| status        | VARCHAR(20)    | Default: 'open', z. B. open / in_progress / done    |
| created_at    | TIMESTAMP      | Standardwert: CURRENT_TIMESTAMP                     |
| due_date      | DATE           | Optional                                            |

---

### Beziehung

- Ein `user` kann mehrere `tickets` haben (1:n)
- Jedes `ticket` gehört genau zu einem `user`