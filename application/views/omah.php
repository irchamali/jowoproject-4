<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Page title -->
    <title><?= $site_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('theme/images/' . $icon); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('omah/css/style.css'); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />

    <script src="<?= base_url('omah/js/a076d05399.js'); ?>"></script>
    <script src="<?= base_url('omah/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/typed.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/owl.carousel.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?= base_url('omah/css/owl.carousel.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('theme/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('omah/css/main.css'); ?>">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fa fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><img src="<?= base_url('assets/images/logodekor.png'); ?>" width="145" height="40" alt=""></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#teams" class="menu-btn">Product</a></li>
                <!-- <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li> -->
                <!-- <li><a href="#teams" class="menu-btn">Testimoni</a></li> -->
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Cek
                </button> -->
                <!-- <li><a type="button" class="btn-search" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-search"></span></a></li> -->
                <li><a href="javascript:void(0)" class="btn-search"><span class="fa fa-search"></span></a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2">Hi, Lovely</div>
                <div class="text-3"><span class="typing"></span></div>
                <!-- <div class="text-3"><span><span class="typing"></span></div> -->
                <!-- <div class="text-1"><img src="<?= base_url('/omah/images/arrow-down-animated.gif'); ?>"></div> -->
                <a href="https://api.whatsapp.com/send?phone=085730110225"><i class="fa fa-whatsapp"></i> Order Now</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <!-- <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Product</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>">
                </div>
                <div class="column right">
                    <div class="text">Mau dibuatkan <span class="typing-2"></span>?</div>
                    <p><?php echo $about_desc; ?></p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Seksi baru ini -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Dekorasi Dinding</h2>
            <div class="split">
                <?php foreach ($testimonial->result() as $test) : ?>
                    <div class="featured__item">
                        <img src="<?php echo base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
                        <p class="featured__details"><span class="price"><?php echo $test->testimonial_name; ?></span><?php echo $test->testimonial_content; ?></p>
                    </div>
                    <!-- <div class="featured__item">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                    <p class="featured__details"><span class="price">Rp. 200K</span>product name</p>
                </div>
                <div class="featured__item">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                    <p class="featured__details"><span class="price">Rp. 300K</span>product name</p>
                </div>
                <div class="featured__item">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                    <p class="featured__details"><span class="price">Rp. 400K</span>product name</p>
                </div> -->
                <?php endforeach; ?>
            </div>
        </div><br>
        <div class="max-width">
            <article class="product shoe-red spacing">
                <img src="<?= base_url() . 'theme/images/' . $bg_1; ?>" alt="" class="product__image">
                <h3 class="product__title"><?= $name_1; ?></h3>
                <p class="product__description"><?= $caption_1; ?></p>
                <a href="" class="btn">Order now</a>
            </article>
            <article class="product shoe-white shoe-left spacing">
                <img src="<?= base_url() . 'theme/images/' . $bg_2; ?>" alt="" class="product__image">
                <h3 class="product__title"><?= $name_2; ?></h3>
                <p class="product__description"><?= $caption_2; ?></p>
                <a href="" class="btn">Order now</a>
            </article>
            <article class="product shoe-blue spacing">
                <img src="<?= base_url() . 'theme/images/' . $bg_3; ?>" alt="" class="product__image">
                <h3 class="product__title"><?= $name_3; ?></h3>
                <p class="product__description"><?= $caption_3; ?></p>
                <a href="" class="btn">Order now</a>
            </article>
        </div>
    </section>


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title">instagram.com/mochiproject</div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="https://instagram.com"><i class="fa fa-twitter-square"></i></a>
                            <div class="info">
                                <div class="head">Twitter</div>
                                <div class="sub-title">twitter.com/mochiproject</div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="https://instagram.com"><i class="fa fa-facebook-square"></i></a>
                            <div class="info">
                                <div class="head">Facebook</div>
                                <div class="sub-title">facebook.com/mochiproject</div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="https://instagram.com"><i class="fa fa-envelope-square"></i></a>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">mochiproject@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <form method="post" action="<?php echo site_url('contact/send'); ?>" role="form" class="form">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">
                            </div>
                            <div class="field email">
                                <input type="email" name="email" class="full_width" placeholder="Email kamu*" maxlength="100" required="">
                            </div>
                        </div>
                        <div class="field">
                            <!-- <input type="text" placeholder="Subject" required> -->
                            <input type="text" name="subject" class="full_width" placeholder="Subject *" maxlength="100" required="">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" class="full_width" rows="6" placeholder="Tulis pesan.. *" maxlength="400" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.jowokode.com">JowoKode</a> | <span class="fa fa-copyright"></span> 2020</span>
    </footer>

    <script src="<?= base_url('theme/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('theme/js/script.js') ?>"></script>
    <script src="<?= base_url('omah/js/script.js'); ?>"></script>
</body>

</html>