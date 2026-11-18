Activité 1:
3) Le serveur peut reconnaître le même utilisateur grâceà des mécanismes comme les sessions et les cookies
4) Non,PHP ne conserve pas automatiquement les informations entre deux requêtes HTTP
Activité 3:
1) la variable a été crée dans session.php
2) Elle a été récupérée dans profil.php
3) session_start() est nécessaire pour accéder aux données de la session 
4) $_SESSION est une variable superglobale de php
5) la session peut continuer à fonctionner aprés la ferleture du navigateur selon sa configuration et se durée de vie
Activité 5:
1) la vérification permet de savoir si l'informationexiste avant l'utiliser
2) si l'utilisateuraccède directement à la page sansla session nécessaire, l'accès est refusé
3) cette vérification permet de réerver certaines pages aux utilisateurs autorisés
Activité 6:
Aprés la déconnexion , la page profil.php ne peut plus retrouver les anciennes informations de session si aucune nouvelle session ne le recrée
Activité 7:
1) Le cookie est stoké dans le navigateur de l'utilisateur.
2) 3600 représente une durée de 3600 secondes,soit une heure
3) une session stocke principalement ses données coté serveur , tandis qu'un cookie est stocké coté navigateur
4) lorsque le cookie expire , le navigateur ne l'envoie plus
Activité 10:
1) Stockage principal : session côté serveur ; cookie côté navigateur.

Durée de vie : session selon la configuration et l'activité ; cookie selon sa date d'expiration.

Mémoriser un utilisateur : les deux peuvent contribuer à cette fonction, mais une session est préférable pour les données sensibles.

Envoyé avec les requêtes HTTP : le cookie est envoyé automatiquement selon ses attributs ; les données de session ne sont pas envoyées directement, seul l'identifiant de session l'est généralement via un cookie.

Accessible côté navigateur : le cookie oui ; les données de session non directement.
1) Parce que les informations de l'utilisateur sont stockées côté serveur et ne sont pas directement accessibles dans le navigateur.
2. Parce que les cookies sont stockés dans le navigateur et peuvent être consultés ou modifiés par l'utilisateur.

3. Non. Un cookie peut être volé ou modifié s'il n'est pas correctement protégé.

Activté 12:
Activité 12 – Vérifier les identifiants
1. Le message « Identifiants incorrects » s'affiche.

2. Le message « Identifiants incorrects » s'affiche également.

3. 
Parce que les identifiants sont écrits directement dans le code et que le mot de passe est stocké en clair. Cette méthode n'est pas suffisamment sécurisée.

Activité 16:

A
1. 
Non, le résultat est une chaîne de caractères appelée hash.
2. 
Parce que password_hash() transforme le mot de passe en une empreinte sécurisée.
3. 
Non. Le hash est conçu pour être une transformation à sens unique.
4. 
Parce qu'en cas de piratage ou de fuite de données, les mots de passe des utilisateurs seraient directement visibles.

Acivité 20:

Elles permettent d'éviter de répéter le même code dans plusieurs pages, de faciliter la maintenance et de protéger les pages plus facilement.

Activité 21:
Pour convertir les caractères spéciaux HTML en entités HTML et empêcher l'exécution de code HTML ou JavaScript malveillant. Cela permet de protéger l'application contre les attaques XSS.v



Activité 23 –
1. Qu'est-ce qu'une session ?

Une session est un mécanisme qui permet de conserver des informations concernant un utilisateur entre plusieurs requêtes HTTP. Les données sont stockées côté serveur.

2. Pourquoi session_start() est-il nécessaire ?

Il permet de démarrer ou de reprendre une session existante.

3. Quel est le rôle de $_SESSION ?

Elle permet de stocker et de récupérer les informations d'une session.

4. Qu'est-ce qu'un cookie ?

Un cookie est une petite information stockée dans le navigateur de l'utilisateur.

5. Quelle différence existe entre cookie et session ?

La session stocke les données côté serveur, tandis que le cookie stocke les données côté navigateur.

6. Quel est le rôle de $_COOKIE ?

Elle permet de récupérer et de lire les cookies envoyés par le navigateur.

7. Pourquoi utilise-t-on session_destroy() ?

Pour détruire la session et supprimer les données de session côté serveur.

8. Pourquoi ne faut-il pas stocker les mots de passe en clair ?

Pour protéger les mots de passe des utilisateurs en cas de fuite ou de piratage.

9. Quel est le rôle de password_hash() ?

Elle permet de transformer un mot de passe en une empreinte sécurisée (hash).

10. Quel est le rôle de password_verify() ?

Elle permet de vérifier si un mot de passe correspond à un hash enregistré.

11. Pourquoi une page d'administration doit-elle être protégée ?

Pour empêcher les utilisateurs non connectés d'accéder aux informations et aux fonctionnalités réservées aux administrateurs.

12. Pourquoi créer une fonction protegerPage() ?

Pour vérifier automatiquement si l'utilisateur est connecté et le rediriger vers la page de connexion si nécessaire.

13. Pourquoi utiliser htmlspecialchars() lors de l'affichage de données utilisateur ?

Pour empêcher l'interprétation de caractères HTML ou de scripts malveillants et protéger l'application contre les attaques XSS.