<?php include 'header.php'; ?>
<?php include_once('contact-mail.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/fontawesome/css/all.min.css"> <!-- Ensure FontAwesome is linked -->
<style>
    .large-social-icons .fa {
    padding: 20px;
    font-size: 30px; /* Increase the font size */
    width: 70px; /* Ensure width and height are the same */
    height: 70px; /* Explicitly set the height */
    text-align: center;
    text-decoration: none;
    border-radius: 50%; /* Ensure the icons are circular */
    margin: 0 ; /* Adjust spacing between icons */
    display: inline-block; /* Ensure the icons are inline-block */
    transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition for color and transform */
}

.large-social-icons .fa:hover {
    opacity: 0.7;
    color: #555; /* Change the color on hover */
    transform: scale(1.1); /* Slightly enlarge the icon on hover */
}

/* Set a specific color for each brand */

/* Facebook */
.large-social-icons .fa-facebook {
    background: #3B5998;
    color: white;
}

/* Twitter */
.large-social-icons .fa-twitter {
    background: #55ACEE;
    color: white;
}

/* Instagram */
.large-social-icons .fa-instagram {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    color: white;
}

/* YouTube */
.large-social-icons .fa-youtube {
    background: #FF0000;
    color: white;
}

/* LinkedIn */
.large-social-icons .fa-linkedin {
    background: #0077B5;
    color: white;
}

</style>
<!-- Start Page Header -->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="index.php"><span class="fa fa-home"></span> Home</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base">Contact us</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Header -->

<!-- Start Contact Page -->
<section class="contact-page">
    <div class="contact-page__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__top-content">
                        <div class="contact-page__top-content-top">
                            <h2>Get in Touch</h2>
                            <p>A vast majority of the app marketers mainly concentrate on post-launch app marketing techniques and measures while completely missing pre-launch campaign. This prevents the </p>
                        </div>
                        <div class="contact-page__top-content-bottom">
                            <h2>Contact Info</h2>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon-pin"></span></div>
                                        <div class="content-box">
                                            <h4>Address</h4>
                                            <p>WorkEasy Co-Working Space 2nd Floor,Above Jaddu's restaurant, 
                                                kalawad Road, Rajkot, Gujarat, India</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon-phone-call"></span></div>
                                        <div class="content-box">
                                            <h4>Phone</h4>
                                            <p><a href="tel:9979910101">+91 - 997 991 0101</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon-email"></span></div>
                                        <div class="content-box">
                                            <h4>Email</h4>
                                            <p><a href="pavakdunadkat@gmail.com">pavakdunadkat@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class="contact-page__top-content-bottom">
                                        <h4><br>Connect with ME</h4>
                                        <!-- Social Media Icons -->
                                        <div class="large-social-icons">
                                            <br>
                                            <a href="https://www.facebook.com/pavakunadkat/" class="fa fa-facebook"></a>
                                            <a href="https://x.com/pavakunadkat" class="fa fa-twitter"></a>
                                            <a href="https://www.instagram.com/pavak.unadkat/?hl=en" class="fa fa-instagram"></a>
                                            <a href="https://www.youtube.com/@pavak.unadkat?app=desktop" class="fa fa-youtube"></a>
                                            <a href="https://in.linkedin.com/in/pavakunadkat" class="fa fa-linkedin"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3379.818427513445!2d70.75460681680632!3d22.273805662140347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959d322969ef6b9%3A0xd85f069decfc51eb!2sWorkEasy%20Coworking%20Space%20(Kalawad%20Road%20Centre)!5e0!3m2!1sen!2sin!4v1717502755715!5m2!1sen!2sin" class="contact-page-google-map__one" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page__bottom">
        <!-- Start Contact Two -->
        <div class="contact-page__bottom-form">
            <div class="container">
                <div class="contact-page__bottom-form-inner">
                    <div class="title-box">
                        <h2>Let’s Get in Touch</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <div class="contact-page__bottom-form-inner-box">
                    <form class="contact-page__form" action="send_mail.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name*" id="fullname" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Your Email*" id="email_address" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="tel" maxlength="10" placeholder="Phone*" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject*" id="subject" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Write Message*" id="message" required></textarea>
                                    </div>
                                    <div class="contact-page__btn">
                                        <button class="thm-btn" name="submit" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Two -->
    </div>
</section>
<!-- End Contact Page -->

<?php include 'footer.php'; ?>
