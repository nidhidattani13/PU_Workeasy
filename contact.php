
<?php include_once('contact-mail.php'); ?>
<?php
include 'header.php';
<<<<<<< HEAD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response_message = "Please complete the form and try again.";
        $response_code = 400;
    } else {
        // Set the recipient email address.
        $recipient = "dattaninidhi37@gmail.com";
        $email_subject = "New contact from $name: $subject";
        $email_content = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message\n";
        $email_headers = "From: $name <$email>";

        // Send the email to the recipient
        if (mail($recipient, $email_subject, $email_content, $email_headers)) {
            // Send a copy to the user
            $copy_subject = "Copy of your contact form submission: $subject";
            $copy_content = "Dear $name,\n\nThank you for reaching out to us. Here is a copy of your message:\n\n$email_content";
            $copy_headers = "From: your_email@example.com";

            if (mail($email, $copy_subject, $copy_content, $copy_headers)) {
                $response_message = "Thank you! Your message has been sent and a copy has been emailed to you.";
                $response_code = 200;
            } else {
                $response_message = "Thank you! Your message has been sent, but we couldn't send a copy to your email.";
                $response_code = 200;
            }
        } else {
            $response_message = "Oops! Something went wrong, we couldn't send your message.";
            $response_code = 500;
        }
    }
}
=======
>>>>>>> 5be8468cd6093b4564e761341c2279583cafa99f
?>

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
                                            <p>2nd Floor, Cross Roads, Kalavad Rd,<br>above Jaddus Food Field Restaurant,<br>near RPJ Hotel, Jai Bhimnagar,<br>Nana Mava, Rajkot, Gujarat 360001</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon-phone-call"></span></div>
                                        <div class="content-box">
                                            <h4>Phone</h4>
                                            <p><a href="tel:123456789">09 (354) 587 874</a> or <a href="tel:123456789">10 (698) 852 741</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon-email"></span></div>
                                        <div class="content-box">
                                            <h4>Email</h4>
<<<<<<< HEAD
                                            <p><a href="mailto:info@example.com">info@example.com</a> or <a href="mailto:info@example.com">info@example.com</a></p>
=======
                                            <p><a href="mailto:pavakdunadkat@gmail.com">pavakdunadkat@gmail.com</a>
                                            </p>
>>>>>>> 5be8468cd6093b4564e761341c2279583cafa99f
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
                        <form class="contact-page__form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name*" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Your Email*" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone*" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject*" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Write Message*" required></textarea>
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

<?php
include 'footer.php';
?>
