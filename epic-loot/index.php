
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Epic Loot - Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <link rel="icon" type="image/x-icon" href="src/img/epic-loot-sm.svg">
</head>
<body>
<div class="body-wrap">
    <!-- Header -->
    <header class="header-wrapper" id="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="javascript:void(0)"><img src="src/img/epic-loot.svg" width="200" alt="Logo"></a>
                </div>
                <div class="logo-sm">
                    <a href="javascript:void(0)"><img src="src/img/epic-loot-sm.svg" width="40" alt="Logo"></a>
                </div>

                <!-- Navigasi -->
                <nav class="nav-list" id="navList">
                    <span><a class="nav-link close-menu" onclick="closeMenu()"><i class="bx bx-x-circle"></i></a></span>
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#tentang" class="nav-link">About</a>
                    <a href="#layanan" class="nav-link">Benefits</a>
                    <a href="#portfolio" class="nav-link">Products</a>
                    <?php
                    session_start();
                    if(empty($_SESSION['username'])){
                        header("location:login.php");
                    }
                    else{
                        echo "<div class='logout-link'><a class='nav-link' href='logout.php'>Logout</a></div>";                }
                    ?>
                </nav>

                <div class="collapse-bar">
                    <a href="javascript:void(0)" onclick="openMenu()"><i class="bx bx-menu menu-icon"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <article class="hero-wrapper section" id="home">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-desc">
                        <h1 class="hero-title"><br><br>Get The Best Gaming & Setup Accessories!</h1>
                        <p class="hero-subtitle">Level up your game, shop with us! Where gamers find their epic loots.</p>
                        <button onclick="location.href='main/home.php';" type="button" class="btn-primary">Check it out <i class="bx bx-right-arrow-circle bx-sm"></i></button>
                    </div>
                    <aside class="hero-illust">
                        <img src="src/img/portfolio/3c2a4724-7835-4c80-b4da-8a27ca21dec6-rover84-lightyear.jpg" alt="Hero01" width="100%" class="hero-img">
                        <img src="src/img/portfolio/3b98f311-c2da-4f83-bc88-d48177cf843f.jpg" alt="Hero02" width="100%" class="hero-img opacity-0">
                        <img src="src/img/portfolio/dfcde755-d695-4116-a99b-5d976e33506d.jpg" alt="Hero03" width="100%" class="hero-img opacity-0">
                    </aside>
                </div>
            </div>
        </article>

        <!-- Tentang -->
        <article class="tentang-wrapper section" id="tentang">
            <div class="container">
                <div class="tentang-inner">
                    <h1 class="tentang-title">About Us</h1>
                    <hr>
                    <div class="tentang-inner-desc">
                        <aside class="tentang-profile">
<!--                            <img class="img-profile" src="src/img/profile2.jpg" alt="Profile" width="20%">-->
                            <div class="nama-profile-wrapper">
                                <p class="nama-profile"><strong>Muhammad Dimas Tricahyo</strong></p>
                                <p class="job-profile"><i>32230045</i></p>
                                <p class="job-profile"><i>Website Developer<br>& Back End Dev.</i></p>
                                <p>Membangun website dari awal menggunakan PHP, CSS, dan JavaScript.</p>
                            </div>
                            <div class="nama-profile-wrapper">
                                <p class="nama-profile"><strong>Ruben<br>Wijaya</strong></p>
                                <p class="job-profile"><i>32230048</i></p>
                                <p class="job-profile"><i>Logo Designer & Back End Dev.</i></p>
                                <p>Membuat logo dan mengusulkan nama website.</p>
                            </div>
                            <div class="nama-profile-wrapper">
                                <p class="nama-profile"><strong>Arianala Ramaputra</strong></p>
                                <p class="job-profile"><i>32230080</i></p>
                                <p class="job-profile"><i>Website Content Developer</i></p>
                                <p>Mencari informasi dan membuat isi dari website.</p>
                            </div>
                            <div class="nama-profile-wrapper">
                                <p class="nama-profile"><strong>Mohammad Bintang</strong></p>
                                <p class="job-profile"><i>32230064</i></p>
                                <p class="job-profile"><i>Website Designer & Back End Dev.</i></p>
                                <p>Membuat rancangan tampilan.</p>
                            </div>
                            <div class="nama-profile-wrapper">
                                <p class="nama-profile"><strong>Cristian Iverson</strong></p>
                                <p class="job-profile"><i>32230057</i></p>
                                <p class="job-profile"><i>Back End Developer</i></p>
                                <p>Membuat rancangan website.</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </article>

        <!-- Layanan -->
        <article class="layanan-wrapper section" id="layanan">
            <div class="container">
                <div class="layanan-inner">
                    <h1 class="layanan-title">Benefits</h1>
                    <hr>
                    <div class="layanan-list-wrapper">
                        <div class="layanan-list">
                            <i class='bx bx-calendar-heart layanan-icon' ></i>
