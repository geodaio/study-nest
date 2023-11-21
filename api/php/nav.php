<header id="header-out">
        <nav class="flexbox">
                <?php
                        include("api/php/nav-left.php");
                ?>
                <div class="header-right">
                        <?php
                                include("api/php/change-lang-nav.php");
                                if ($_COOKIE["loggedIn"] === true){
                                        include("api/php/nav-in.php");
                                }
                                else {
                                        include("api/php/nav-out.php");
                                }
                        ?>
                </div>
        </nav>
</header>
