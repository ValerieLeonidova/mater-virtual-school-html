
<?php include 'head.php'?>

<?php
$page = 'home';
include('header.php');
?>

<a href="#" class="header-notification" data-toggle="modal" data-target="#notificationModal"><i class="fas fa-bell"></i></a>

<article class="banner banner--home">
    <div class="banner-inner">
        <div class="banner-video">
            <video autoplay loop muted webkit-playsinline playsinline
                   poster="./img/demo/video-poster.jpg">
                <source src="./img/video/home_bg.mp4" type="video/mp4">
            </video>
        </div>
        <div class="banner-text wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="ttl">MVA STUDENTS</h1>
                        <div class="txt">SEEKING A WORLD BEYOND THE CLASSROOM</div>
                        <a href="#" class="btn btn--big btn--shadow">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-links wow fadeInUp" data-wow-duration="1.5s">
                <a href="#" class="banner-links-item">
                    <img src="./img/svg/Mater_Columbus_Ms_icon.svg" alt="">
                    <h3>ACADEMIC <br/>ASSISTANCE <i class="fas fa-long-arrow-alt-right"></i></h3>
                </a>
                <a href="#" class="banner-links-item">
                    <img src="./img/svg/advance-calendar-page-button-with-right-arrow.svg" alt="">
                    <h3>UPCOMING <br/>EVENTS <i class="fas fa-long-arrow-alt-right"></i></h3>
                </a>
                <a href="#" class="banner-links-item">
                    <img src="./img/svg/online.svg" alt="">
                    <h3>Web Accessibility <br/>Statement <i class="fas fa-long-arrow-alt-right"></i></h3>
                </a>
            </div>
        </div>
    </div>
</article>

