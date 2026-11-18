ACTIVITÉ 1:
1. L’attribut name donne un nom à la donnée envoyée au serveur. PHP utilise ce nom pour retrouver la valeur.
2. Chaque champ possède un name différent pour distinguer les informations.
3. Au clic sur Envoyer, le navigateur envoie les valeurs des champs à la page indiquée par action. Sans action,
le formulaire est envoyé à la page courante.
4. Sans méthode précisée, la méthode utilisée par défaut est GET ; les valeurs apparaissent alors dans l’URL.

ACTIVITÉ 2:
1. Après validation, l’URL contient une chaîne de requête, par exemple ?nom=Ali&prenom;=Amira.
2. Les données apparaissent après le point d’interrogation dans l’URL, sous forme de paires nom=valeur.
3. GET place les données dans l’URL pour permettre notamment les recherches et le partage d’un lien.
4. Si la page est ouverte directement, les clés GET n’existent pas encore ; leur lecture directe peut produire un
avertissement.
ACTIVITÉ 12:
GET est adapté car une recherche ne modifie pas les données et ses paramètres peuvent rester visibles dans
l’URL ou être partagés.

ACTIVITÉ 14 :
1. GET place les paramètres dans l’URL ; POST les place dans le corps de la requête.
2. GET s’utilise pour rechercher, filtrer ou consulter une ressource.
3. POST s’utilise pour envoyer des données qui créent ou modifient une information.
4. isset vérifie l’existence d’une variable/clé ; empty permet de détecter une valeur vide.
5. La validation vérifie que les données respectent les règles attendues avant le traitement.
6. Les données du navigateur peuvent être modifiées ; le serveur doit donc toujours les contrôler.
7. htmlspecialchars sécurise l’affichage HTML des valeurs reçues.
8. La validation contrôle la conformité des données ; l’affichage sécurisé empêche leur interprétation comme du
code HTML.
9. fonctions.php centralise les fonctions communes et facilite la maintenance

