
<?php include 'head.php'?>

<?php
$page = 'album';
include('header.php');
?>

<article class="banner banner--page banner--bottom" style="background-image: url(./img/demo/bottom-image.jpg)">
    <div class="banner-text wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="container">
            <h1 class="ttl">why mva</h1>
        </div>
    </div>
</article>

<main class="page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="page-box">
                    <h2 class="page-title wow fadeInUp" data-wow-duration="1.5s">Photo Album</h2>
                    <ul class="album">
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="album-inner.php" class="album-image">
                                <img src="./img/demo/photo-1.jpg" alt="">
                                <span class="album-count"><i class="fas fa-camera"></i> 4</span>
                            </a>
                            <h3>2019-2020 School Year</h3>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="album-inner.php" class="album-image">
                                <img src="./img/demo/photo-2.jpg" alt="">
                                <span class="album-count"><i class="fas fa-camera"></i> 2</span>
                            </a>
                            <h3>2018-2019 School Year</h3>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="album-inner.php" class="album-image">
                                <img src="./img/demo/photo-3.jpg" alt="">
                                <span class="album-count"><i class="fas fa-camera"></i> 3</span>
                            </a>
                            <h3>Graduation 2017</h3>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="album-inner.php" class="album-image">
                                <img src="./img/demo/photo-4.jpg" alt="">
                                <span class="album-count"><i class="fas fa-camera"></i> 2</span>
                            </a>
                            <h3>2016</h3>
                        </li>
                        <li class="album-item wow fadeInUp" data-wow-duration="1.5s">
                            <a href="album-inner.php" class="album-image">
                                <img src="./img/demo/photo-5.jpg" alt="">
                                <span class="album-count"><i class="fas fa-camera"></i> 5</span>
                            </a>
                            <h3>Teaching Assistants</h3>
                        </li>
                    </ul>
<!--                    <div class="text-center wow fadeInUp" data-wow-duration="1.5s">-->
<!--                        <a href="" class="btn btn--primary-outline">show more</a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <img src="./img/svg/Mater_Columbus_Ms_icon2.svg" alt="" class="page-icon">
</main>

<?php include 'scroll-button.php' ?>

<?php include 'footer.php' ?>

<?php include 'foot.php' ?>