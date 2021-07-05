<?php

$MERCHANT_KEY = "value";
$SALT = "value";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

$action = '';
$posted = array();
if (!empty($_POST)) {
  //print_r($_POST);
  foreach ($_POST as $key => $value) {
    $posted[$key] = $value;
  }
}

$formError = 0;

if (empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';

// Hash Sequence
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
  if (
    empty($posted['key'])
    || empty($posted['txnid'])
    || empty($posted['amount'])
    || empty($posted['firstname'])
    || empty($posted['email'])
    || empty($posted['phone'])
    || empty($posted['productinfo'])
    || empty($posted['surl'])
    || empty($posted['furl'])
    || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
    foreach ($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif (!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Donate us - Baldibassa Gramin Unnayan Samity</title>
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
  <script>
    var hash = '<?php echo $hash ?>';

    function submitPayuForm() {
      if (hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>

<body onload="submitPayuForm()">
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
  <main id="payment" class="page payment-page">
    <section class="clean-block payment-form dark">
      <div class="container-fluid main-header-text" style="height: 400px;">
        <div class="top-header-container" style="height: 100%;">
          <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-end align-items-end justify-content-sm-end align-items-sm-end justify-content-md-end align-items-md-end justify-content-lg-end align-items-lg-end justify-content-xl-end align-items-xl-end header-cell">
            <div class="col header-title" style="padding-right: 60px;padding-left: 60px;">
              <h1 class="text-center d-flex d-xl-flex justify-content-end align-items-end justify-content-xl-end align-items-xl-center" style="color: #ffffff;font-size: 80px;letter-spacing: 2px;font-family: 'Expletus Sans', cursive;font-weight: bold;text-shadow: 0px 6px 8px #7d7d7d;">DONATE NOW</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="block-heading" style="margin-bottom: 0px;">
              <h2 class="text-left text-info" style="font-weight: bold;font-size: 38px;font-family: 'Expletus Sans', cursive;">Donate</h2>
            </div>
            <div class="row" style="border: 1px solid rgb(207,207,207);padding-top: 20px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px;">
              <div class="col-12">
                <div class="getting-started-info">
                  <p class="text-left" style="color: rgb(0,0,0);margin-bottom: 15px;"><strong>Baldiabassa Gramin Unnayan Samity</strong> has been working in India for 50 years, focusing on alleviating poverty and social exclusion. Your support will go a long way in helping us in our efforts. Donate now
                    to support every family get access to quality education, maternal and child health care services, sustainable livelihood opportunities, and relief and rehabilitation during disasters and support for disaster preparedness.
                    Baldiabassa Gramin Unnayan Samity is responding to cyclone Amphan in Odisha and West Bengal with shelter and hygiene kits. Save 50 percent on your tax by donating to Baldiabassa Gramin Unnayan Samity.<br></p>
                  <p class="text-left" style="color: rgb(0,0,0);margin-bottom: 15px;"><strong>GET INVOLVED! Contribute to making a difference today.</strong><br></p>
                </div><a class="btn btn-outline-primary btn-sm" role="button" href="support%20us.html">Join Us</a>
              </div>
              <div class="col text-center d-md-flex d-xl-flex justify-content-md-center align-items-md-start justify-content-xl-end align-items-xl-start" style="padding-top: 20px;padding-bottom: 20px;"><img class="img-thumbnail" src="assets/img/payment/indian-pastor-with-family.jpg" style="background-color: rgba(255,255,255,0);"></div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <div class="block-heading" style="margin-bottom: 0px;">
                  <h2 class="text-left text-info" style="font-weight: bold;font-size: 38px;font-family: 'Expletus Sans', cursive;">&nbsp;</h2>
                </div>
                <div class="row">
                  <div class="col" style="display: grid;justify-content: center;border-right-style: solid;">
                    <p class="text-left" style="color: rgb(0,0,0);letter-spacing: 1px;"><strong>For DOMESTIC</strong><br></p><a href="https://www.instamojo.com/@bgusindia/"><button class="btn btn-light switchhover1" type="button" style="background: rgb(59,153,224);letter-spacing: 2PX;">DONATE</button></a>
                  </div>
                  <div class="col" style="display: grid;justify-content: center;border-left-style: solid;">
                    <p class="text-left" style="color: rgb(0,0,0);letter-spacing: 1px;"><strong>For INTERNATIONAL</strong><br></p><a href="#"><button class="btn btn-light switchhover1" type="button" style="background: rgb(59,153,224);letter-spacing: 2PX;" data-modal-target="#modal">DONATE</button></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-12" style="margin-top: 16px;"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQy7aVZl1dop0QgYFNtRK7UIyMKa1nJv4&amp;q=Goharra%2CGoalpokher%2CNorth+Dinajpur%2Cindia&amp;zoom=13" width="100%" height="400" style="margin-top: 20px;"></iframe></div>
              <div class="col-xl-12" style="margin-top: 16px;">
                <div class="getting-started-info">
                  <p class="text-left" style="font-size: 23px;color: rgb(0,0,0);font-family: Raleway, sans-serif;margin-bottom: 15px;margin-top: 20px;">For More Details Contact :</p>
                </div>
                <div class="d-xl-flex justify-content-xl-start align-items-xl-center info" style="margin-bottom: 15px;font-family: Raleway, sans-serif;"><i class="fa fa-phone footer-contacts-icon" style="background: rgb(59,153,224);margin-top: 0px;margin-bottom: 0px;"></i>
                  <p class="d-inline-block footer-center-info email text-left" style="margin: 0px;font-family: Raleway, sans-serif;">+91&nbsp;&nbsp;9734196446<br></p>
                </div>
                <div class="d-xl-flex justify-content-xl-start align-items-xl-center info" style="margin-bottom: 15px;"><i class="fa fa-envelope footer-contacts-icon" style="background: rgb(59,153,224);margin-top: 0px;margin-bottom: 0px;"></i>
                  <p class="d-inline-block footer-center-info email text-left" style="margin: 0px;font-family: Raleway, sans-serif;"><a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfsczgfdlqpQMhcjWDgWbhLxfcKpwjDCxQtTTJFLJlHJBMdktZzCpqqMWVVNQGjghLvwgq">BaldibassaGraminunnayansamity@outlook.com</a><br></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div id="modal" class="modal" data-model-backdrop="true" data-show-on="click" data-model-delay="false" data-model-duration="false">
    <div id="new1" class="row container">
      <button class="btn_new"><a id="button" href="#" data-dismiss="modal" data-close-button class="close-button"><strong>close</strong></a></button>
      <div class="col-lg-12">
        <div class="bg-white rounded-lg shadow-sm pb-5 pt-3 pr-5 pl-5">
          <?php if ($formError) { ?>
            <span style="color:red">Please fill all mandatory fields.</span>
            <br />
          <?php } ?>
          <span class="req">* Required</span>
          <!-- Donate form content -->
          <div class="tab-content">
            <!-- Donate info-->
            <div id="nav-tab-card" class="tab-pane fade show active">
              <form role="form" action="<?php echo $action; ?>" method="post" name="payuForm">
                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                <input type="hidden" name="hash" value="<?php echo $hash ?>" />
                <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                <div class="form-group">
                  <label for="username">Amount<span>*</span></label>
                  <input name="amount" placeholder="Donation" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Full name<span>*</span></label>
                  <input id="firstname" type="text" name="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Full Name" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Email<span>*</span></label>
                  <input id="email" type="text" name="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email Address" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Contact Number<span>*</span></label>
                  <input id="phone" type="tel" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Contact Number" required class="form-control" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits">
                </div>
                <div class="form-group">
                  <label for="username">Description<span>*</span></label>
                  <textarea name="productinfo" type="text" placeholder="Description" required class="form-control" row=5 cols=10 style="min-height:100px; max-height:500px;"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
                </div>
                <div>
                  <input type="hidden" name="surl" value="http://localhost\myfiles\BGUS\payment_success.php" size="64" />
                </div>
                <div>
                  <input type="hidden" name="furl" value="http://localhost\myfiles\BGUS\payment_fail.php" size="64" />
                </div>
                <div>
                  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                </div>

                <?php if (!$hash) { ?>
                  <button type="submit" value="submit" class="subscribe btn btn-block rounded-pill shadow-sm"> Confirm </button>
                <?php } ?>
              </form>
            </div>
            <!-- End -->
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>

  <div id="overlay"></div>
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