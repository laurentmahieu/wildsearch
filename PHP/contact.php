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
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/search_bar.css">
    <link rel="stylesheet" href="../CSS/mobile.css">
    <link rel="icon" href="../IMG/logo_wildsearch.png">
    <title>Wild Search</title>
</head>

<?php 
include('header.php');
?>
<?php 
include('aside.php');
?>    
   
    <main>
        <!-- Contact part -->
        <h3 id="titlecontact">Contact</h3>
        <form autocomplete="on" action="" method="POST">
            <input type="email" name="e-mail" placeholder="Your E-mail @ddress" required/>
            <input type="text" name="name" placeholder="Your Name" required/>
            <select>
                <option value="questions">Any question ?</option>
                <option value="comments">Any comments ? </option>
            </select>
            <textarea placeholder="<!-- Leave your message here ! -->" required></textarea>
            <input class="submit" type="submit" name="Send" value="- Send ! -"/> 
        </form>
    </main>
    <?php 
include('footer.php');
?>
