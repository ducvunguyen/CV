<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CV_online1/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CV_online1/plugins/headline/headline.css">
    <link rel="stylesheet" href="../CV_online1/plugins/magnify.css">
    <link rel="shorcut icon" href="../CV_online1/images/favicon.ico">
    <link rel="stylesheet" href="../CV_online1/fontawesome-free-5.15.1-web/css/all.min.css">
    <!--    <link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="../CV_online1/css/style.css">
    <!--    <script src="https://kit.fontawesome.com/92e0f8c378.js" crossorigin="anonymous"></script>-->
    <title>CV'Hieu</title>
</head>
<body>
<nav>
    <div class="container inner">
        <div class="logo">
            <i class="fas fa-address-card"></i>
            NEXTGEN CV
        </div>
        <div>
            <button>
                <i class="fas fa-print"></i>
                print
            </button>
        </div>
    </div>
</nav>


<main class="container">
    <section class="profile" id="profile_ripple">
        <div class="left">
            <div class="avatar_block">
                <img src="../CV_online1/images/107394527_1320207071503285_3708010243264300053_o.jpg" alt="anh cua toi">
                <span>
                        <i class="far fa-comment-dots"></i>
                    </span>
            </div>
            <div>
                <h2>
                    <?= $infoUser['fullname']?>
                </h2>
                <p class="cd-headline loading-bar">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">UI/UX Designer</b>
                            <b>Angular Developer</b>
                            <b>React Native Developer</b>
                        </span>
                </p>
            </div>
        </div>
        <div class="right">
            <ul class="contact">
                <li>
                    <i class="fas fa-phone-volume"></i>
                    <strong>Phone : </strong> +84 0350313684
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <strong>Email : </strong> hieutn52@wru.vn
                </li>
            </ul>
            <ul class="socials">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="about">
        <h1 class="section__heading"> About US!</h1>
        <div class="content">
            <div class="left">
                <?= $infoUser['introduce']?>
                <button>Download CV</button>

            </div>
            <div class="right">
                <p>
                    <span>Name</span>
                    <span><?= $infoUser['fullname']?></span>
                </p>
                <p>
                    <span>Date of birth</span>
                    <span><?= $infoUser['birthday']?></span>
                </p>
                <p>
                    <span>Spoken Languages</span>
                    <span><?= $infoUser['lang']?></span>
                </p>
                <p>
                    <span>Address</span>
                    <span><?= $infoUser['address']?></span>
                </p>
                <p>
                    <span>Interest</span>
                    <span><?= $infoUser['hobby']?></span>
                </p>
            </div>
        </div>
    </section>

    <section class="skills">
        <h1 class="section__heading">Education & Skills</h1>
        <div class="content">
            <div class="left">
                <div class="inner__left">
                    <div class="heading">
                        <i class="fas fa-graduation-cap"></i>
                        <h5>Education</h5>
                    </div>
                    <div class="timeline__wrapper">
                        <div class="item">
                            <p>2008 - 2012</p>
                            <p class="center">Secondary School</p>
                            <p> Tan Hoi</p>
                        </div>
                        <div class="item">
                            <p>2012 - 2015</p>
                            <p class="center">High School</p>
                            <p> Tan Lap</p>
                        </div>
                        <div class="item">
                            <p>2015 - 2021</p>
                            <p class="center">University</p>
                            <p>Thuy Loi</p>
                        </div>
                    </div>
                </div>
                <div class="inner__right">
                    <div class="heading">
                        <i class="fas fa-suitcase"></i>
                        <h5>Experience</h5>
                    </div>
                    <div class="timeline__wrapper">
                        <div class="item">
                            <p>2008 - 2012</p>
                            <p class="center">dấdsds</p>
                            <p>THCS Tan Hoi</p>
                        </div>
                        <div class="item">
                            <p>2012 - 2015</p>
                            <p class="center">dấdsds</p>
                            <p>THCS Tan Hoi</p>
                        </div>
                        <div class="item">
                            <p>2015 - 2021</p>
                            <p class="center">dấdsds</p>
                            <p>THCS Tan Hoi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="skills__wrapper">
                    <?php foreach ($listSkill as $item) :?>
                    <div class="skill-box">
                        <h4><?= $item['name_skill']?></h4>
                        <div class="progress__wrap">
                                <span data-percent="<?= $item['process']?>" class="progress__bar">
                                    <span class="tooltip"><?= $item['process']?></span>
                                </span>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section class="counter__section">
        <div>
            <div>
                <i class="fab fa-angellist"></i>
            </div>
            <div>
                <h3><span class="counter" data-count="1500">1500</span>+</h3>
                <h5>Complete projects</h5>
            </div>
        </div>
        <div>
            <div>
                <i class="far fa-smile"></i>
            </div>
            <div>
                <h3><span class="counter" data-count="1600">1600</span>+</h3>
                <h5>Happy clients</h5>
            </div>
        </div>
        <div>
            <div>
                <i class="fas fa-trophy"></i>
            </div>
            <div>
                <h3><span class="counter" data-count="20">20</span>+</h3>
                <h5>Awards received</h5>
            </div>
        </div>
    </section>
    <section class="work">
        <h1 class="section__heading">My work & review</h1>
        <div class="wrapper">
            <div class="slider">
                <img class="slide" src="../CV_online1/images/picture1.jpg" idx="0" alt="">
                <img class="slide" src="../CV_online1/images/picture2.jpg" idx="1" alt="">
                <img class="slide" src="../CV_online1/images/picture3.jpg" idx="2" alt="">
                <img class="slide" src="../CV_online1/images/picture4.jpg" idx="3" alt="">

                <img class="btn-change" id="next" src="../CV_online1/icon/next.png" alt="">
                <img class="btn-change" id="prev" src="../CV_online1/icon/prev.png" alt="">

                <div class="change-img">
                    <button class="active" idx="0">1</button>
                    <button idx="1">2</button>
                    <button idx="2">3</button>
                    <button idx="3">4</button>
                </div>
            </div>
            <div class="portfolio">
                <div class="tabs">
                    <ul>
                        <li><a class="active" href="#" data-filter="*">All </a></li>
                        <li><a href="#" data-filter=".design">UI/UX Design </a></li>
                        <li><a href="#" data-filter=".frontend">Frontend </a></li>
                        <li><a href="#" data-filter=".backend">Backend </a></li>
                    </ul>
                </div>
                <div class="portfolio__wrapper">
                    <div class="item design">
                        <a class="magnify"  href="../CV_online1/images/1.jpg" title="something">
                            <img src="../CV_online1/images/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="item frontend">
                        <a class="magnify"  href="../CV_online1/images/2.jpg" title="something">
                            <img src="../CV_online1/images/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="item backend">
                        <a class="magnify"  href="../CV_online1/images/3.jpg" title="something">
                            <img src="../CV_online1/images/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="item design">
                        <a class="magnify"  href="../CV_online1/images/4.jpg" title="something">
                            <img src="../CV_online1/images/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="item design">
                        <a class="magnify"  href="../CV_online1/images/5.jpg" title="something">
                            <img src="../CV_online1/images/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="item backend">
                        <a class="magnify" href="../CV_online1/images/3.jpg" title="something">
                            <img src="../CV_online1/images/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="item frontend">
                        <a class="magnify" href="../CV_online1/images/2.jpg" title="something">
                            <img src="../CV_online1/images/2.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="brands__wrapper">
            <img src="../CV_online1/images/jquery.png" alt="">
            <img src="../CV_online1/images/jr.png" alt="">
            <img src="../CV_online1/images/unique.png" alt="">
            <img src="../CV_online1/images/wp.png" alt="">
            <img src="../CV_online1/images/am.png" alt="">
        </div>
    </section>
    <section class="contact">
        <h1 class="section__heading">Contact me</h1>
        <div class="wrapper">
            <div class="left">
                <div>
                    <div><i class="fas fa-phone-volume"></i></div>
                    <div>
                        <h4>Free call to me</h4>
                        <span>+84 353010684</span>
                    </div>
                </div>
                <div>
                    <div><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email</h4>
                        <span>hieutn52@wru.vn</span>
                    </div>
                </div>
                <div>
                    <div><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Find me</h4>
                        <span>Tan Hoi- Dan Phuong - Ha Noi</span>
                    </div>
                </div>
            </div>
            <div class="right">
                Right div
            </div>
        </div>
    </section>
</main>
<script src="../CV_online1/bootstrap-5.0.0-beta1-dist/js/jquery-3.5.1.slim.js"></script>

<script src="../CV_online1/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>-->
<script src="../CV_online1/bootstrap-5.0.0-beta1-dist/js/popper.min.js"></script>
<script src="../CV_online1/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="../CV_online1/js/jquery-3.5.1.min.js"></script>
<script src="../CV_online1/plugins/headline/headline.js"></script>
<script src="../CV_online1/plugins/ripples.js"></script>
<script src="../CV_online1/plugins/isotope.js"></script>
<script src="../CV_online1/plugins/magnify.js"></script>
<!--    <script src="script.js"></script>-->
<script src="../CV_online1/app.js"></script>
</body>
</html>

