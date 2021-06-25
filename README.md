Projet Cryptographie
Gestionnaire de mots de passes

Objectif
Créer un logiciel de gestion de mots de passe, ce logiciel doit permettre à des utilisateurs de stocker leurs mots de passe de façon sécurisée.

Déployer ce logiciel sur un serveur.
User Stories
En tant qu’utilisateur, je veux pouvoir stocker un mot de passe de façon sécurisée.

En tant qu’utilisateur, je veux pouvoir lister mes mots de passes.

En tant qu’utilisateur, je veux pouvoir récupérer un mot de passe.

En tant qu’utilisateur, je veux pouvoir supprimer un mot de passe.
Contraintes
L’ensemble des développements se fera sur Github. Le dépôt suivant devra être forké et votre travail réalisé dans ce fork: https://github.com/Aschen/epsi-password-manager

Les mots de passe doivent être stockés de manière sécurisée:
la compromission de la base de donnée ne doit pas entraîner la compromission des mots de passe
la compromission du serveur ne doit pas entraîner la compromission des mots de passe
la compromission du réseau (Man In The Middle) ne doit pas entraîner la compromission des mots de passe

Les utilisateurs doivent pouvoir:
Enregistrer un mot de passe avec des métadonnées (description, adresse du site, …)
Lister leurs mots de passe
Récupérer un mot de passe
Supprimer un mot de passe

Le logiciel (backend) devra être déployé de façon sécurisée sur un serveur.

Les bonnes pratique de sécurisation d’un serveur linux devront être respectées au maximum:
TLS
Droits des fichiers
Pare Feu
...
Travail attendu  
Le code source et l’ensemble des scripts devra être versionné et publié sur Github

A priori l’application sera composée à minima d’un client et d’un backend.

Le backend devra être déployé sur un serveur distant.
Alternative
Modélisation UML de la base de données

Modélisation du diagramme d’activités

Architecture du déploiement

Un document devra expliciter la démarche de
sécurisation des mots de passe
sécurisation du serveur 
Bonus
Gérer ses propres mots de passe c’est bien mais gérer les mots de passe d’une équipe c’est mieux!
Transformer le gestionnaire pour qu’il puisse gérer les mots de passe d’une équipe. (Exemple https://www.passbolt.com/)

Le déploiement doit se faire automatiquement au moyen d’une CI/CD.

Permettre de partager des fichiers: utilisation d’un crypto-système hybride.

Utilisation de Kuzzle.
Annexes
Quelques ressources pour vous aider
Kuzzle
https://docs.kuzzle.io/core/2/guides/getting-started/run-kuzzle/
https://docs.kuzzle.io/core/2/guides/getting-started/write-application/
https://docs.kuzzle.io/core/2/guides/main-concepts/data-storage/
https://docs.kuzzle.io/sdk/js/7/getting-started/node-js/
https://docs.kuzzle.io/sdk/js/7/controllers/document/create/
Javascript
https://www.npmjs.com/package/node-rsa

Ruby

https://ruby-doc.org/stdlib-2.6.1/libdoc/openssl/rdoc/OpenSSL/PKey/RSA.html
https://gist.github.com/gevans/6004752

PHP
https://www.php.net/manual/en/function.openssl-public-encrypt.php
https://www.php.net/manual/en/function.openssl-private-decrypt.php

Python
https://stuvel.eu/python-rsa-doc/usage.html#encryption-and-decryption

Java (for masochists)

https://niels.nu/blog/2016/java-rsa
https://www.ruby-lang.org/en/documentation/ruby-from-other-languages/to-ruby-from-java/


DevOps / SecOps
https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-20-04
https://www.ssllabs.com/ssltest/
https://www.logsign.com/blog/best-practices-for-security-in-ssh/
https://www.acunetix.com/blog/web-security-zone/hardening-nginx/
https://docs.kuzzle.io/core/2/guides/getting-started/deploy-your-application/


