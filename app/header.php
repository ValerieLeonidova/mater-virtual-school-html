<header class="header">
    <a href="index.php" class="header-logo">
        <img src="./img/svg/logo.svg" alt="">
    </a>
    <div class="header-slogan d-none d-xl-block">
        <strong>
            <span>We are proud to be an “A” schoool!</span>
        </strong>
    </div>
    <div class="header-inner">
        <div class="header-buttons d-none d-sm-flex">
            <a href="#" class="btn btn--white-outline ttn">Login to Courses</a>
            <a href="#" class="btn">APPLY NOW</a>
        </div>
        <nav class="header-nav">
            <img src="./img/svg/logo.svg" alt="" class="header-nav-logo">
            <ul>
                <li <?php echo ($page == 'home') ? 'class="active"' : '';?>><a href="index.php">Home</a></li>
                <li>
                    <a href="about.php">About Us</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Why MVA</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#">Vision and Mission Statements</a></li>
                            <li><a href="#">Admissions/Eligibility Requirements</a></li>
                            <li><a href="#">Photo Album</a></li>
                            <li><a href="#">Mater Highlights</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">our classes</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#">Apply Now!</a></li>
                            <li><a href="#">College Resources</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">students</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">faculty</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#">Website Login</a></li>
                            <li><a href="#">Gradebook</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">contact us</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#">Employment</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Staff</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="header-buttons d-sm-none">
                <a href="#" class="btn btn--white-outline ttn">Login to Courses</a>
                <a href="#" class="btn">APPLY NOW</a>
            </div>
        </nav>
    </div>
    <button class="open-nav-btn c-hamburger c-hamburger--htx">
        <span>toggle menu</span>
    </button>
    <a href="#" class="header-notification" data-toggle="modal" data-target="#notificationModal"><i class="fas fa-bell"></i></a>
</header>