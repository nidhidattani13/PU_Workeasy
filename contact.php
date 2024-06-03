<?php
include 'header.php';
?>
        <!--Start Page Header-->
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
        <!--End Page Header-->

        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="contact-page__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__top-content">
                                <div class="contact-page__top-content-top">
                                    <h2>Get in Touch</h2>
                                    <p>A vast majority of the app marketers mainly concent post-launch app marketing
                                        techniques and measures while completely missing pre-launch campaign. This
                                        prevents the </p>
                                </div>

                                <div class="contact-page__top-content-bottom">
                                    <h2>Contact Info</h2>
                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-pin"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Address</h4>
                                                    <p>254, North City, Bulex Center, New York</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-phone-call"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Phone</h4>
                                                    <p><a href="tel:123456789">09 (354) 587 874</a> or <a
                                                            href="tel:123456789">10 (698) 852 741</a></p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-email"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Email</h4>
                                                    <p><a href="mailto:yourmail@email.com">info@example.com</a>
                                                        or <a href="mailto:yourmail@email.com">info@example.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__google-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="contact-page-google-map__one" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-page__bottom">
                <!--Start Contact Two-->
                <div class="contact-page__bottom-form">
                    <div class="container">
                        <div class="contact-page__bottom-form-inner">
                            <div class="title-box">
                                <h2>Let’s Get in Touch</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="contact-page__bottom-form-inner-box">
                                <form action="assets/inc/sendemail.php"
                                    class="contact-page__form contact-form-validated">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Your Name*" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Your Email*" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Phone*" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Subject*" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <textarea name="message" placeholder="Write Message*"></textarea>
                                            </div>
                                            <div class="contact-page__btn">
                                                <button class="thm-btn" type="submit"
                                                    data-loading-text="Please wait...">
                                                    <span class="txt">
                                                        Send Message
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Contact Two-->
            </div>
        </section>
        <!--End Contact Page-->


        <?php
        include 'footer.php';
        ?>