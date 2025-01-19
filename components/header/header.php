<header>
    <!-- სიის აიკონი -->
    <img class="language_Profile_List" id="ListIcon" src="../Images/Icons/ListIcon.png" alt="List Icon">

    <!-- დივი, რომელიც მთავარ ლოგოს და მის დეკორაციას ინახავს -->
    <div id="L-D-Frame">
        <!-- მთავარი ლოგო -->
        <a id="main_logo_a" href="../Site/index.php">
            <img id="main_logo" src="../Images/Logo images/logo.png" alt="logo">
        </a>
        <!-- დეკორაცია -->
        <div id="line"></div>
    </div>

    <!-- ნავიაცია -->
    <div id="items">

        <!-- თამაშები -->
        <div class="item" id="games">
            <h4>
                <b>
                    <a href="../Site/Games.php" id="b">
                        Games
                    </a>
                </b>
            </h4>
        </div>

        <!-- ახალი ამბები -->
        <div class="item">
            <h4>
                <b>
                    <a href="../Site/News.php" id="c">
                        News
                    </a>
                </b>
            </h4>
        </div>

        <!-- მიმოხილვები -->
        <div class="item">
            <h4>
                <b>
                    <a href="../Site/Reviews.php" id="f">
                        Reviews
                    </a>
                </b>
            </h4>
        </div>

        <!-- საპორტი -->
        <div class="item">
            <h4>
                <b>
                    <a href="../Site/ContactUs.php" id="h">
                        Contact Us
                    </a>
                </b>
            </h4>
        </div>
    </div>

    <!-- სერჩი -->
    <div id="search">
        <input type="text" placeholder="Search">
    </div>

    <!-- დივი, რომელიც პროფილის, ენის შეცვლის და სიის აიკონს ინახავს -->
    <div id="L-P-Frame">
        <div id="SearchIcon_mobile_frame">

            <!-- სერჩი სმარტფონისთვის -->
            <img id="SearchIcon_mobile" src="../Images/Icons/SearchIcon.png" alt="Search Icon">
            <input id="searchMobile" type="text" placeholder="Search">
        </div>

        <!-- ენის შეცვლის აიკონი -->
        <img class="language_Profile_List" id="LanguageIcon" src="../Images/Icons/LanguageIcon.png" alt="Language Icon">

        <!-- ავტორიზაციის აიკონი -->
        <img class="language_Profile_List" id="ProfileIcon" src="../Images/Icons/ProfileIcon.png" alt="Profile Icon">


    </div>
</header>
<div id="divsThatDoesNotShowUntilClick">
    <!-- ტელეფონის მენიუ (დასაწყისი) -->
    <div id="menu">
        <div class="menu_div">
            <b>
                <a href="../Site/Games.php" id="a">
                    Games
                </a>
            </b>
        </div>
        <div class="menu_div">
            <b>
                <a href="../Site/News.php" id="d">
                    News
                </a>
            </b>
        </div>
        <div class="menu_div">
            <b>
                <a href="../Site/Reviews.php" id="e">
                    Reviews
                </a>
            </b>
        </div>
        <div class="menu_div">
            <b>
                <a href="..Site/ContactUs.php" id="g">
                    Contact Us
                </a>
            </b>
        </div>
        <div class="autorisation-div">

            <div class="mob-reg-divs">
                <?php
                if (isset($_SESSION["userID"]) && isset($_SESSION['username'])) {
                    echo    "<form action='../Includes/LogOut.php' method='POST' class='mob-reg-divs'>
                                <button id='LogoutButton' name='LogoutButton'>
                                    <b id='m'>
                                        Log Out
                                    </b>
                                </button>
                            </form>";
                } else {
                    echo    "<div class='mob-reg-divs'>
                                <a href='../Site/Registration.php'>
                                    <b id='l'>
                                        Register
                                    </b>
                                </a>
                            </div>
                            <div class='mob-reg-divs'>
                                <a href='../Site/LogIn.php'>
                                    <b id='m'>
                                        Log In
                                    </b>
                                </a>
                            </div>";
                }
                ?>

            </div>
        </div>
        <div class="ChangeLanguage-mobile">
            <div id="GE" onclick="ChangeLanguageToGeorgian()">
                <a>
                    <b>
                        Georgian
                    </b>
                </a>
            </div>
            <div id="EN" onclick="ChangeLanguageToEnglish()">
                <a>
                    <b>
                        English
                    </b>
                </a>
            </div>
        </div>
    </div>
    <!-- ტელეფონის მენიუ (დასასრული) -->
    <div id="profile" style="display: none;">
        <?php
            if (isset($_SESSION["userID"]) && isset($_SESSION['username'])) {
            echo    "<form action='../Includes/LogOut.php' method='POST' class='mob-reg-divs'>
                        <button id='LogoutButtone' name='LogoutButton'>
                            <b id='m'>
                                Log Out
                            </b>
                        </button>
                    </form>";
                } else {
                    echo "<a href='../Site/Registration.php' id='reg-link'>
                            <div id='Registration'>
                                <b id='j'>
                                    Register
                                </b>
                            </div>
                        </a>
                        <a href='../Site/LogIn.php' id='log-link'>
                            <div id='Log-in'>
                                <b id='k'>
                                    Log in
                                </b>
                            </div>
                        </a>";
                }
        ?>

    </div>
    <div id="ChangeLanguage">
        <div id="Georgian" onclick="ChangeLanguageToGeorgian()">
            <b>
                Georgian
            </b>
        </div>
        <div id="English" onclick="ChangeLanguageToEnglish()">
            <b>
                English
            </b>
        </div>
    </div>
</div>