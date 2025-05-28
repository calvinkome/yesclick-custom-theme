<?php
/*
Theme Name: ChatPion Modern Theme 
Unique Name: ChatPion Modern Theme
Theme URI: https://chatpion.com
Author: ChatPion Team
Author URI: https://chatpion.com
Version: 1.0
Description: A modern, responsive theme for ChatPion with enhanced UI/UX features
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $this->config->item('product_short_name'); ?> - The ultimate messaging platform for your business">
    <meta name="author" content="<?php echo $this->config->item('institute_address1'); ?>">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title><?php echo $this->config->item('product_name'); if($this->config->item('slogan')!='') echo " | ".$this->config->item('slogan')?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?php echo base_url('home/xit_load_files/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/xit_load_files/css/fontawesome-all.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/xit_load_files/css/swiper.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('home/xit_load_files/css/magnific-popup.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('home/xit_load_files/css/styles.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('home/xit_load_files/css/custom.css'); ?>" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top" class="modern-theme">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html"><?php echo $this->config->item("product_short_name"); ?></a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="<?php echo $this->config->item('product_name');?>"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll btn btn-outline-light rounded-pill px-3 ml-2" href="<?php echo base_url('home/login'); ?>"><i class="fas fa-sign-in-alt mr-1"></i> Login</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('home/terms_use'); ?>"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?php echo base_url('home/privacy_policy'); ?>"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <?php if($this->config->item('facebook') != '') : ?>
                <span class="fa-stack">
                    <a href="<?php echo $this->config->item('facebook'); ?>">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <?php endif; ?>
                <?php if($this->config->item('twitter') != '') : ?>
                <span class="fa-stack">
                    <a href="<?php echo $this->config->item('twitter'); ?>">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <?php endif; ?>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header modern-header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise"><?php echo $this->config->item("product_short_name"); ?></span> - Modern Messaging Platform</h1>
                            <p class="p-large">Use <?php echo $this->config->item("product_short_name"); ?> to streamline your business communications and connect with your customers like never before</p>
                            <a class="btn-solid-lg page-scroll rounded-pill shadow-sm" href="<?php echo base_url('home/sign_up'); ?>"><i class="fas fa-user-plus mr-1"></i> Sign Up Free</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo xit_load_images('images/header-teamwork.svg'); ?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center mb-4"><span class="badge badge-primary rounded-pill px-3 py-2">Trusted By Industry Leaders</span></h5>
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-1.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-2.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-3.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-4.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-5.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo xit_load_images('images/customer-logo-6.png'); ?>" alt="alternative">
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Services -->
    <div id="services" class="cards-1 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Powerful Features</h2>
                    <p class="p-heading p-large text-center">We provide cutting-edge messaging solutions to help your business grow and engage with customers</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo xit_load_images('images/services-icon-1.svg'); ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Multi-Channel Messaging</h4>
                            <p>Connect with your customers across multiple platforms including Facebook, WhatsApp, Instagram, and more</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo xit_load_images('images/services-icon-2.svg'); ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Automated Responses</h4>
                            <p>Set up intelligent chatbots and automated responses to engage with customers 24/7 without manual intervention</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo xit_load_images('images/services-icon-3.svg'); ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Analytics Dashboard</h4>
                            <p>Track engagement, response rates, and customer satisfaction with our comprehensive analytics tools</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Streamline Your Customer Communications</h2>
                        <p>Use <?php echo $this->config->item("product_short_name"); ?> to design and implement your customer engagement strategy. Our platform makes it easy to connect with customers across multiple channels.</p>
                        <a class="btn-solid-reg popup-with-move-anim rounded-pill" href="#details-lightbox-1">Learn More</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo xit_load_images('images/details-1-office-worker.svg'); ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo xit_load_images('images/details-2-office-team-work.svg'); ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Optimize Your Customer Engagement</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Our platform guides you through setting up effective messaging campaigns</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Increase customer satisfaction and retention with timely responses</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Analyze customer interactions to continuously improve your approach</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim rounded-pill" href="#details-lightbox-2">Learn More</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo xit_load_images('images/details-lightbox-1.svg'); ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr class="border-primary">
                    <h5>Core feature</h5>
                    <p>Our messaging platform will speed up your customer communications while offering more control and automation.</p>
                    <p>Need to manage multiple messaging channels? It's simple with <?php echo $this->config->item("product_short_name"); ?>.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll rounded-pill" href="#request">REQUEST DEMO</a> <a class="btn-outline-reg mfp-close as-button rounded-pill" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo xit_load_images('images/details-lightbox-2.svg'); ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr class="border-primary">
                    <h5>Core feature</h5>
                    <p>Our analytics tools help you understand customer behavior and optimize your messaging strategy.</p>
                    <p>Need insights into your customer interactions? It's all available with <?php echo $this->config->item("product_short_name"); ?>.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll rounded-pill" href="#request">REQUEST DEMO</a> <a class="btn-outline-reg mfp-close as-button rounded-pill" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->



    <?php if(!empty($pricing_table_data)) : ?>
    <!-- Pricing -->
    <div id="pricing" class="cards-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Flexible Pricing Plans</h2>
                    <p class="p-heading p-large text-center">We've prepared pricing plans for businesses of all sizes so you can get started right away</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        $i=0;
                        foreach($pricing_table_data as $pack) :    
                        $i++;
                        $featured = ($i == 2) ? 'featured-plan' : '';
                    ?>
                    <!-- Card-->
                    <div class="card shadow-lg <?php echo $featured; ?>">
                        <div class="card-body">
                            <div class="card-title"><?php echo $pack["package_name"]; ?></div>
                            <!-- <div class="card-subtitle">Just to see what can be achieved</div> -->
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency"><?php echo $curency_icon; ?></span><span class="value"><?php echo $pack["price"]?></span>
                                <div class="frequency"><?php echo $pack["validity"]?> <?php echo $this->lang->line("days"); ?></div>
                            </div>
                            <hr class="cell-divide-hr">
                            <div class="scrollit" style="height: 300px;overflow-y: auto;">
                                <ul class="list-unstyled li-space-lg">
                                    <?php 
                                        $module_ids=$pack["module_ids"];
                                        $monthly_limit=json_decode($pack["monthly_limit"],true);
                                        $module_names_array=$this->basic->execute_query('SELECT module_name,id FROM modules WHERE FIND_IN_SET(id,"'.$module_ids.'") > 0  ORDER BY module_name ASC');

                                        foreach ($module_names_array as $row) : 
                                    ?>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            <?php 
                                                $limit=0;
                                                $limit=$monthly_limit[$row["id"]];

                                                if($limit=="0") 
                                                    $limit2="<b>".$this->lang->line("unlimited")."</b>";
                                                else 
                                                    $limit2=$limit;

                                                if($row["id"]!="1" && $limit!="0") 
                                                    
                                                    $limit2="<b>".$limit2."/".$this->lang->line("month")."</b>";
                                                    echo $this->lang->line($row["module_name"]);

                                                if($row["id"]!="13" && $row["id"]!="14" && $row["id"]!="16") 
                                                    echo " : <b>". $limit2."</b>"."<br>";
                                                else 
                                                    echo "<br>";
                                            ?>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if($this->config->item('enable_signup_form') != '0') : ?>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll rounded-pill" href="<?php echo site_url('home/sign_up'); ?>"><i class="fas fa-user-plus mr-1"></i> Sign Up</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <?php endforeach; ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->
    <?php endif; ?>


    <!-- Video -->
    <?php if($this->config->item('display_video_block') == '1' || $this->config->item('promo_video') != '') : ?>
    <div class="basic-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">See <?php echo $this->config->item("product_short_name"); ?> In Action</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <?php 
                                $promo_video_link = $this->config->item('promo_video');
                            ?>
                            <a class="popup-youtube" href="<?php echo $promo_video_link; ?>" data-effect="fadeIn">
                                <img class="img-fluid" src="<?php echo xit_load_images('images/video-frame.svg'); ?>" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p class="text-center">This video demonstrates how <strong>leading businesses</strong> are using <?php echo $this->config->item("product_short_name"); ?> to transform their customer communications in today's competitive market</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->
    <?php endif; ?>


    <!-- Testimonials -->
    <div class="slider-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo xit_load_images('images/testimonials-2-men-talking.svg'); ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>What Our Customers Say</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                            <?php 
                                $customerReview = $this->config->item('customer_review');
                                $ct=0;
                                foreach($customerReview as $singleReview) : 
                                $ct++;
                                $original = $singleReview[2];
                                $base     = base_url();

                                if (substr($original, 0, 4) != 'http') {
                                    $img = $base.$original;
                                } else {
                                   $img = $original;
                                }

                            ?>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="<?php echo $img; ?>" alt="alternative">
                                        <div class="card-body bg-white shadow-sm rounded">
                                            <p class="testimonial-text">
                                                <?php echo $str = $singleReview[3]; ?>
                                            </p>
                                            <p class="testimonial-author"><?php echo $singleReview[0]; ?> - <?php echo $singleReview[1]; ?></p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            <?php endforeach;
                             ?>
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Meet Our Team</h2>
                    <p class="p-heading p-large text-center">Our team of specialized developers and customer success experts will help you implement the perfect messaging solution</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="