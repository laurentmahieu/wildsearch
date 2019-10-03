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
require_once '../PHP/connec.php';

try {
    $pdo = new \PDO(DSN, USER, PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
//prepare

$sql2= "SELECT * FROM definitions;";
$q2 = $pdo->query($sql2);
$r2 = $q2->fetchAll();

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
        foreach ($alphabetLeft as $letters=>$word) {

                echo '<div class="letter">';
                echo '<h3 id="' . $letters . '">' . $letters . '</h3>';

                foreach ($r2 as $myWord){
                    echo '<ul>';

                    if ($letters == substr($myWord['word'],0,1)) {

                            echo '<li>';
                            echo '<a href="../PHP/wildsearch-def.php">' . $myWord['word'] . '</a>';
                            echo '<p>' . $myWord['smallDef'] . '</p>';

                    }
                    echo '</ul>';
                }


        }
        ?>


        </article>

        <article id="lettersRight">
            <?php
            foreach ($alphabetRight as $letters=>$word) {

                echo '<div class="letter">';
                echo '<h3 id="' . $letters . '">' . $letters . '</h3>';

                foreach ($r2 as $myWord){
                    echo '<ul>';

                    if ($letters == substr($myWord['word'],0,1)) {

                        echo '<li>';
                        echo '<a href="../PHP/wildsearch-def.php">' . $myWord['word'] . '</a>';
                        echo '<p>' . $myWord['smallDef'] . '</p>';

                    }
                    echo '</ul>';
                }


            }
            ?>
        </article>
    </main>

     <?php
        include('footer.php')
        ?>
