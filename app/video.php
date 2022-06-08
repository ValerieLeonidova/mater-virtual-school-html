
<?php include 'head.php'?>

<?php
$page = 'video';
include('header.php');
?>

<article class="banner banner--page banner--bottom" style="background-image: url(./img/demo/bottom-image.jpg)">
    <div class="banner-text wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="container">
            <h1 class="ttl">VIDEO HIGHLIGHTS</h1>
        </div>
    </div>
</article>

<main class="page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="page-box">
                    <h2 class="page-title wow fadeInUp" data-wow-duration="1.5s">Video Gallery</h2>
                    <div class="filter">
                        <div class="filter-search">
                            <input type="text" class="filter-search-text" placeholder="Search">
                            <button class="filter-search-button"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="filter-sort">
                            <strong>Sort by:</strong>
                            <select class="custom-select" name="" id="">
                                <option value="">Default</option>
                                <option value="">Most Popular</option>
                                <option value="">Most Recent</option>
                                <option value="">Oldest</option>
                            </select>
                        </div>
                    </div>
                    <ul class="album">
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" data-toggle="modal" data-target="#videoModal" class="album-image">
                                <img src="./img/demo/video-1.jpg" alt="">
                                <span class="album-count">1:12:36</span>
                                <span class="album-play"><i class="fas fa-play-circle"></i></span>
                            </a>
                            <h3>Virtual Charter 6-12 Orientation 08/17/2021</h3>
                            <em class="album-date">Uploaded 9 months ago</em>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" data-toggle="modal" data-target="#videoModal" class="album-image">
                                <img src="./img/demo/video-3.jpg" alt="">
                                <span class="album-count">45:10</span>
                                <span class="album-play"><i class="fas fa-play-circle"></i></span>
                            </a>
                            <h3>Virtual Charter 6-12 Orientation 08/17/2021</h3>
                            <em class="album-date">Uploaded 9 months ago</em>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" data-toggle="modal" data-target="#videoModal" class="album-image">
                                <img src="./img/demo/video-2.jpg" alt="">
                                <span class="album-count">00:28</span>
                                <span class="album-play"><i class="fas fa-play-circle"></i></span>
                            </a>
                            <h3>Mater Virtual</h3>
                            <em class="album-date">Uploaded 8 years ago</em>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" data-toggle="modal" data-target="#videoModal" class="album-image">
                                <img src="./img/demo/video-4.jpg" alt="">
                                <span class="album-count">1:18</span>
                                <span class="album-play"><i class="fas fa-play-circle"></i></span>
                            </a>
                            <h3>Welcome Video :)</h3>
                            <em class="album-date">Uploaded 8 years ago</em>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" data-toggle="modal" data-target="#videoModal" class="album-image">
                                <img src="./img/demo/video-5.jpg" alt="">
                                <span class="album-count">00:54</span>
                                <span class="album-play"><i class="fas fa-play-circle"></i></span>
                            </a>
                            <h3>Introduction</h3>
                            <em class="album-date">Uploaded 8 years ago</em>
                        </li>

                    </ul>
<!--                    <div class="text-center wow fadeInUp" data-wow-duration="1.5s">-->
<!--                        <a href="" class="btn btn--primary-outline">show more</a>-->
<!--                    </div>-->
                    <div class="text-center pt-3 wow fadeInUp" data-wow-duration="1.5s">
                        <strong><a href="itpc://www.matervirtual.com/apps/video/video_rss.jsp"><i class="fas fa-podcast"></i> Subscribe to Recent Videos in iTunes</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="./img/svg/Mater_Columbus_Ms_icon2.svg" alt="" class="page-icon">
</main>

<?php include 'scroll-button.php' ?>

<?php include 'footer.php' ?>

<?php include 'foot.php' ?>