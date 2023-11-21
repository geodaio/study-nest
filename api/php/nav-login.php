<header id="header-in">
            <nav class="flexbox">
                <div class="header-left">
                    <img src="SNLogo.svg" alt="Logo Temp" id="header-logo">
                    <a href="api/php/index.php" title="Temp">Home</a> 
                    <a href="api/php/hub.php" title="Temp">Study Hub</a>
                    <a href="api/php/communities.php" title="Temp">Communities</a>
                    <a href="api/php/about-us.php" title="Temp">About Us</a>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <button class="dropdown-button" id="lang"><img src="api/images/Globe_icon.svg" alt="ALTTEXT" id="dropdown-img">English</button>
                        <div class="lang-options">
                            <a href="" title="English" id="English" onclick="changeLang(this.id)">English</a>
                            <a href="" title="Spanish" id="Spanish" onclick="changeLang(this.id)">Spanish</a>
                            <a href="" title="French" id="French" onclick="changeLang(this.id)">French</a>
                            <a href="" title="German" id="German" onclick="changeLang(this.id)">German</a>
                            <a href="" title="Russian" id="Russian" onclick="changeLang(this.id)">Russian</a>
                        </div>
                    </div>
                    <button class="notification-bell" id="notifications-header"><img src="api/images/notification_logo.svg" alt="ALTTEXT" id="notification-bell-img"></button>
                    <div class="dropdown">
                        <button class="dropdown-button" id="profile-header"><img src="/apiimages/profile.jpeg" alt="ALTTEXT" id="profile-pic-header"></button>
                        <div class="lang-options">
                            <a href="api/php/profile.php" title="" id="profile-drop-header">Profile</a>
                            <a href="api/php/messages.php" title="" id="messages-header">Messages</a>
                            <a href="api/php/settings.php" title="" id="settings-header" onclick="changeLang(this.id)">Settings</a>
                            <a href="" title="" id="log-out-header" onclick="signOut()">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
