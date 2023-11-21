<header id="header-out">
            <nav class="flexbox">
                <?php
                        include("nav-left.php");
            ?>
                <div class="header-right">
                    <?php
                                    include("change-lang-nav.php");
                        ?>
                    <button class="sign-in" id="sign-in" onclick="toLogin()">Sign In</button>
                    <button class="sign-up" onclick="">Sign Up</button>
                </div>
            </nav>
        </header>

<header id="header-out">
        <nav class="flexbox">
                <?php
                        include("nav-left.php");
                ?>
                <div class="header-right">
                        <?php
                                include("change-lang-nav.php");
                                if (!isset($_COOKIE["loggedIn"])){
                                        include("nav-in.php");
                                }
                                else {
                                        include("nav-out.php");
                                }
                        ?>
                </div>
        </nav>
</header>
