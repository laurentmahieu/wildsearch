<!DOCTYPE html>
<html lang="en" data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Laurent - Alice - Philippe - Valentin - Adrien - Clémence">
    <meta name="description" content="Dev language is like chinese for you? Don't worry ! Here, we will explain you every word of this language">
    <script src="https://kit.fontawesome.com/f88f5b7639.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/aside.css">
    <link rel="stylesheet" href="../CSS/definition.css">
    <link rel="stylesheet" href="../CSS/search_bar.css">
    <link rel="stylesheet" href="../CSS/mobile.css">
    <link rel="icon" href="../IMG/logo_wildsearch.png">    
    <title>Wild Search</title>
</head>
<?php
require_once '../PHP/connec.php';

try {
    $pdo = new \PDO(DSN, USER, PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
//prepare

$sql= "SELECT * FROM definitions where word = 'CSS';";
$query = $pdo->query($sql);
$row = $query->fetch();

?>
<?php
include('header.php');
?>
<?php
include('aside.php');
?>

    <main>

       
        <article>
            <h3>CSS</h3>

                <?php

                    if($row) {
                        echo '<p>' . $row['definition'] . '</p>';
                    }
                ?>

            <p class="sources">Sources: <a href="http://glossaire.infowebmaster.fr/css/">glossaire.infowebmaster</a></p>
            <p class="sources">Tags:<a href="">css</a><a href="">html</a></p>

        </article>
    </main>
    <?php
    include('footer.php');
    ?>