# PDO - Partie 1 : Lire des données

**Exécuter le script colyseum.sql avant de commencer. Tous les résultats devront être affichés dans une page index.php.**

> **Attention !** Si vous avez un doute sur les requêtes SQL à effectuer, saisissez-les directement dans PHPMyAdmin pour les tester, ça sera plus facile que de les tester directement dans le code PHP !

> **Rappel** :
> 1. Connexion à la base de données `$bdd = new PDO()...`
> 2. Rédaction de la requête dans `$request...`
> 3. Exécution de la request : `$response = $bdd->query()...`
> 4. Lecture des résultats de la requête : `$results = $response->fetchAll()...`
> 5. Affichage des résultats (`var_dump()`, `echo`, `print_r`, `foreach`... le plus adapté)

## Exercice 1

Afficher tous les clients.

## Exercice 2

Afficher tous les types de spectacles possibles.

## Exercice 3

Afficher les 20 premiers clients.

## Exercice 4

N'afficher que les clients possédant une carte de fidélité.

## Exercice 5

Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Les afficher comme ceci :

**Nom :** *Nom du client*

**Prénom :** *Prénom du client*

Trier les noms par ordre alphabétique.

## Exercice 6

Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.

## Exercice 7

Afficher tous les clients comme ceci :

**Nom :** *Nom de famille du client*

**Prénom :** *Prénom du client*

**Date de naissance :** *Date de naissance du client*

**Carte de fidélité :** *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*

**Numéro de carte :** *Numéro de la carte fidélité du client s'il en possède une.*

## Exercice 8

Créer un formulaire qui permet d'ajouter un client, le code pour enregistrer le client dans la base de données pourra se trouver dans un fichier `addClient.php`
