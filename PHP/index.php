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
        <!-- carousel -->
        <div id="slideshow">
            <ul id="sContent">
                <li>
                    <div class="partone">
                        <div class="card_def">
                            <div class="logo_def">
                                <img src="../IMG/github32px.png" alt="logo_github">
                            </div>
                            <div class="first_view_def">
                                <h3>Definition of the Day</h3>
                                <h4>Git</h4>
                                <a>is a distributed version-control system for tracking changes in source code during
                                    software development. It is designed for coordinating work among programmers, but it
                                    can be used to track changes in any set of files. Its goals include speed, data
                                    integrity, and support for distributed, non-linear workflows...</a>
                                <button>Read the definition</button>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="partone">
                        <div class="card_def">
                            <div class="logo_def">
                                <img src="../IMG/Html5-64px.png" alt="logo_Html5">
                            </div>
                            <div class="first_view_def">
                                <h3>Definition of the Eve</h3>
                                <h4>HTML</h4>
                                <a>Hypertext Markup Language (HTML) is the standard markup language for documents
                                    designed to be displayed in a web browser. It can be assisted by technologies such
                                    as Cascading Style Sheets (CSS) and scripting languages such as JavaScript. Web
                                    browsers receive HTML documents from a web server or from....</a>
                                <button>Read the definition</button>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="partone">
                        <div class="card_def">
                            <div class="logo_def">
                                <img src="../IMG/devweb.jpg" alt="logo_dev_web">
                            </div>
                            <div class="first_view_def">
                                <h3>Definition of the Day Before</h3>
                                <h4>Web developer job</h4>
                                <a href="#">A web developer is a programmer who specializes in, or is specifically
                                    engaged in, the development of World Wide Web applications using a client–server
                                    model. The applications typically use HTML, CSS and JavaScript in the client, PHP,
                                    ASP.NET (C#) or Java in the server, and http for communications...</a>
                                <button>Read the definition</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end carousel-->
    </main>
    <?php
include('footer.php');
?>

</body>
</html>