<main class="home">

    <section class="home-about" aria-label="welcome">
        <div class="home-about-images">
            <div class="home-about-img wow fadeInLeft" data-wow-duration="1.5s">
                <strong>Wellcome</strong>
                <img src="./img/demo/img-01.jpg" alt="" class="home-about-picture">
            </div>
            <div class="home-about-name wow fadeInUp" data-wow-duration="1.5s">
                <img src="./img/demo/img-02.jpg" alt="">
                <div class="home-about-txt">
                    <b>Douglas Rodriguez </b>
                    <span>Principal</span>
                </div>
            </div>
            <img src="./img/svg/Mater_Columbus_Ms_icon2.svg" alt="" class="home-about-icon">
        </div>
        <div class="home-about-text wow fadeInRight" data-wow-duration="1.5s">
            <h2>PRINCIPAL'S MESSAGE</h2>
            <p>Welcome to Mater Virtual Academy Middle High School. We are a school that encourages the extraordinary in its students; a school that provides the core academic building blocks essential for success beyond high school; a school that provides critical life learning; a school that fosters smart intellectual risk taking in a safe, tailored learning environment. We prepare students beyond what they can achieve in traditional schools by providing an individualized education attuned to their own needs and goals through regular support of nurturing teachers and college counselors. Our intent is to provide an educational experience that encourages our students to build upon their strengths.</p>
            <a href="#" class="btn btn--shadow">Read More</a>
        </div>
        <img src="./img/svg/M_icons-service-in-line.svg" alt="" class="home-about-bg d-none d-xl-block">
    </section>

    <section class="home-information" aria-label="Information" style="background-image: url(./img/demo/info-bg.jpg)">
        <div class="home-information-inner">
            <div class="home-students">
                <a href="#" class="home-students-item wow fadeInLeft" data-wow-duration="1.5s">
                    <h2>Student Recognition</h2>
                    <div class="home-students-image">
                        <img src="./img/demo/img-03.jpg" alt="">
                    </div>
                    <strong>Adrianna Smigiel</strong>
                </a>
                <a href="#" class="home-students-item wow fadeInLeft" data-wow-duration="1.5s">
                    <h2>Academic Coach</h2>
                    <div class="home-students-image">
                        <img src="./img/demo/img-04.jpg" alt="">
                    </div>
                    <strong>Bruce Valenzano</strong>
                </a>
            </div>
            <div class="home-album">
                <a href="#" class="home-album-item wow fadeInUp" data-wow-duration="1.5s">
                    <h2>FEATURED PHOTO ALBUM</h2>
                    <div class="home-album-image">
                        <img src="./img/demo/img-05.jpg" alt="">
                    </div>
                </a>
                <a href="#" class="home-album-item wow fadeInUp" data-wow-duration="1.5s">
                    <h2>VIDEO HIGHLIGHTS</h2>
                    <div class="home-album-image">
                        <img src="./img/demo/img-07.jpg" alt="">
                        <span class="home-album-play"><em><i class="fas fa-play"></i></em></span>
                    </div>
                </a>
            </div>
            <div class="home-teacher">
                <a href="#" class="home-teacher-item wow fadeInRight" data-wow-duration="1.5s">
                    <h2>TEACHER OF THE MONTH</h2>
                    <div class="home-teacher-image">
                        <img src="./img/demo/img-06.jpg" alt="">
                    </div>
                    <strong>Ariel Cabrera</strong>
                </a>
            </div>
        </div>
        <em class="home-information-slogan d-none d-xl-block">We are proud to be an “A” schoool!</em>
        <div class="home-information-marquee">
            <img src="./img/svg/slogan.svg" alt="">
            <img src="./img/svg/slogan.svg" alt="">
        </div>
    </section>

    <section class="home-news" aria-label="news">
        <div class="container">
            <div class="wow fadeInUp" data-wow-duration="1.5s">
                <h2>in the News</h2>
            </div>
            <ul class="home-news-list">
                <li class="home-news-item wow fadeInUp" data-wow-duration="1.5s">
                    <a href="" class="home-news-image">
                        <img src="./img/demo/model-img.png" alt="">
                    </a>
                    <h3><a href="">Informational Meeting</a></h3>
                    <p>New & Interested Students Welcome</p>
                    <p>April 13 - 6pm</p>
                    <p>May 18 - 6pm</p>
                </li>
                <li class="home-news-item wow fadeInUp" data-wow-duration="1.5s">
                    <a href="" class="home-news-image">
                        <img src="./img/demo/news-1.jpg" alt="">
                    </a>
                    <h3><a href="">Back-To-School Sales Tax Holiday</a></h3>
                    <p>2021 Florida Back-To-School Sales Tax Holiday will be </p>
                    <p>07/31/2021-08/09/2021</p>
                </li>
                <li class="home-news-item wow fadeInUp" data-wow-duration="1.5s">
                    <a href="" class="home-news-image">
                        <img src="./img/demo/news-2.jpg" alt="">
                    </a>
                    <h3><a href="">2021-2022 School Calendar</a></h3>
                    <p>2021-2022 School Calendar is available now, please click to download.</p>
                </li>
                <li class="home-news-item wow fadeInUp" data-wow-duration="1.5s">
                    <a href="" class="home-news-image">
                        <img src="./img/demo/news-3.jpg" alt="">
                    </a>
                    <h3><a href="">2021-2022 Supply List</a></h3>
                    <p>2021-2022 General Supply List is available, please download.</p>
                </li>
            </ul>
            <div class="text-center wow fadeInUp" data-wow-duration="1.5s">
                <a href="" class="btn btn--primary-outline">view all</a>
            </div>
        </div>
        <img src="./img/svg/Mater_Columbus_Ms_icon2.svg" alt="" class="home-news-icon">
    </section>

</main>

<aside class="subscribe" style="background-image: url(./img/demo/bottom-image.jpg)">
    <div class="container">
        <div class="wow fadeInUp" data-wow-duration="1.5s">
            <img src="./img/svg/Mater_Columbus_Ms_icon.svg" alt="" class="subscribe-icon">
            <h3>GET IN CONTACT</h3>
            <p>Have questions or want to learn more about Mater Academy Virtual?</p>
            <a href="" class="btn btn--white">contact us</a>
        </div>
    </div>
    <img src="./img/svg/slogan2.svg" alt="" class="subscribe-slogan wow fadeInUp" data-wow-duration="1.5s">
</aside>


<?php include 'scroll-button.php' ?>

<?php include 'footer.php' ?>

<?php include 'foot.php' ?>