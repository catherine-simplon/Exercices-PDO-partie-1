<?php

$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8;port=3306', 'root', '');

/**
 * Exercice 1
 */
$request = "SELECT * FROM clients";
$response = $bdd->query($request);
$clients = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($clients);

echo "<hr>";

/**
 * Exercice 2
 */
$request = "SELECT type FROM showtypes";
$response = $bdd->query($request);
$showTypes = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($showTypes);
echo "<hr>";

/**
 * Exercice 3
 */
$request = "SELECT * FROM clients LIMIT 0, 20";
$response = $bdd->query($request);
$clientsTwenty = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($clientsTwenty);
echo "<hr>";


/**
 * Exercice 4
 */
$request = "SELECT * FROM clients WHERE card = 0";
$response = $bdd->query($request);
$clientsNoCard = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($clientsNoCard);
echo "<hr>";

/**
 * Exercice 5
 */
$request = 'SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC';
$response = $bdd->query($request);
$clientsConcat = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>

    <?php foreach ($clientsConcat as $client) : ?>
        <li>
            <strong>Prénom :</strong> <?= $client['firstName'] ?>
            <strong>Nom :</strong> <?= $client['lastName'] ?>
        </li>
    <?php endforeach; ?>

</ul>

<?php

echo "<hr>";


/**
 * Exercice 5
 */

$request = "SELECT performer, title, date, startTime FROM shows ORDER BY title";
$response = $bdd->query($request);
$shows = $response->fetchAll(PDO::FETCH_ASSOC);

?> <ul> <?php

        foreach ($shows as $show) : ?>
        <?= $show['title'] ?> par <?= $show['performer'] ?>, le <?= $show['date'] ?> à <?= $show['startTime'] ?>.<br>
    <?php endforeach;

?> </ul> <?php

echo "<hr>";

/**
 * Exercice 7
 */

$request = 'SELECT * FROM clients';
$response = $bdd->query($request);
$clientsConcat = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>

    <?php foreach ($clientsConcat as $client) :

        /** Version sans else (on définit un cas par défaut avant le if) */
        $hasCard = 'Non';

        if ($client['card']) {
            $hasCard = $client['cardNumber'];
        }

        /** Version avec else (on définit les cas dans if et dans else) */
        $hasCard = '';

        if ($client['card']) {
            $hasCard = $client['cardNumber'];
        } else {
            $hasCard = 'Non';
        }

        /**
         * Version ternaire
         */

        $hasCard = ($client['card']) ? $client['cardNumber'] : 'Non';


        ?>
        <li>
            <ul>
                <li>Nom : <?= $client['firstName'] ?></li>
                <li>Prénom : <?= $client['lastName'] ?></li>
                <li>Date de naissance : <?= $client['birthDate'] ?></li>
                <li>Carte de fidélité: <?= $hasCard ?></li>
            </ul>
        </li>
    <?php endforeach; ?>

</ul>
