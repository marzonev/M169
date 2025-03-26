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


## B) Docker Compose - Container Orchestrierung mit mehreren Services - CONTAINER MANAGEMENT: ENTRY-LEVEL

### 2. Teil-Challenge

#### Beweis, dass die gesamte Umgebung gelöscht ist

![deleted](../images/deleted.png)

#### Starten Sie ihren angepassten Dienst mit $ docker compose up

![docker-compose-up](../images/docker-compose-up.png)

#### Via Webbrowser vom eigenen Laptop darauf zugreifen

![webapp-works](../images/webapp-works.png)

#### Zeigen Sie, in welchem Verzeichnis auf der Instanz die Volume-Daten abgelegt werden und welche internen IP-Adressen inkl. CIDR die beiden Container erhalten haben

Das Volume ist unter "/var/lib/docker/volumes/02_compose_mar-vol/_data" gemounted

![Volume-mounted](../images/Volume-mounted.png)

Der Webserver hat die IP: 172.18.0.2/16

Die Datenbank hat die IP 172.18.0.3/16

![IPS-container](../images/IPS-container.png)

#### Löschen Sie den gesamten Dienst wieder

![deleted-again](../images/deleted-again.png)

#### Published Port: 5169, Target Port: 8169

![publishedtarget-port](../images/publishedtarget-port.png)