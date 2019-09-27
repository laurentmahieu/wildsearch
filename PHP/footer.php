<nav>
        <a href="../PHP/wildsearch-theme.php"><img src="../IMG/bouton_theme_mobile.png" title="Themes" alt="Themes"/></a>
        <a href="../PHP/wildsearch-a.php"><img src="../IMG/1568807885231_bouton alphabet mobile.png" title="Alphabet" alt="Alphabet"/></a>
        <!-- à revoir en bas -->
       
        <a href="../PHP/index.php"  class="home"><img src="../IMG/logo mobile sans fond.png" title="Menu Burger" alt="Logo Menu Burger"/></a>
      

        <div class="button_container">
            <a href="#"><img src="../IMG/bouton_top_recherches_mobile.png" onclick="openModal()" title="Search" alt="Top search"/></a>   
        </div>

        <div id="modal">
            <h1>Top Search</h1>
            <p>Search n°1:</p>
            <p>Search n°2:</p>
            <p>Search n°3:</p>
            <p>Search n°4:</p>
            <p>Search n°5:</p>
            <button id="close" onclick="closeModal()">X</button>
        </div>
        
        <a href="#"><img src="../IMG/1568807886004_bouton contact mobile.png" title="Contact" alt="Contact"/></a>
    </nav>
    <!-- fin du nav mobile-->
    <section>
        <a id="upPage" href ="#">
            <i class="fas fa-chevron-circle-up fa-2x"></i>
        </a>
    </section>
    <footer>
        <div class="left">
            <a href="#">Legal notices</a>
            <a href="#">Wild Code School</a>
            <a href="../PHP/contact.php">Contact</a>
            <a href="#">Site plan</a>
        </div>
        <div class="right">
            <a href="#" title="Facebook"><img alt="Facebook" src="../IMG/facebook.png" /></a>
            <a href="#" title="Instagram"><img alt="Instagram" src="../IMG/instagram.png" /></a>
            <a href="#" title="Twitter"><img alt="Twitter" src="../IMG/twitter.png" /></a>
        </div>
        <div class="toggle-container">
            <img class="icon-sun" src="../Icons/sun-symbol.png" alt="sun icon">
            <input type="checkbox" id="switch" name="theme" onclick="darkLight()" /><label for="switch">Toggle</label>
            <img class="icon-moon" src="../Icons/moon-symbol.png" alt="moon icon">
        </div>
    </footer>
    <script src="../JS/script.js"></script>
    <script src="../JS/index.js"></script>
    <script type="text/javascript" src="../JS/topButton.js"></script>
    <script type="text/javascript" src="../JS/search_bar.js"></script>
    </body>
</html>