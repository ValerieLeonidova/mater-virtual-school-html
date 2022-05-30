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
                <li <?php echo ($page == 'about') ? 'class="active"' : '';?>>
                    <a href="about.php">About Us</a>
<!--                    <div class="drop">-->
<!--                        <ul>-->
<!--                            <li><a href="#">About Mater Academy Virtual Charter School</a></li>-->
<!--                            <li><a href="#">Board Members</a></li>-->
<!--                            <li><a href="#">Board Meeting Schedule</a></li>-->
<!--                            <li><a href="#">Board Meeting Minutes</a></li>-->
<!--                            <li><a href="#">Board Speaker Request Form</a></li>-->
<!--                            <li><a href="#">Procedures for Addressing Concerns</a></li>-->
<!--                            <li><a href="#">Instructional Continuity Plan</a></li>-->
<!--                            <li><a href="#">Budgets and Financials</a></li>-->
<!--                            <li><a href="#">Academic Performance / School Grades</a></li>-->
<!--                            <li><a href="#">Staff</a></li>-->
<!--                            <li><a href="#">Student Progression Plan</a></li>-->
<!--                            <li><a href="#">Calendars</a></li>-->
<!--                            <li><a href="#">Educational Service Provider</a></li>-->
<!--                            <li><a href="#">College Board Advanced Placement</a></li>-->
<!--                            <li><a href="#">Comparative School Data</a></li>-->
<!--                            <li><a href="#">Child Abuse and Neglect Policy</a></li>-->
<!--                            <li><a href="#">Reporting Professional Misconduct</a></li>-->
<!--                            <li><a href="#">Public Records Request</a></li>-->
<!--                            <li><a href="#">Anti-Discrimination</a></li>-->
<!--                            <li><a href="#">Employment Verification</a></li>-->
<!--                            <li><a href="#">VIP Disclosures</a></li>-->
<!--                            <li><a href="#">Meet the Administration</a></li>-->
<!--                            <li><a href="#">Disclosures</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </li>
                <li>
                    <a href="#">Why MVA</a>
                    <div class="drop">
                        <ul>
                            <li><a href="#">Vision and Mission Statements</a></li>
                            <li><a href="#">Admissions/Eligibility Requirements</a></li>
                            <li <?php echo ($page == 'album') ? 'class="active"' : '';?>><a href="album.php">Photo Album</a></li>
                            <li <?php echo ($page == 'highlights') ? 'class="active"' : '';?>><a href="highlights.php">Mater Highlights</a></li>
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
                            <li><a href="#">Student Handbook</a></li>
                            <li><a href="#">Dual Enrollment</a></li>
                            <li><a href="#">Homework Help</a></li>
                            <li><a href="#">Gradebook</a></li>
                            <li><a href="#">Important Documents</a></li>
                            <li><a href="#">Important Links</a></li>
                            <li><a href="#">Academic Assistance</a></li>
                            <li><a href="#">Transcript Request</a></li>
                            <li><a href="#">School Calendar</a></li>
                            <li><a href="#">School Supply List</a></li>
                            <li><a href="#">Dress Code for Live Testing/Live Sessions</a></li>
                            <li><a href="#">Dual Enrollment</a></li>
                            <li><a href="#">Student Services</a></li>
                            <li><a href="#">Testing</a></li>
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
                <li <?php echo ($page == 'contact') ? 'class="active"' : '';?>>
                    <a href="contacts.php">contact us</a>
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
</header>