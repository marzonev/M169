# KN 04

## A) Docker Image aufsetzen, in Registry ablegen und deployen - OCI: BASIC WORKFLOW

### 1. Teil-Challenge

#### Beweis, dass KEIN OCI-Image auf der AWS-Instanz liegt

![no-oci-image](../images/no-oci-image.png)

#### Personifiziertes Container-Image Ihrer AWS-VM starten (OCI-Image muss vom Gitlab-Repo ge"downloaded" werden)

![Pull-image](../images/Pull-image.png)

#### Via Webbrowser vom eigenen Laptop darauf zugreifen

![web-app-8091](../images/web-app-8091.png)

#### Container stoppen und dann Image löschen (Funktioniert das? Begründung)

Das funktioniert aber nur wegen dem Parameter -f, dieser forced das löschen. Eigentlich würde das löschen blockiert werden, da ein Container dieses Image noch verwendet.

![delete-image](../images/delete-image.png)


