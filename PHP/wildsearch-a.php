<!DOCTYPE html>
<html lang="en" data-theme='light'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Laurent - Alice - Philippe - Valentin - Adrien - Clémence">
    <meta name="description"
        content="Dev language is like chinese to you? Don't worry ! Here, we will explain you every word of this language">
    <script src="https://kit.fontawesome.com/f88f5b7639.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/aside.css">
    <link rel="stylesheet" href="../CSS/stylecarousel.css">
    <link rel="stylesheet" href="../CSS/lettres.css">
    <link rel="stylesheet" href="../CSS/search_bar.css">
    <link rel="stylesheet" href="../CSS/mobile.css">
    <link rel="icon" href="../IMG/logo_wildsearch.png">
    <title>Wild Search</title>
</head>
<?php
require_once 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);
?>
<?php
include('header.php');
?>

<?php
include('aside.php');
?>
<?php
include('lettersTable.php');
?>
    <main>
    <article id="lettersLeft">

        <?php
        foreach ($alphabetLeft as $letters => $words) {
            echo '<div class="letter">';
            echo '<h3 id="' . $letters . '">' . $letters . '</h3>';
            echo '<ul>';
                foreach($words as $word){
                    echo '<li>';
                    echo '<a href="'.$word[1].'">'.$word[0].'</a>';
                    echo '<p>'.$word[2].'</p>';
                }
        }
        ?>


        </article>

        <article id="lettersRight">
            <?php
            foreach ($alphabetRight as $letters => $words) {
                echo '<div class="letter">';
                echo '<h3 id="' . $letters . '">' . $letters . '</h3>';
                echo '<ul>';
                foreach($words as $word){
                    echo '<li>';
                    echo '<a href="'.$word[1].'">'.$word[0].'</a>';
                    echo '<p>'.$word[2].'</p>';
                }
            }
            ?>
        </article>
    </main>

     <?php
        include('footer.php')
        ?>
