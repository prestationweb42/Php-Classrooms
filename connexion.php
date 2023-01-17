<?php

/**
 * Connexion à la BDD
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=recipes;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo '<p>Connexion établie</p>';
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $db->prepare($sqlQuery);
$recipesStatement->execute();
$recettes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recettes as $recette) {

?>
    <p><?php echo $recette['email']; ?></p>
<?php
}
?>