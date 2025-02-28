# KN02

## A) Cloud Computing

### 1. Aufgabe

Hosting von virtuellen Maschinen = PaaS

Nutzung von Google Docs für die Textbearbeitung = SaaS

Containerverwaltung mit Kubernetes = IaaS

### 2. Aufgabe

Der Unterschied ist, das bei IaaS nur die Hardware und die Virtualisierung gemanaged wird. Das heist OS, Middleware, Datenbanken, und Applikation

Bei PaaS werden die oben gennanten Punkte alle vom Cloud anbieter gemanaged ausser die Applikation.

## B) Infrastructure as Code

### 1. Aufgabe

#### Warum ist es besser, IT-Systeme automatisch zu konfigurieren statt manuell?

Da es um einiges schneller geht, wenn man sich um die Installation und einrichtung kümmern muss. Dazu kann man mehrere Installationen parallel ausführen.

#### Was bedeutet Infrastructure as Code (IaC)?

Bei Infrastructure as Code werden Server, Datenbanken usw. mit Scripts aufgesetzt und konfiguriert. Es muss also nicht mehr manuell aufgesetzt werden sondern wird automatisiert aufgesetzt und konfiguriert.

Systeme können auch einfach wiederhergestellt, da die Konfiguration schon im Code festgehalten ist.

### 2. Aufgabe

#### Befassen Sie sich mit zwei Tools, die bei IaC verwendet werden (z.B. Docker, Terraform) und erklären sie kurz, was diese tun

Terraform: Terraform ist ein IaC Tool welches mit On-prem und Cloud Lösungen funktioniert. Mit Terraform kann man VMs (Instanzen...), Datenbanken, Netzwerke usw. verwalten.

Docker: Ist auch ein IaC Tool. Der Unterschied zu Terraform ist aber, dass Docker nicht die Infrastruktur verwalter, sonder für die Verwaltung von Containern zuständig ist. 

#### Recherchieren Sie die Begriffe Kubernetes und Container-Orchestrierung. Fassen Sie in Stichworten zusammen, was damit gemeint ist und was Sie darunter verstehen

Kubernetes ist eine Open-Source-Plattform zur "Container-Orchestrierung".

##### Container-Orchestrierung

- Container bereitzustellen und starten
- Lastverteilung uns Skalierung
- Automatische Updates und Rollbacks

## C) Globale Cloud-Plattformen

### 1. Aufgabe

| Cloud Service | Regionen | Verfügbarkeitszonen |
| :------------ | :------- | :------------------ |
| AWS           | 36       | 114                 |
| GCP           | 60       | 3 Pro Region        |
| Azure         | 40       | 12                  |

### 2. Aufgabe

| **Merkmal**                       | **Amazon EC2**                              | **Azure Virtual Machines**             | **Google Compute Engine**           |
| --------------------------------- | ------------------------------------------- | -------------------------------------- | ----------------------------------- |
| **Typ**                           | Virtuelle Maschinen (VMs)                   | Virtuelle Maschinen (VMs)              | Virtuelle Maschinen (VMs)           |
| **VM-Optionen**                   | Breite Auswahl, inkl. Graviton & Bare Metal | Windows-optimiert, Linux-Unterstützung | Flexible VMs, Preemptible Instances |
| **Automatische Skalierung**       | Auto Scaling Groups                         | Scale Sets                             | Managed Instance Groups             |
| **Spot-Instanzen (günstige VMs)** | Spot Instances                              | Azure Spot VMs                         | Preemptible VMs                     |
| **Container-Unterstützung**       | ECS, EKS (Kubernetes)                       | AKS (Azure Kubernetes Service)         | GKE (Google Kubernetes Engine)      |
| **Preismodelle**                  | On-Demand, Reserved, Spot                   | Pay-as-you-go, Reserved, Spot          | On-Demand, Committed, Preemptible   |
