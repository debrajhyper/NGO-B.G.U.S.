<?php
$message_sent = false;
//echo"<pre><br><br><br><br>";
//print_r($_POST);
//echo"</pre>";

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $userCall_time = $_POST['call_time'];
        $userComments = $_POST['comments'];

        $to = "baldibassagraminunnayansamity@gmail.com";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Contact Number: " . $userPhone . "\r\n";
        $body .= "Call Time: " . $userCall_time . "\r\n";
        $body .= "Message: " . $userComments . "\r\n";

        mail($to, $userComments, $body);

        $message_sent = true;
    } else {
        $invalid_class_name = "form-invalid";
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact us - Baldibassa Gramin Unnayan Samity</title>
    <meta name="theme-color" content="rgba(255,255,255,0)">
    <meta property="og:image" content="assets/img/icon/logo.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Baldibassa Gramin Unnayan Samity">
    <meta name="author" content="Baldibassa Gramin Unnayan Samity">
    <meta name="keywords" content="NGO,Baldibassa Gramin Unnayan Samity,North Dinajpur,West Bengal,ngo,Non-governmental organization,BaldibassaGraminunnayansamity@outlook.com,Baldiabassa, Goharra, Goalpokher, North Dinajpur, 733208">
    <meta name="description" content="Baldibassa Gramin Unnayan Samity is a Non-governmental organization in Baldiabassa, Goharra, Goalpokher, North Dinajpur, 733208">
    <meta name="twitter:image" content="assets/img/icon/twitter_profile_image.png">
    <meta name="twitter:description" content="Baldibassa Gramin Unnayan Samity is a Non-governmental organization in Baldiabassa, Goharra, Goalpokher, North Dinajpur, 733208">
    <link rel="icon" type="image/jpeg" sizes="791x787" href="assets/img/icon/logo_transparent.jpg">
    <link rel="icon" type="image/png" sizes="1200x1200" href="assets/img/icon/logo_transparent.png">
    <link rel="icon" type="image/png" sizes="1200x1200" href="assets/img/icon/logo_transparent.png">
    <link rel="icon" type="image/png" sizes="1200x1200" href="assets/img/icon/logo_transparent.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Expletus+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway+Dots">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Beautiful-Success-Note-Callout.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Big-Title-With-Nice-Text-Shadow.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-74.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Button-Hover-Animate.css">
    <link rel="stylesheet" href="assets/css/Card-Group-Classic.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/Central-Align-Logo-Header-With-Nav.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Covid-Safety.css">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/News-article-for-homepage-by-Ikbendiederiknl.css">
    <link rel="stylesheet" href="assets/css/Paralax-Box.css">
    <link rel="stylesheet" href="assets/css/popup-form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Quote-Card.css">
    <link rel="stylesheet" href="assets/css/serie-card-responsive.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Timeline.css">

    <style>
        .form-invalid {
            outline: 2px solid red !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" id="mainNav" style="padding-left: 30px;padding-right: 30px;">
        <div class="container-fluid"><img class="brand-image" src="assets/img/icon/logo_transparent.jpg" style="height: 40px;margin-right: 5px;"><a class="navbar-brand logo" href="index.html" style="font-size: 20px;font-weight: bold;color: rgb(59,153,224);font-family: 'Expletus Sans', cursive;letter-spacing: 1px;">Baldiabassa Gramin Unnayan Samity</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="/*margin-right: -30px;*/">
                <ul class="nav navbar-nav text-left d-xl-flex justify-content-xl-center" style="margin-right: 10px;">
                    <li class="nav-item" style="padding: 0px;"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
                    <li class="nav-item" style="padding: 0px;"><a class="nav-link js-scroll-trigger" href="about.html">about</a></li>
                    <li class="nav-item" style="padding: 0px;"><a class="nav-link js-scroll-trigger" href="our%20work%20-%20navlink.html">our work</a></li>
                    <li class="nav-item" style="padding: 0px;"><a class="nav-link js-scroll-trigger" href="events%20-%20lockdown.html">events</a></li>
                    <li class="nav-item" style="padding: 0px;"><a class="nav-link js-scroll-trigger" href="support%20us.html">Support Us</a></li>
                </ul><a class="btn donate-btn" role="button" id="btn-donate" style="color: #ffffff;background-color: rgb(251,31,31);letter-spacing: 2px;font-weight: bold;transition: background-color .2s ease-in;" href="payment.php"><img src="assets/img/icon/icons8-donate-240.png" style="height: 25px;margin-right: 5px;">DONATE</a>
            </div>
        </div>
    </nav>
    <main id="contact-us" class="page">
        <section class="clean-block slider dark" style="padding-bottom: 50px;">
            <div class="container-fluid main-header-text" style="height: 400px;">
                <div class="top-header-container" style="height: 100%;">
                    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-end align-items-end justify-content-sm-end align-items-sm-end justify-content-md-end align-items-md-end justify-content-lg-end align-items-lg-end justify-content-xl-end align-items-xl-end header-cell">
                        <div class="col header-title" style="padding-right: 60px;padding-left: 60px;">
                            <h1 class="text-center d-flex d-xl-flex justify-content-end align-items-end justify-content-xl-end align-items-xl-center" style="color: #ffffff;font-size: 80px;letter-spacing: 2px;font-family: 'Expletus Sans', cursive;font-weight: bold;text-shadow: 0px 6px 8px #7d7d7d;">CONTACT US</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-top: 50px;">
                <div class="container">
                    <h1 style="color: rgb(48,150,228);">Contact Information</h1>
                    <hr>
                    <form id="contactForm" action="contact_us.php" method="POST">
                        <!--<input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com">
                    <input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form">
                    <input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>-->
                        <div class="form-row">
                            <div class="col-12 col-md-6" id="message" style="padding-right: 20PX;padding-left: 20PX;">
                                <?php
                                if ($message_sent) :
                                ?>
                                    <h3>Thanks, we'll be in touch</h3>
                                <?php
                                else :
                                ?>
                                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                    </h2>
                                    <div class="form-group">
                                        <label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                            </div>
                                            <input class="form-control " type="text" id="from-name" name="name" required="" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="from-email">Email</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                            </div>
                                            <input class="form-control <?= $invalid_class_name ?? "" ?>" type="text" id="from-email" name="email" required="" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="from-phone">Phone</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="from-calltime">Best Time to Call</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                    <select class="form-control" id="from-calltime" name="call_time">
                                                        <optgroup label="Best Time to Call">
                                                            <option value="Morning" selected="">Morning</option>
                                                            <option value="Afternoon">Afternoon</option>
                                                            <option value="Evening">Evening</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="from-comments">Comments</label>
                                        <textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col">
                                                <button class="btn btn-block" type="reset" style="color: rgb(255,255,255);background: #3096e4;"><i class="fa fa-undo"></i> Reset</button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-block" type="submit" style="background: #3096e4;color: rgb(255,255,255);">Submit <i class="fa fa-chevron-circle-right"></i></button>
                                                <?php if (isset($msg)) {
                                                    echo $msg;
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-flex d-md-none">
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="col-12 col-md-6" style="padding-right: 20PX;padding-left: 20PX;">
                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="static-map"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQy7aVZl1dop0QgYFNtRK7UIyMKa1nJv4&amp;q=Goharra%2CGoalpokher%2CNorth+Dinajpur%2Cindia&amp;zoom=13" width="100%" height="400" style="height: 285px;"></iframe></div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                        <div><span style="font-size: 15px;color: rgb(118,118,118);"><strong>Baldiabassa Gramin Unnayan Samity</strong><br></span></div>
                                        <div><a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfsczgfdlqpQMhcjWDgWbhLxfcKpwjDCxQtTTJFLJlHJBMdktZzCpqqMWVVNQGjghLvwgq"><span data-toggle="tooltip" data-bs-tooltip="" style="font-size: 12px;color: rgb(118,118,118);" title="email">BaldibassaGraminunnayansamity@gmail.com</span></a></div>
                                        <div><a href="index.html"><span data-toggle="tooltip" data-bs-tooltip="" style="color: rgb(118,118,118);font-size: 12px;" title="website">www.bgus.com</span></a></div>
                                        <hr class="d-sm-none d-md-block d-lg-none">
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-building"></i> Our Address</h2>
                                        <div><span style="color: rgb(118,118,118);">Baldiabassa, Goharra, Goalpokher, North Dinajpur<br></span></div>
                                        <div><span style="color: rgb(118,118,118);">PIN :&nbsp;733208<br></span></div>
                                        <div style="color: rgb(118,118,118);"><span data-toggle="tooltip" data-bs-tooltip="" title="Office Phone Number">P.No - 9734196446<br></span></div>
                                        <hr class="d-sm-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div id="successfail"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6" id="message">
                                            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                            </h2>
                                            <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name" name="name" required="" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email" name="email" required="" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" id="from-calltime" name="call time">
                                                                <optgroup label="Best Time to Call">
                                                                    <option value="Morning" selected="">Morning</option>
                                                                    <option value="Afternoon">Afternoon</option>
                                                                    <option value="Evening">Evening</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                    <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                </div>
                                            </div>
                                            <hr class="d-flex d-md-none">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                    <div><span><strong>Name</strong></span></div>
                                                    <div><span>email@awebsite.com</span></div>
                                                    <div><span>www.awebsite.com</span></div>
                                                    <hr class="d-sm-none d-md-block d-lg-none">
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                    <div><span><strong>Office Name</strong></span></div>
                                                    <div><span>55 Icannot Dr</span></div>
                                                    <div><span>Daytone Beach, FL 85150</span></div>
                                                    <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                    <hr class="d-sm-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" style="padding-top: 40px;padding-bottom: 40px;padding-right: 80px;padding-left: 80px;margin-top: 0px;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3 style="font-family: 'Expletus Sans', cursive;"><a href="#" style="font-family: 'Expletus Sans', cursive;font-weight: bold;color: rgb(59,153,224);letter-spacing: 1px;font-size: 18px;"><strong>Baldiabassa Gramin Unnayan Samity</strong><br></a></h3>
                <p class="links" style="font-size: 13px;color: rgb(255,255,255);"><a href="index.html">Home</a><strong> · </strong><a href="our%20work%20-%20view%20all.html">Projects</a><strong> · </strong><a href="events%20-%20lockdown.html">Events</a><strong> · </strong><a href="about.html">About</a><strong> · </strong>
                    <a href="payment.php">Donation</a><strong> · </strong><a href="contact_us.php">Contact Us</a>
                </p>
                <p class="company-name">© 2020 Baldiabassa Gramin Unnayan Samity. All Rights Reserved | |&nbsp;<a href="https://www.linkedin.com/in/debraj-karmakar-275570199/">Website Designing</a> By Debraj Karmakar.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p style="font-size: 15px;"><span class="new-line-span">Baldiabassa, Goharra, Goalpokher<br></span>North Dinajpur, West Bengal, 733208<br></p>
                </div>
                <div class="info"><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"><br>+91&nbsp;&nbsp;9734196446<br></p>
                </div>
                <div class="info"><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfsczgfdlqpQMhcjWDgWbhLxfcKpwjDCxQtTTJFLJlHJBMdktZzCpqqMWVVNQGjghLvwgq" target="_blank" style="font-size: 11px;"><br>BaldibassaGraminunnayansamity@outlook.com<br></a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>About Us</h4>
                <p>Baldiabassa Gramin Unnayan Samity is an NGO inIndia directly benefittingover 15,00 families every year,through more than 50 live welfareprojects on education, healthcare,livelihood and women empowerment,in over remote villagesand slums
                    across North Dinajpur.<br></p>
                <div class="d-sm-flex social-links social-icons"><a href="https://www.facebook.com/BaldibassaGraminunnayansamity-114582407040998/" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://mobile.twitter.com/baldibassa" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/baldibassagraminunnayansamity/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/404.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/Paralax-Box.js"></script>
    <script src="assets/js/popup.js"></script>
</body>

</html>