<!--                            <i class="bx bx-palette layanan-icon"></i>-->
                            <p class="layanan-list-title">7 Days Guarantee</p>
                            <p class="layanan-list-desc">ALL Our Products come with 7 Day Guarantee for any defects or issues. We will replace your unit with a brand new one!</p>
                        </div>
                        <div class="layanan-list">
                            <i class='bx bx-purchase-tag-alt layanan-icon'></i>
<!--                            <i class="bx bx-code-block layanan-icon"></i>-->
                            <p class="layanan-list-title">Exclusive Prices</p>
                            <p class="layanan-list-desc">Get better promos, better prices when you shop directly with our website!</p>
                        </div>
                        <div class="layanan-list">
                            <i class='bx bx-medal layanan-icon' ></i>
<!--                            <i class='bx bx-coin layanan-icon' ></i>-->
                            <p class="layanan-list-title">Points</p>
                            <p class="layanan-list-desc">Shop and earn more! Accumulate Points on EVERY Sale and get bigger and better discounts!</p>
                        </div>
                        <div class="layanan-list">
                            <i class='bx bx-package layanan-icon' ></i>
<!--                            <i class="bx bx-pen layanan-icon"></i>-->
                            <p class="layanan-list-title">Free Shipping</p>
                            <p class="layanan-list-desc">Get unlimited FREE Two-Day Shipping with no minimum spend.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Portfolio -->
        <article class="portfolio-wrapper section" id="portfolio">
            <div class="container">
                <h2 class="portfolio-title">Our Newest Addition</h2>
                <div class="portfolio-list-wrapper">
                    <div class="portfolio-list">
                        <a href="#">
                        <img src="src/img/portfolio/Cover_Tokped_acrylic.jpg" alt="01">
                        </a>
                        <div class="overlay">
                            <a href="#" class="nama-portfolio">Acrylic Keyboard and Mouse Stand</a>
                        </div>
                    </div>
                    <div class="portfolio-list">
                        <img src="src/img/portfolio/3c2a4724-7835-4c80-b4da-8a27ca21dec6-rover84-lightyear.jpg" alt="02">
                        <div class="overlay">
                            <p class="nama-portfolio">ROVER84 Lightyear 75%</p>
                        </div>
                    </div>
                    <div class="portfolio-list">
                        <img src="src/img/portfolio/445c43df-b0ec-49c4-8c07-7fb1b6f62628.jpg" alt="03">
                        <div class="overlay">
                            <p class="nama-portfolio">Cosmonauts Keycaps</p>
                        </div>
                    </div>
                    <div class="portfolio-list">
                        <img src="src/img/portfolio/b8cd9084-9c2a-4c73-b7aa-5e686ff13e7f.jpg" alt="04">
                        <div class="overlay">
                            <p class="nama-portfolio">Noise Series Deskmat</p>
                        </div>
                    </div>
                    <div class="portfolio-list">
                        <img src="src/img/portfolio/3b98f311-c2da-4f83-bc88-d48177cf843f.jpg" alt="05">
                        <div class="overlay">
                            <p class="nama-portfolio">APOLLO61 Lite 60%</p>
                        </div>
                    </div>
                    <div class="portfolio-list">
                        <img src="src/img/portfolio/97bc9a4a-e0d0-4c95-bf47-f312163a4628.jpg" alt="06">
                        <div class="overlay">
                            <p class="nama-portfolio">IRIS Ultralight Mouse</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-btn">
                    <button onclick="location.href='main/home.php';" type="button" class="btn-primary btn-portfolio">Lihat lebih banyak</button>
                </div>
            </div>
        </article>


    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-kontak">
                    <img src="src/img/epic-loot-white.svg" alt="Logo white" width="200">
                    <p class="footer-text">
                        Jl. Jalur Sutera Bar. No.Kav.7-9 <br>
                        Panunggangan Tim., Kec. Pinang <br>
                        Kota Tangerang, Banten <br><br>
                        <strong>Phone :</strong> 08123456789<br>
                        <strong>Email:</strong> epic.loot@gmail.com<br>
                    </p>
                </div>
                <aside class="footer-sosmed">
                    <a target="_blank" href="https://www.facebook.com/"><i class="bx bxl-facebook-circle bx-sm icon-sosmed"></i></a>
                    <a target="_blank" href="https://x.com/2ndDimas"><i class="bx bxl-twitter bx-sm icon-sosmed"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/muhammad-dimas-tricahyo-880352237/"><i class="bx bxl-linkedin bx-sm icon-sosmed"></i></a>
                    <a target="_blank" href="https://github.com/DimasTRC"><i class="bx bxl-github bx-sm icon-sosmed"></i></a>
                </aside>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy;Copyright 2024. Epic Loot</p>
        </div>
    </footer>
</div>

<script src="src/js/page.js"></script>
</body>
</html>
