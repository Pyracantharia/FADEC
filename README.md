# FADEC
#### Framework de l'Artisanats du Bâtiment et des Entreprises de Construction
FADEC est une collecttion d'outils qui aide les artisants du batîment à créer leur propre site vitrine avec plusieurs services.

## Description du Projet
Ce projet vise à améliorer la gestion des prestations des artisans. Il s'appuie sur les principaux piliers suivants :

Devis : Simplification des calculs de devis grâce à nos outils dédiés.
Stock : Suivi et gestion efficace des stocks de matériaux ou de produits.
Client : Gestion des informations client pour un meilleur service.
Facture : Génération de factures et suivi des paiements.
Avis : Collecte des avis des clients pour l'amélioration continue.

## Fonctionnalités
Calcul de devis simplifié grâce à nos outils de calcul.
Simulation de devis pour une estimation précise des coûts.
Suivi du stock en temps réel.
Gestion du profil de l'artisan.
Respect des normes et conformité.
Évolution du projet pour l'adapter aux besoins changeants.
Collaboration et communication efficaces au sein de l'équipe.
Prise de rendez-vous simplifiée.

## Utilisation
Installation : Expliquez comment installer le projet sur une machine locale ou un serveur.

Configuration : Indiquez comment configurer les paramètres de base.

Exécution : Montrez comment exécuter l'application ou le service.


## Liste des personnes ayant contribué au projet.
PERROUAS THIBAULT

Christopher MBARAPA-SOKAMBI

Adam Garchi

## Licence
Pour l'instant pas de licence

## Commandes Docker

### Mettre en place la base de données
<code> docker run --name fadec-postgres -e POSTGRES_USER=fadec_user -e POSTGRES_PASSWORD=fadec_mdp -p 5432:5432 -d postgres</code>

### Mettre en place l'application avec le serveur apache
<code>docker compose build</code>

<code>docker compose up</code>

<code>docker exec -it ID_CONTAINER bash </code>