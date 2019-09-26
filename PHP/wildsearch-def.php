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
include('header.php');
?>
<?php
include('aside.php');
?>
    <main>

       
        <article>
            <h3>CSS</h3>
            <p>Stands for "Cascading Style Sheet." Cascading style sheets are used to format the layout of Web pages.
                They can be used to define text styles, table sizes, and other aspects of Web pages that previously
                could only be defined in a page's HTML.

                CSS helps Web developers create a uniform look across several pages of a Web site. Instead of defining
                the style of each table and each block of text within a page's HTML, commonly used styles need to be
                defined only once in a CSS document.<br> Once the style is defined in cascading style sheet, it can be
                used by any page that references the CSS file. Plus, CSS makes it easy to change styles across several
                pages at once. For example, a Web developer may want to increase the default text size from 10pt to 12pt
                for fifty pages of a Web site.<br> the pages all reference the same style sheet, the text size only
                needs to be changed on the style sheet and all the pages will show the larger text.

                While CSS is great for creating text styles, it is helpful for formatting other aspects of Web page
                layout as well. For example, CSS can be used to define the cell padding of table cells, the style,
                thickness, and color of a table's border, and the padding around images or other objects. CSS gives Web
                developers more exact control over how Web pages will look than HTML does. This is why most Web pages
                today incorporate cascading style sheets.
            </p>
            <p class="sources">Sources: <a href="http://glossaire.infowebmaster.fr/css/">glossaire.infowebmaster</a></p>
            <p class="sources">Tags:<a href="">css</a><a href="">html</a></p>

        </article>
    </main>
    <?php
    include('footer.php');
    ?>