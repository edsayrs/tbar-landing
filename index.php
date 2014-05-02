<?php
                    if ($_POST) {
                      $email = $_POST['email'];
                      $valid = verifyEmail($email);

                      if ($valid) {
                        writeToFile($email);

                        $msg= 'Thanks for signing up!';
                      } else {
                        $msg = 'Please type a valid email address.';
                      }

                    }
                    function verifyEmail ($testString){
                      return(eregi("^([[:alnum:]]|_|\.|-)+@
                        ([[:alnum:]]|\.|-)+(\.)([a-z]{2, 4})$", $testString));
                    }
                    $dateNTime= date("F j Y H:i");

                    $form_data = $email . "\t" . $dateNTime . "\n";
                    $myPointer = fopen("../../../form_data/data.txt", "r+");
                    fputs ($myPointer, $fform_data);
                    fclose($myPointer);
                  }
                  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The T*Bar.com</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="flat-ui/bootstrap/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="common-files/css/animations.css">
        
        <!-- If you don't use any of these blocks just remove unnecessary CSS files -->
        <!-- blog -->
        <link rel="stylesheet" href="ui-kit/ui-kit-blog/css/style.css">
        <!-- contacts -->
        <link rel="stylesheet" href="ui-kit/ui-kit-contacts/css/style.css">
        <!-- content -->
        <link rel="stylesheet" href="ui-kit/ui-kit-content/css/style.css">
        <!-- crew -->
        <link rel="stylesheet" href="ui-kit/ui-kit-crew/css/style.css">
        <!-- footer -->
        <link rel="stylesheet" href="ui-kit/ui-kit-footer/css/style.css">
        <!-- header -->
        <link rel="stylesheet" href="ui-kit/ui-kit-header/css/style.css">


        <!--font-awesome-->
        <link rel="stylesheet" href="common-files/css/font-awesome-4.0.3/css/font-awesome.min.css">

    </head>

    <body>
        
        <div class="page-wrapper">
          <!-- header-14 -->
         <section class="header-14-sub">
        <div class="background">&nbsp;</div>
         <div class="container">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="header-14">
                <span class="fui-cmd"> </span>
                <div>COMING SOON</div>
              </div>
              <div class="hero-unit">
                <h1>Bred in Boulder</h1>
              </div>
              <h3>We’re building a uniquely foolproof site designed for men to shop for the women in their lives.</h3>
              <p>Sign up below for early access</p>
              <div class="row">
                <div class="subscribe-form col-sm-8 col-sm-offset-2">
                
                
                  <form id="tbar-form" action="index.php" method="post">
                    <div class="input-group">
                      <input id="email" name="email" type="text" class="form-control" value="<?php echo $email; ?>" />

                      
                      <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Notify Me</button>
                                </span>
                    </div>

                  </form>
                  <p class="msg"><?php echo $msg; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            <section class="crew-4">
        <div class="container">
          <h3><b>Our Founders</b><br/>
            Who Make it Possible</h3>
          <div class="members">
            <div class="member-wrapper">
              <div class="member">
                <div class="photo-wrapper">
                  <div class="photo">
                    <img src="common-files/img/crew/deb-caplin.jpg" alt="Deb Caplin">
                  </div>
                  <div class="overlay">
                    <a href="https://linkedin.com/pub/debra-liebowitz-caplin/5/bb0/449"><span class="fui-linkedin"></span></a>
                  </div>
                </div>
                <div class="info">
                  <div class="name">Deb Caplin</div>
                  <b>CEO</b> whos passion for lingerie is contagious.
                  <div class="contacts">
                  </div>
                </div>
              </div>
            </div>
            <div class="member-wrapper">
              <div class="member">
                <div class="photo-wrapper">
                  <div class="photo">
                    <img src="common-files/img/crew/emily-sayrs.jpg" alt="Emily Sayrs">
                  </div>
                  <div class="overlay">
                    <a href="https://twitter.com/emilysayrs"><span class="fui-twitter"></span></a>
                    <a href="https://linkedin.com/in/emilysayrs"><span class="fui-linkedin"></span></a>
                    <a href="https://github.com/edsayrs"><span class="fa fa-github fa-3x"></span></a>
                  </div>
                </div>
                <div class="info">
                  <div class="name">Emily Sayrs</div>
                  <b>Developer</b> who likes to break things just to see if she can fix them.
                  <div class="contacts">
                  </div>
                </div>
              </div>
            </div>
            <div class="member-wrapper">
              <div class="member">
                <div class="photo-wrapper">
                  <div class="photo">
                    <img src="common-files/img/crew/stephanie-maxwell.jpg" alt="Stephanie MAxwell">
                  </div>
                  <div class="overlay">
                    <a href="https://twitter.com/steffiemaxwell"><span class="fui-twitter"></span></a>
                    <a href="https://linkedin.com/in/stephaniekmaxwell/"><span class="fui-linkedin"></span></a>
                  </div>
                </div>
                <div class="info">
                  <div class="name">Stephanie Maxwell</div>
                  <b>Marketer</b> who makes it easy to connect with our customers.
                  <div class="contacts">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="common-files/js/jquery-1.10.2.min.js"></script>
        <script src="flat-ui/js/bootstrap.min.js"></script>
        <script src="common-files/js/modernizr.custom.js"></script>
        <script src="common-files/js/page-transitions.js"></script>
        <script src="common-files/js/startup-kit.js"></script>
    </body>
</html>