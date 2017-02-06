<?php
/**
 * Created by PhpStorm.
 * User: anasabufarraj
 * Date: 21/12/2016
 * Time: 12:06 PM
 */
$major = 1;
$minor = 0;
$patch = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Goyoom: Arabic Online Courses, Free Tutorials, Training, Class</title>
  <meta name="keywords" content="education, learning, webinar, free tutorials" />
  <meta name="description" content="Learn design applications in Arabic and latest technology. Our goal is to achieve a high-level educational content for designers and developers in the Middle-east and other Arabic speaking countries. Join today to get unlimited access to hundreds of courses and free video tutorials." />
  <meta name="author" content="Anas Abu Farraj" />
  <meta name="application-name" content="Goyoom Education" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Open graph tags to customize link previews. Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url" content="http://www.goyoom.com/goyoomed" />
  <meta property="og:type" content="www.goyoom.com" />
  <meta property="og:title" content="Goyoom: Arabic Online Courses, Free Tutorials, Training, Class" />
  <meta property="og:description" content="Learn design applications in Arabic and latest technology. Our goal is to achieve a high-level educational content for designers and developers in the Middle-east and other Arabic speaking countries. Join today to get unlimited access to hundreds of courses and free video tutorials." />
  <meta property="og:image" content="http://www.goyoom.com/img/logo_og.png" />
  <!-- Bootstrap Scripts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <!-- Favicons -->
  <link rel="apple-touch-on" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194" />
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192" />
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
  <link rel="manifest" href="/manifest.json" />
  <link rel="mask-icon" href="/safari-pinned-tab.svg" content="#11c1f3" />
  <meta name="apple-mobile-web-app-title" content="Goyoom" />
  <meta name="application-name" content="Goyoom" />
  <meta name="msapplication-TileColor" content="#11c1f3" />
  <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
  <meta name="theme-color" content="#11c1f3" />
  <!-- Google Arabic Font -->
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" />
  <!-- Additional Styles -->
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Fontawesome Scripts -->
  <script src="https://use.fontawesome.com/1c1b4f1cf5.js"></script>
</head>

<body class="body-index">
  <!-- Facebook Application ID -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1819341941612607',
        xfbml      : true,
        version    : 'v2.8'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Twitter SDK -->
  <script>window.twttr = (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
              t = window.twttr || {};
          if (d.getElementById(id)) return t;
          js = d.createElement(s);
          js.id = id;
          js.src = "https://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);

          t._e = [];
          t.ready = function(f) {
              t._e.push(f);
          };

          return t;
      }(document, "script", "twitter-wjs"));
  </script>

  <header id="home"><!-- anchor -->
    <div class="container-fluid">
      <div class="row">
        <div class="sub-header">
          <div class="col-xs-12 col-md-10 col-md-offset-1">
            <a href="index.php"><img class="header-img" src="img/logo_header.svg" alt="Goyoom Logo"></a>
            <!-- Header Buttons: shown if user NOT logged in -->
            <div class="pull-right padding-lg">
              <a class="btn btn-hidden pull-right margin-bottom smooth-hover" href="login.php" role="button">&nbsp;Log In&nbsp;</a>
              <a class="btn btn-sm btn-primary-dark uppercase smooth-hover" href="plan.php" role="button">&nbsp;Start Now&nbsp;</a>
              <br>
              <a class="pull-right header-link" href="reactivate.php" role="button">Reactivate Account</a>
            </div>
            <!-- Welcome Tag: shown if user IS logged in -->
            <div class="header-text pull-right" hidden>
              <span>Welcome, Anas&nbsp;</span>
              <div class="btn-group">
                <a type="button" class="header-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fa fa-lg fa-user-circle-o" aria-hidden="true"></i>&nbsp;</a>
                <ul class="dropdown-menu dropdown-menu-header">
                  <li class="account-menu-header">Learning Plan</li>
                  <li class="account-status text-left margin-bottom" hidden>Basic Account</li>
                  <li class="account-status text-left margin-bottom">Standard Account</li>
                  <li class="account-status text-left margin-bottom" hidden>Ultimate Account</li>
                  
                  <!-- Upgrade Button displayed when: user is registered as BASIC or STANDARD -->
                  <li><a class="btn btn-account-menu uppercase smooth-hover" href="upgrade.php" role="button">Upgrade</a></li>
                  
                  <!-- My Account Menu -->
                  <li role="separator" class="divider"></li>
                  <li><a class="account-menu-item" href="profile.php">My Profile</a></li>
                  <li><a class="account-menu-item" href="profile.php">Playlist</a></li>
                  <li><a class="account-menu-item" href="profile.php">Progress</a></li>
                  <li><a class="account-menu-item" href="profile.php">Certificates</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a class="account-menu-item" href="">Logout</a></li>
                </ul>
              </div><!--/.btn-group-->
            </div><!--/.header-text-->
            <!-- Reactivate Link -->
          </div><!--/.col-->
        </div><!--/.sub-header-->

        <!-- Navbar -->
        <nav class="navbar navbar-default" role="navigation">
          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only text-emboss">Toggle navigation</span>
                <span class="icon-bar" aria-hidden="true"></span>
                <span class="icon-bar" aria-hidden="true"></span>
                <span class="icon-bar" aria-hidden="true"></span>
              </button>
              <span class="pull-right nav-item uppercase text-emboss hidden-sm hidden-md hidden-lg">Menu</span>
              <a class="navbar-brand text-emboss scale-little" href="#" data-toggle="tooltip" data-placement="bottom" title="Sorry for inconvenience. We're still working on the Arabic pages">Goyoom<span class="lead text-emboss small inactive">&nbsp; | &nbsp;In Arabic</span></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="text-center text-emboss scale-little smooth" href="index.php#who">Who are we?</a></li>
                <li><a class="text-center text-emboss scale-little smooth" href="index.php#learning">Learning Paths</a></li>
                <li><a class="text-center text-emboss scale-little smooth" href="index.php#team">Our Team</a></li>
                <li><a class="text-center text-emboss scale-little smooth" href="index.php#contact">Contact Us</a></li>
                <li><a class="text-center text-emboss scale-little smooth" href="content.php"><i class="fa fa-th-large" aria-hidden="true">&nbsp;</i>&nbsp;Browse Courses</a></li>
              </ul>
            </div>
          </div>
        </nav><!--/.navbar-->
      </div><!--/.row -->
    </div><!--/.container -->
  </header>

  <!-- carousel 1600x820px
  <!-- Black Gradient Layer -->
  <!-- Progressive 30% Web JPEG -->
  <div class="container-fluid">
    <div class="row">
      <div class="carousel slide margin-bottom" id="featured" data-ride="carousel"><!-- indicators -->
        <ol class="carousel-indicators">
         <li class="active" data-target="#featured" data-slide-to="0"></li>
         <li data-target="#featured" data-slide-to="1"></li>
         <li data-target="#featured" data-slide-to="2"></li>
         <li data-target="#featured" data-slide-to="3"></li>
         <li data-target="#featured" data-slide-to="4"></li>
        </ol>
        <!-- inner -->
        <div class="carousel-inner">
          <div class="item active fix_carousel_img">
            <img src="img/caro_01.jpg" alt="carousel image">
            <div class="carousel-caption">
              <h3 class="text-390">Graphic Design and User Experience Design</h3>
              <h4 class="lead text-390">Become a Designer in 2017</h4>
            </div>
          </div>
          <div class="item">
            <img src="img/caro_02.jpg" alt="carousel image">
            <div class="carousel-caption">
              <h3 class="text-390">Start Learning Web Development</h3>
              <h3 class="text-390">Say:&nbsp;<span class="inconsolata">"Hello, world!"</span></h3>
            </div>
          </div>
          <div class="item">
            <img src="img/caro_03.jpg" alt="carousel image">
            <div class="carousel-caption">
              <h3 class="text-390">Learn Character Animation</h3>
              <h4 class="lead text-390">And Hollywood Films Direction</h4>
            </div>
          </div>
          <div class="item">
            <img src="img/caro_04.jpg" alt="carousel image">
            <div class="carousel-caption">
              <h3 class="text-390">Learn From Anywhere</h3>
              <h4 class="lead text-390">Record Lessons will be available for 30 Days</h4>
            </div>
          </div>
          <div class="item">
            <img src="img/caro_05.jpg" alt="carousel image">
            <div class="carousel-caption">
              <h3 class="text-390">Brothers Discount</h3>
              <h4 class="lead text-390">Enjoy the Permanent 17% Discount for Brothers</h4>
            </div>
          </div>
        </div>
        <div id="who"></div><!-- anchor -->
        <!-- navigator chevrons -->
        <a class="carousel-control left" href="#featured" data-slide="prev" role="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
        <a class="carousel-control right" href="#featured" data-slide="next" role="button"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
      </div>
    </div><!--/.row -->
  </div><!--/.container -->

  <!-- Who are we -->
  <div class="container-fluid text-emboss container-box margin-top-negative">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
        <section class="text-center margin-section padding-lg lead">
          <i class="fa fa-2x fa-bookmark-o inactive" aria-hidden="true"></i>
          <h3 class="uppercase">Who are we?</h3>
          <hr>
          <p>Goyoom is an educational and cultural establishment found in March 2016. Our goal is to bridge the gap between user experience designers and developers with high-level educational content in the Middle-east region and other Arabic speaking countries.</p><br>
          <p>We're new but growing..</p>
          <a class="twitter-follow-button" href="https://twitter.com/goyoomed" data-size="default" data-show-count="true" data-show-screen-name="true">Follow @goyoomed</a>
        </section>
        <div class="text-center">
          <i class="fa fa-th-large fa-3x color-calm_dark" aria-hidden="true"></i><br>
          <a class="btn" href="" role="button">
            <h4 class="lead">Browse Courses</h4>
          </a>
          <div id="learning"></div><!-- anchor -->
        </div>
      </div><!--/.col-->
    </div><!--/.row -->
  </div><!--/.container -->

  <div class="container">
    <div class="row">
      <div class="text-center col-xs-12">
        <div class="text-center margin-section">
          <h3 class="uppercase text-emboss">Certificated Learning Tracks</h3>
          <p class="lead small uppercase text-emboss">Opportunities to shift your skills for lifelong job</p>

          <!-- Choose a Learning Plans -->
          <div class="container margin-bottom">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="table table-responsive">
                  <div class="panel-heading">
                    <h3 class="uppercase lead text-center text-emboss">Choose a Learning Plan</h3>
                  </div>
                  <table class="table text-center lead small">
                    <thead>
                    <tr>
                      <th scope="row"></th>
                      <th class="text-center">
                        <a class="btn btn-sm btn-fixed btn-default margin-bottom margin-top smooth-hover" href="register.php" role="button">Basic</a><br>
                        <div class="form-group margin-bottom-0">
                          <span class="lead medium padding-sm cursor-pointer">Limited Access</span>
                        </div>
                      </th>
                      <th class="text-center">
                        <a class="btn btn-sm btn-fixed btn-info margin-bottom margin-top smooth-hover" href="register.php" role="button">Standard</a><br>
                        <div class="form-group margin-bottom-0">
                          <span class="lead medium padding-sm cursor-pointer">Online Learning</span>
                        </div>
                      </th>
                      <th class="text-center">
                        <a class="btn btn-sm btn-fixed btn-success margin-bottom margin-top smooth-hover" href="register.php" role="button">Ultimate</a><br>
                        <div class="form-group margin-bottom-0">
                          <span class="lead medium padding-sm cursor-pointer">Unlimited Privileges</span>
                        </div>
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left">&nbsp;Unlimited Access to Free Tutorials&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Free tutorials and tips will be recorded and added regularly to the website including tips and important information we like to share."></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="text-left">&nbsp;Unlimited Access to All Courses&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Unlimited access to all available courses in every learning track."></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="text-left">&nbsp;Technical Software Support&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Technical software support is limited to software or third-part plug-in installation and setup for those software taught in our courses."></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="text-left">&nbsp;Challenges and Quizzes&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Regular challenges are being given for students to work and practice, plus a 15 minutes quiz at the end of each lesson."></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="text-left">&nbsp;Certificate of Completion&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Printed certificate of completion will be given for each ultimate user upon passing a final exam. Standard users could claim for printed certificate and get it upon passing the same examination online."></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td>Online Certificate</td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="text-left">&nbsp;Download Course Files</td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>

                      <tr>
                        <td class="text-left">&nbsp;Progress and Evaluation Report</td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-remove inactive" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <td class="h5 lead-link text-left">&nbsp;Monthly Costs <!--<span class="lead-small navy_grey">( After Trial Ends )</span>--></td>
                        <td class="h5 lead-link">Free forever</td>
                        <td class="h5 lead-link calm_dark">&dollar;11.99<br>
                          <!--<span class="lead-small navy_grey">( First 10 Days is Free )</span>-->
                        </td>
                        <td class="h5 lead-link calm_dark">&dollar;14.99</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Table footer -->
                  <div class="medium text-left padding-sm margin-left">
                    <p class="lead-link line-normal"><strong class="margin-bottom">Need Help?&nbsp;</strong><a class="decoration-none calm_dark" href="mailto:info@goyoom.com">&nbsp;Send us E-mail&nbsp;</a><br>Call: +963 994 222650 <span class="small">(GMT+2)</span></p>
                  </div>
                </div><!--/.table-responsive-->
              </div><!--/.col-->
            </div><!--/.row-->
          </div><!--/.container-->

          <!-- Learning Tracks -->
          <div class="container margin-bottom">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title lead text-left"><i class="fa fa-th-large" aria-hidden="true">&nbsp;</i>&nbsp;Learning Tracks</h3>
                  </div>
                  <div class="table-responsive padding-sm">
                    <table class="table table-striped text-left lead small">
                      <thead>
                        <tr>
                          <th scope="row"><span class="padding-left">Track Title</span></th>
                          <th>Level</th>
                          <th>Start Date</th>
                          <th>Duration</th>
                          <th class="text-center">Registration</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#grd" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;Graphic Designer</a></td>
                          <td>Beginner</td>
                          <td><i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>&nbsp;5 Feb 2017</td>
                          <td>80 hrs.</td>
                          <td class="text-center"><strong class="text-success">Open</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#pho" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;Photographer</a></td>
                          <td>Beginner</td>
                          <td>~ 5 Mar 2017</td>
                          <td>120 hrs.</td>
                          <td class="text-center">--</td>
                        </tr>
                        <tr>
                          <td><a href="#anm" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;Animation Director</a></td>
                          <td>Beginner</td>
                          <td>~ 12 Mar 2017</td>
                          <td>80 hrs.</td>
                          <td class="text-center">--</td>
                        </tr>
                        <tr>
                          <td><a href="#web" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;Web Developer</a></td>
                          <td>Beginner</td>
                          <td><i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>&nbsp;5 Feb 2017</td>
                          <td>120 hrs.</td>
                          <td class="text-center"><strong class="text-success">Open</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#3da" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;3D Architecture Artist</a></td>
                          <td>Beginner</td>
                          <td>~ 4 Jun 2017</td>
                          <td>~120 hrs.</td>
                          <td class="text-center">--</td>
                        </tr>
                        <tr>
                          <td><a href="#uxd" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;User Experience Designer</a></td>
                          <td>Intermediate</td>
                          <td><i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>&nbsp;5 Feb 2017</td>
                          <td>120 hrs.</td>
                          <td class="text-center"><strong class="text-success">Open</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#mot" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;Motion Graphic Artist</a></td>
                          <td>Intermediate</td>
                          <td>~ 4 Jun 2017</td>
                          <td>40 hrs.</td>
                          <td class="text-center">--</td>
                        </tr>
                        <tr>
                          <td><a href="#ios" class="btn icon-link calm-dark-link" data-toggle="modal" role="button" aria-hidden="true"><i class="fa fa-list calm-dark-link">&nbsp;</i>&nbsp;&nbsp;iOS Developer</a></td>
                          <td>Advanced</td>
                          <td>~ 4 Jun 2017</td>
                          <td>120 hrs.</td>
                          <td class="text-center">--</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text-right padding-sm">
                      <a class="btn btn-sm btn-primary-dark pull-left btn-table-footer smooth-hover" href="http://www.goyoom.com/courses_guide.pdf" role="button">&nbsp;Download Courses Guide&nbsp;</a>
                      <div class="margin-top">
                        <span class="small">&nbsp;<i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>&nbsp;Final Date &nbsp;</span>
                        <span class="small">&nbsp;<span>~</span>&nbsp;Approx. Date &nbsp;</span>
                      </div>
                    </div>
                  </div><!--/.table-responsive-->
                </div><!--/.panel-->
              </div><!--/.col-->
            </div><!--/.row-->
          </div><!--/.container-->

          <!-- Weekly Time -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title lead text-left"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;</i>&nbsp;Weekly Timing</h3>
                  </div>
                  <div class="table-responsive padding-sm">
                    <table class="table table-striped text-left lead small">
                      <thead class="medium">
                        <tr>
                          <th scope="row">Time</th>
                          <th class="text-center">Sun</th>
                          <th class="text-center">Mon</th>
                          <th class="text-center">Tue</th>
                          <th class="text-center">Wed</th>
                          <th class="text-center">Thu</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td class="text-left">10:00 am - 11:00 am</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                        </tr>
                        <tr>
                          <td class="text-left">11:00 am - 12:00 pm</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                        </tr>
                        <tr>
                          <td class="text-left">02:00 pm - 03:00 pm</td>
                          <td>Web</td>
                          <td>Web</td>
                          <td>Web</td>
                          <td>Web</td>
                          <td>Web</td>
                        </tr>
                        <tr>
                          <td class="text-left">03:00 pm - 04:00 pm</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                          <td>Graphic</td>
                        </tr>
                        <tr>
                          <td class="text-left">04:00 pm - 05:00 pm</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                          <td>UX Design</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!--/.table-responsive-->
                </div><!--/.panel -->
              </div><!--/.col-->
            </div><!--/.row-->
          </div><!--/.container-->

          <!-- Learning Tracks -->
          <div class="container">
            <div class="row">
              <!-- Modal Dialogue -->
              <div class="modal" id="grd" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">Graphic Design<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Beginner</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;80 hrs. ( 4 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified Graphic Designer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Universal Principles of Design</span>
                            <ul>
                              <li>Graphic Design Principles</li>
                              <li>Science of Logo Design</li>
                              <li>Layout and Composition</li>
                              <li>Storytelling for Designer</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Basics of Digital Photography</span>
                            <ul>
                              <li>RGB and CMYK Colors</li>
                              <li>Image Color Depth</li>
                              <li>sRGB and Adobe RGB Color Profiles</li>
                              <li>JPEG and TIFF file Formats</li>
                              <li>The RAW File Formats</li>
                              <li>Exposure Values (EV)</li>
                              <li>Shutter Speed</li>
                              <li>Aperture and F-stop Values</li>
                              <li>Depth of Field</li>
                              <li>Focal Length</li>
                              <li>White Balance</li>
                              <li>HDRI (High Dynamic Range Image)</li>
                              <li>ISO Speed and Image Noise</li>
                              <li>Vignette</li>
                              <li>Highlight Clipping</li>
                              <li>Image Sharpness</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe Photoshop CC 2017</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Opening Files</li>
                              <li>Documents and Navigation</li>
                              <li>Digital Images Essentials</li>
                              <li>Cropping, Straighten, and Canvas Size</li>
                              <li>Working with Layers</li>
                              <li>Color and Brushes</li>
                              <li>Working with Layer Masks</li>
                              <li>Masking Selections</li>
                              <li>Editing and Retouching</li>
                              <li>Blend Modes</li>
                              <li>Working with Smart Objects</li>
                              <li>Transformations</li>
                              <li>Adjustment Layers</li>
                              <li> Filters</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Google Nik Collection</span>
                            <ul>
                              <li>Fixing Quality Issues</li>
                              <li>Color Effects</li>
                              <li>Image Styles</li>
                              <li>Black and White with Silver Efex Pro</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe Illustrator CC 2017</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Navigating Documents</li>
                              <li>Working with Artboards</li>
                              <li>Working with Layers</li>
                              <li>Drawing Basic Shapes</li>
                              <li>Transforming Objects</li>
                              <li>Filters and Strokes Essentials</li>
                              <li>Working with Color</li>
                              <li>The Appearance Panel</li>
                              <li>Creating Complex Shapes</li>
                              <li>Working with the Pen Tool</li>
                              <li>Working with Type</li>
                              <li>Using Raster Graphics</li>
                              <li>Printing and Exporting</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Serif Affinity Designer</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Understanding Preferences and Guides</li>
                              <li>Drawing Vector Lines and Shapes</li>
                              <li>Managing Objects</li>
                              <li>Selection</li>
                              <li>Working with Effects</li>
                              <li>Understanding Panels</li>
                              <li>Importing and Exporting</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">Graphic Design 40%</div>
                            <a href="#uxd" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">User Experience Design 60%</div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="pho" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">Photography<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Beginner</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;120 hrs. ( 6 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified Photographer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Photography Basics</span>
                            <ul>
                              <li>Intro to “Photography”</li>
                              <li>Holding an SLR</li>
                              <li>Model and Property Releases</li>
                              <li>Copyright Registration</li>
                              <li>Photography Guidelines</li>
                              <li>Deep Understanding of film</li>
                              <li>Digital Cameras</li>
                              <li>Deep Understanding of Sensor</li>
                              <li>Camera and Human Eyes</li>
                              <li>Compact vs. SLR Cameras</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Understanding the Technical Concepts</span>
                            <ul>
                              <li>RGB and CMYK Colors</li>
                              <li>Image Color Depth</li>
                              <li>sRGB and Adobe RGB Color Profiles</li>
                              <li>ProPhoto RGB Color Profile</li>
                              <li>JPEG, TIFF, and DNG file Formats</li>
                              <li>The RAW File Formats</li>
                              <li>The disadvantages of Raw Files</li>
                              <li>Exposure Values (EV)</li>
                              <li>Shutter Speed</li>
                              <li>Aperture and F-stop Values</li>
                              <li>ISO Speed</li>
                              <li>Depth of Field</li>
                              <li>Focal Length</li>
                              <li>Auto Focus Lenses</li>
                              <li>Build-in Camera Light Metering</li>
                              <li>Incident and Reflected Metering</li>
                              <li>Flash Photography</li>
                              <li>White Balance</li>
                              <li>Image Histograms</li>
                              <li>HDRI (High Dynamic Range Image)</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Dealing with Quality Issues</span>
                            <ul>
                              <li> Image Noise</li>
                              <li>Chromatic Aberration</li>
                              <li>Lens Flare</li>
                              <li>Diffraction</li>
                              <li>Vignette</li>
                              <li>Lens Distortion</li>
                              <li>Highlight Clipping</li>
                              <li>The Moiré Effect</li>
                              <li>Image Sharpness</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Choosing Equipment</span>
                            <ul>
                              <li>Camera Tripods</li>
                              <li>Lens Quality</li>
                              <li>Wide-angle Lenses</li>
                              <li>Telephoto Lenses</li>
                              <li>Micro Lenses</li>
                              <li>Lens Filters</li>
                              <li>The 18% Grey Card</li>
                              <li>Flash Lights</li>
                              <li>Equipment Cases</li>
                              <li>Other Useful Tools</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Photo Techniques</span>
                            <ul>
                              <li>Improve your skills with Hand-held Camera</li>
                              <li>Get the Most of Direct Camera Flash</li>
                              <li>Getting the Most of Shutter Speed</li>
                              <li>Dealing with Harsh Light</li>
                              <li>Making the Most of Natural Light</li>
                              <li>Image Composition</li>
                              <li>Dealing with Fog or Haze</li>
                              <li>Flash Photography</li>
                              <li>Group Photography</li>
                              <li>Night Photography</li>
                              <li>Star-trail Photography</li>
                              <li>HDRI Photography</li>
                              <li>Portrait Photography</li>
                              <li>Food Photography</li>
                              <li>Wild-life Photography</li>
                              <li>Panoramic Photography</li>
                              <li>Micro Photography</li>
                              <li>Kids Photography</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe Photoshop for Photographers</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Adobe Camera Raw</li>
                              <li>Adjustment Layers</li>
                              <li>Solid Color and Gradient Fill</li>
                              <li>Retouching Essential</li>
                              <li>Combining Multiple Images</li>
                              <li>Working with Smart Objects</li>
                              <li>Photography Filters</li>
                              <li>Painting Essentials</li>
                              <li>Layer Effects and Styles</li>
                              <li>Artboards and Libraries</li>
                              <li>Working with Adobe Bridge</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Google Nik Collection</span>
                            <ul>
                              <li>Fixing Quality Issues</li>
                              <li>Color Effects</li>
                              <li>Image Styles</li>
                              <li>Black and White with Silver Efex Pro</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe Lightroom</span>
                            <ul>
                              <li>Importing Photos</li>
                              <li>Using the Library Module</li>
                              <li>Rating and Organizing</li>
                              <li>Creating Collections</li>
                              <li>Working with Metadata</li>
                              <li>Opening Images in Photoshop</li>
                              <li>Exporting Photos</li>
                              <li>Using the Retouching Tools</li>
                              <li>Making Localization Corrections</li>
                              <li>Enhancing Colors</li>
                              <li>Correcting Lens Distortion</li>
                              <li>Vignette and Grain Effect</li>
                              <li>Using Photo Merge</li>
                              <li>Creating Book Project</li>
                              <li>Sharing Photos as Web Gallery</li>
                              <li>Quality Prints</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Serif Affinity Photo</span>
                            <ul>
                              <li>Using the Raw Controls</li>
                              <li>Using the Selection Tools</li>
                              <li>Advanced Selection Tools</li>
                              <li>Using Adjustments</li>
                              <li>Working with Filters</li>
                              <li>Creating Photo montages</li>
                              <li>Distorting and Special Effects</li>
                              <li>Text and Graphics</li>
                              <li> Exporting</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Photography 100%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="anm" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">Animation Direction<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_nil.jpg" alt="Qusai Sakhr">with Qusai Sakhr</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Beginner</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;80 hrs. ( 4 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified Animation Director</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Animation Film Production</span>
                            <ul>
                              <li>Production Crew</li>
                              <li>Animation Film Production Stages</li>
                              <li>Creating Story Concept</li>
                              <li>Hollywood Three-act-structure</li>
                              <li>Character Design</li>
                              <li>Set Design</li>
                              <li>Color Themes</li>
                              <li>Light and Material</li>
                              <li>Camera and Lenses</li>
                              <li>Storyboarding</li>
                              <li>Shots and Camera Movements</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Character Animation</span>
                            <ul>
                              <li>Human Body Ratio</li>
                              <li>Action Lines and Skeleton Joints</li>
                              <li>Basics of Body Drawing</li>
                              <li>Animation Principles</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Smith Micro Moho Pro</span>
                            <ul>
                              <li>Introduction</li>
                              <li>User Interface</li>
                              <li>Working with Palettes</li>
                              <li>Using the Drawing Tools</li>
                              <li>Creating Drawing Styles</li>
                              <li>3D Masking</li>
                              <li>Working with Bones</li>
                              <li>Rigging</li>
                              <li>Animating</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Animation Directing 50%</div>
                            <a href="#grd" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Graphic Design 50%</div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="web" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">Web Development<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Beginner</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;120 hrs. ( 6 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified Front-end and Back-end Developer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Programming</span>
                            <ul>
                              <li>Programming in Real Life</li>
                              <li>Programming Basics</li>
                              <li>Programming Syntax</li>
                              <li>Variables</li>
                              <li>Data Types</li>
                              <li>Conditions</li>
                              <li>Code Modules</li>
                              <li>Loops</li>
                              <li>Iterations</li>
                              <li>Collections</li>
                              <li>Programming Style</li>
                              <li>Debugging</li>
                              <li>Object Oriented Languages</li>
                              <li>Memory Management</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Front-end Development</span>
                            <ul>
                              <li>Intro to the Web</li>
                              <li>Hybrid Mobile App</li>
                              <li>Adobe Brackets</li>
                              <li>HTML</li>
                              <li>XML</li>
                              <li>CSS</li>
                              <li>Less</li>
                              <li>Sass</li>
                              <li>JavaScript</li>
                              <li>JSON</li>
                              <li>jQuery Essentials</li>
                              <li>Google Fonts</li>
                              <li>Font Awesome</li>
                              <li>Google Material Icons</li>
                              <li>npm Package Manager</li>
                              <li>Bower Package Manager</li>
                              <li>Angular JS Essentials</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Using the Version Control System</span>
                            <ul>
                              <li>Understanding the VCS</li>
                              <li>Using Git and Github/li>
                            </ul>
                          <li class="lead small"><span class="list-title">Frameworks</span>
                            <ul>
                              <li>Twitter Bootstrap</li>
                              <li>Wordpress</li>
                              <li>Ionic</li>
                              <li>Laravel</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Back-end Development</span>
                            <ul>
                              <li>PHP</li>
                              <li>Python</li>
                              <li>MySQL</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Enhancing Website Performance</span>
                            <ul>
                              <li>Fonts</li>
                              <li>Icons</li>
                              <li>Vector Images</li>
                              <li>Optimizing Images</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Web Development 50%</div>
                            <a href="#ios" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">iOS Development 50%</div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <!--TODO: fill content and header -->
              <div class="modal" id="3da" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">3D Architecture<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_nil.jpg" alt="Anas Abu Farraj">with Raef Al Ali</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Beginner</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;~120 hrs. ( ~6 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified User Experience Designer and Front-end Developer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">The Real World Physical Concepts</span>
                            <ul>
                              <li class="text-danger">Details coming soon..</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Autodesk AutoCAD</span>
                            <ul>
                              <li>Details coming soon..</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Vray for 3d Max Rendering</span>
                            <ul>
                              <li class="text-danger">Details coming soon..</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Forest Pack for 3D Max</span>
                            <ul>
                              <li class="text-danger">Details coming soon..</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">RailClone for 3D Max</span>
                            <ul>
                              <li class="text-danger">Details coming soon..</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Trimble SketchUp Pro</span>
                            <ul>
                              <li class="text-danger">Details coming soon..</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <a href="#grd" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">Graphic Design 25%</div></a>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">User Experience Design 57%</div>
                            <a href="#web" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">Web 18%</div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="uxd" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">User Experience Design<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Intermediate</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;120 hrs. ( 6 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified User Experience Designer and Front-end Developer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Experience Design</span>
                            <ul>
                              <li>Intro to User Experience</li>
                              <li>Cognitive Science</li>
                              <li>Bootstrap Grid System</li>
                              <li>Bootstrap Components</li>
                              <li>Website UI Design</li>
                              <li>Planning for App Design</li>
                              <li>Mobile App UI Design</li>
                              <li>Mobile App Icons Design</li>
                              <li>Design Components</li>
                              <li>iOS Human Design Guides</li>
                              <li>Google Material Design</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Prototyping</span>
                            <ul>
                              <li>Wireframing</li>
                              <li>Adobe XD</li>
                              <li>Facebook Origami Studio</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Front-end Development</span>
                            <ul>
                              <li>Intro to the Web</li>
                              <li>Hybrid Mobile App</li>
                              <li>Adobe Brackets</li>
                              <li>HTML</li>
                              <li>XML</li>
                              <li>CSS</li>
                              <li>Less</li>
                              <li>Sass</li>
                              <li>JavaScript</li>
                              <li>JSON</li>
                              <li>jQuery Essentials</li>
                              <li>Font Awesome</li>
                              <li>Google Fonts</li>
                              <li>Google Material Icons</li>
                              <li>npm Package Manager</li>
                              <li>Bower Package Manager</li>
                              <li>Angular JS Essentials</li>
                              <li>Git and Github</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <a href="#grd" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">Graphic Design 25%</div></a>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">User Experience Design 57%</div>
                            <a href="#web" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">Web 18%</div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="mot" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">Motion Graphic<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Intermediate</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;60 hrs. ( 3 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified Motion Graphic Artist</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Video Production Basics</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Video File Formats</li>
                              <li>Audio File Format</li>
                              <li>Understanding the Video Codecs</li>
                              <li>Camera Lens Focal length</li>
                              <li>Depth of Field</li>
                              <li>Pixel and Frame Aspect Ratio</li>
                              <li>Frame Rates</li>
                              <li>Safe Frames</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe Premier Pro CC</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Up and Running with Premier Pro</li>
                              <li>Setting up and Organizing Media</li>
                              <li>Basic Editing</li>
                              <li>Refining the Edit</li>
                              <li>Editing Techniques</li>
                              <li>Basic Audio Editing</li>
                              <li>Working with Stills and Graphics</li>
                              <li>Working with Effects</li>
                              <li>Manipulating Clip Speed</li>
                              <li>Basic Color Correction</li>
                              <li>Working with Titles</li>
                              <li>Multicam Editing</li>
                              <li>Sharing and Exporting</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Adobe After Effects</span>
                            <ul>
                              <li>Introduction</li>
                              <li>After Effects Fundamentals</li>
                              <li>Up and Running with After Effects</li>
                              <li>Understanding Compositions</li>
                              <li>Building Compositions with Layers</li>
                              <li>Creating Animation</li>
                              <li>Using Effects</li>
                              <li>3D in After Effects</li>
                              <li>Exporting and Rendering</li>
                              <li>Type and Shape Animation</li>
                              <li>Repairing and Retiming</li>
                              <li>Keying Green-screen Footage</li>
                              <li>Rotoscoping</li>
                              <li>Tracking</li>
                              <li>Media Management</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Red Giant Trapcode Plugins</span>
                            <ul>
                              <li>Particular</li>
                              <li>Form</li>
                              <li>Shine</li>
                              <li>Lux</li>
                              <li>3D Stroke</li>
                              <li>Starglow</li>
                              <li>Echospace</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <a href="#grd" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">Graphic Design 65%</div></a>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">Motion Graphic 35%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Dialogue -->
              <div class="modal" id="ios" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-left">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title">iOS Developer<br>
                        <span class="sub-title-instructor"><img class="img-circle img-instructor" src="img/in_anasaf.jpg" alt="Anas Abu Farraj">with Anas Abu Farraj</span>
                      </h3>
                      <h5 class="sub-title"><strong>Level:</strong>&nbsp;Advanced</h5>
                      <h5 class="sub-title"><strong>Duration:</strong>&nbsp;120 hrs. ( 6 Months )</h5>
                      <h5 class="sub-title"><strong><img class="icon-28" src="img/cert.svg" alt="Certificate Icon">&nbsp;Certificate Title:</strong>&nbsp;Certified iOS Developer</h5>
                    </div>
                    <div class="modal-body">
                      <div class="text-left lead">
                        <p><strong class="small list-title">&nbsp;Subjects:</strong></p>
                        <ul>
                          <li class="lead small"><span class="list-title">Using the Version Control System</span>
                            <ul>
                              <li>Understanding the VCS</li>
                              <li>Using Git and Github</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">C Programming Language</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Getting Started with C</li>
                              <li>Programming Basics</li>
                              <li>Control Flow</li>
                              <li>Manipulating Characters</li>
                              <li>Manipulating Strings</li>
                              <li>Working with Constants and Variables</li>
                              <li>Creating Arrays</li>
                              <li>Understanding Structures</li>
                              <li>Understanding Functions</li>
                              <li>Working with Pointers</li>
                              <li>Allocating Memory</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Objective-C Essentials</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Getting Started with Objective-C</li>
                              <li>Essential Concepts</li>
                              <li>Basic Syntax</li>
                              <li>Variables and Data Types</li>
                              <li>Working with Objects</li>
                              <li>Memory Management</li>
                              <li>Creating Custom Classes</li>
                              <li>Using Collections</li>
                              <li>Working with Files</li>
                              <li>Errors and Debugging</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Swift Programming Language</span>
                            <ul>
                              <li>Introduction</li>
                              <li>About Swift</li>
                              <li>Getting Started with Swift</li>
                              <li>Control Flows</li>
                              <li>Working with Functions</li>
                              <li>Working with Classes</li>
                              <li>Working with Structs and Enums</li>
                              <li>The Interface Builder</li>
                              <li>Interacting with Objective-C</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">Apple Xcode</span>
                            <ul>
                              <li>Introduction</li>
                              <li>Getting Started with Xcode</li>
                              <li>Edit the Code in Xcode</li>
                              <li>Working with Xcode Version Control</li>
                              <li>The Interface Builder Basics</li>
                              <li>Using the Storyboards</li>
                              <li>Compiling</li>
                              <li>Debugging</li>
                              <li>Workspaces</li>
                              <li>The Static Analysis Tools</li>
                              <li>iOS Simulator</li>
                              <li>Publishing Apps</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">iOS Model-View-Controller Design Patterns</span>
                            <ul>
                              <li>Introducing</li>
                              <li>Understanding the MVC Pattern</li>
                              <li>MVC Objects</li>
                            </ul>
                          </li>
                          <li class="lead small"><span class="list-title">iOS Development</span>
                            <ul>
                              <li>Introducing</li>
                              <li>Creating a Hello, world App</li>
                              <li>Code Skills</li>
                              <li>Building a Simple App</li>
                              <li>Basic iOS User Interface</li>
                              <li>Using Auto Layout</li>
                              <li>Using the Data Picker Object</li>
                              <li>Other UI Objects</li>
                              <li>Using the Web Views</li>
                              <li>Using the Size Classes</li>
                              <li>The iOS App Life Cycle</li>
                              <li>Foreground and Background Events</li>
                              <li>Background Tasks</li>
                              <li>Debugging</li>
                              <li>Adding App Icons</li>
                              <li>Launch Screens</li>
                              <li>Introducing iTunes Connect</li>
                              <li>Testing with TestFlight</li>
                              <li>Provisioning Profiles</li>
                              <li>Upload your App to iTunes Connect</li>
                              <li>Publish your App to the AppStore</li>
                            </ul>
                          </li>
                        </ul>
                        <!-- Progress bar -->
                        <div>
                          <p class="h5"><br>Professionalism:&nbsp;<i class="fa fa-info-circle cursor-help inactive" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="The level of information in the course compared to the level of information in the higher level course. The course in blue is recommended as a next step."></i></p>
                          <div class="progress">
                            <a href="#web" data-toggle="modal" data-dismiss="modal"><div class="progress-link progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Web Development 50%</div></a>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">iOS Development 50%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-default center-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.row  (Course Track)-->
          </div><!--/.container (Course Tracks)-->
        </div>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
  
  <!-- Top Courses -->
  <div class="container-fluid">
    <div class="row">
      <div class="lead margin-section text-center text-emboss col-xs-12 col-md-10 col-md-offset-1">
        <h2><i class="fa fa-thumbs-o-up inactive" aria-hidden="true"></i></h2>
        <h3 class="uppercase">Top Courses</h3>
        <hr class="col-xs-10 col-xs-offset-1">
        <!-- Course -->
        <div class="course">
          <img class="course-corner" src="img/course_01.jpg">
          <div class="overlay course-corner smooth-hover"></div>
          <div class="text-center">
            <a class="btn course-info scale-little" href="" role="button"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i><br><p>Preview Course</p></a>
            <p class="course-title">Adobe Photoshop CC</p>
            <p class="course-subtitle">Anas Abu Farraj</p>
          </div>
        </div>
        <!-- Course -->
        <div class="course">
          <img class="course-corner" src="img/course_02.jpg">
          <div class="overlay course-corner smooth-hover"></div>
          <div class="text-center">
            <a class="btn course-info scale-little" href="" role="button"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i><br><p>Preview Course</p></a>
            <p class="course-title">Serif Affinity Designer</p>
            <p class="course-subtitle">Anas Abu Farraj</p>
          </div>
        </div>
        <!-- Course -->
        <div class="course">
          <img class="course-corner" src="img/course_03.jpg">
          <div class="overlay course-corner smooth-hover"></div>
          <div class="text-center">
            <a class="btn course-info scale-little" href="" role="button"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i><br><p>Preview Course</p></a>
            <p class="course-title">Adobe InDesign CC</p>
            <p class="course-subtitle">Qusai Sakhr</p>
          </div>
        </div>
        <!-- Course -->
        <div class="course">
          <img class="course-corner" src="img/course_04.jpg">
          <div class="overlay course-corner smooth-hover"></div>
          <div class="text-center">
            <a class="btn course-info scale-little" href="" role="button"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i><br><p>Preview Course</p></a>
            <p class="course-title">Facebook Origami Studio</p>
            <p class="course-subtitle">Anas Abu Farraj</p>
          </div>
        </div>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->

  <!-- What students say -->
  <div class="container-fluid">
    <div class="row">
      <section class="lead margin-section text-center text-emboss col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
        <i class="fa fa-2x fa-quote-right inactive" aria-hidden="true"></i>
        <h3 class="uppercase">What Students Say?</h3>
        <hr class="col-xs-10 col-xs-offset-1">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <img class="img-thumbnail img-circle" src="img/student.jpg" alt="Student">
          <blockquote class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium esse ex fuga perspiciatis quam sit voluptas? Debitis dolorem doloribus, ea et fuga, fugiat illo ipsum, modi nostrum tenetur vero voluptate?</blockquote>
          <img class="img-thumbnail img-circle" src="img/student.jpg" alt="Student">
          <blockquote class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium esse ex fuga perspiciatis quam sit voluptas? Debitis dolorem doloribus, ea et fuga, fugiat illo ipsum, modi nostrum tenetur vero voluptate?</blockquote>
        </div>
      </section>
    </div>
  </div>

  <!-- Our Team -->
  <a id="team"></a><!-- anchor -->
  <div class="container-fluid">
    <div class="row">
      <div class="lead text-center text-emboss margin-top col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
        <h2><span class="glyphicon glyphicon-knight inactive" aria-hidden="true"></span></h2>
        <h3 class="uppercase">Our Team</h3>
        <hr class="col-xs-10 col-xs-offset-1">
        <!-- Member -->
        <div class="thumbnail">
          <img class="img-thumbnail img-circle img-team" src="img/tm_anasaf.jpg" alt="Anas Abu Farraj">
          <div class="caption lead">
            <a class="lead decoration-none calm_dark" href="https://twitter.com/anasabufarraj/">@anasabufarraj</a>
            <h4>Anas Abu Farraj</h4>
            <h5 class="lead">Founder and Designer Developer</h5>
          </div>
        </div>
        <!-- Member -->
        <div class="thumbnail">
          <img class="img-thumbnail img-circle img-team" src="img/tm_anasaf.jpg" alt="Anas Abu Farraj">
          <div class="caption lead">
            <a class="lead decoration-none calm_dark" href="https://twitter.com/anasabufarraj/">@anasabufarraj</a>
            <h4>Anas Abu Farraj</h4>
            <h5 class="lead">Founder and Designer Developer</h5>
          </div>
        </div>
        <!-- Member -->
        <div class="thumbnail">
          <img class="img-thumbnail img-circle img-team" src="img/tm_anasaf.jpg" alt="Anas Abu Farraj">
          <div class="caption lead">
            <a class="lead decoration-none calm_dark" href="https://twitter.com/anasabufarraj/">@anasabufarraj</a>
            <h4>Anas Abu Farraj</h4>
            <h5 class="lead">Founder and Designer Developer</h5>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div><!--/.container-->

  <!-- Contact Us -->
  <a id="contact"></a><!-- anchor -->
  <div class="container-fluid container-box text-emboss margin-bottom-negative">
    <div class="row">
      <div class="col-xs-12 text-center lead medium">
        <i class="fa fa-2x fa-envelope-o inactive" aria-hidden="true"></i>
        <h3 class="uppercase">Contact Us</h3>
        <hr class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <address>
            <strong><i class="fa fa-lg fa-map-marker padding-sm inactive" aria-hidden="true"></i><br>Address</strong><br>
            <a class="btn btn-map margin-top margin-bottom uppercase smooth-hover" href="#map" role="button" data-toggle="collapse">Show Location Map</a>
            <div class="collapse margin-bottom margin-top" id="map">
              <img class="img-map" src="img/map.svg" alt="Location Map">
            </div>
            <p>Goyoom Educational Est.<br>Tishreen 16<sup>th</sup> St.<br>Byblos Bank Bldg. As Suwayda, Syria.<br>
            <a class="decoration-none calm_dark" href="mailto:info@goyoom.com">info@goyoom.com</a><br>+963 994 222 650 <span class="small">(GMT+2)</span></p>
          </address>
          <strong><i class="fa fa-lg fa-university padding-sm inactive" aria-hidden="true"></i><br>Payment Methods<br></strong>
          <p class="navy_grey">Currently, we only accept direct payment methods.<br>
            Please contact us for more information about money transfer or bank account.<br>
            You should get an activation code to have access to our website content as soon as we process your payment.<br>
            <img class="margin-top sponsor" src="img/byblos.png" alt="Bank Logo">
            <img class="margin-top sponsor" src="img/western.png" alt="Western Union Logo"><br>
          </p>
        </div>
        <!-- Move to top -->
        <div class="padding-sm col-xs-12">
          <p class="text-center margin-top"><a class="btn arrow_top smooth" href="#home" role="button"><i class="fa fa-2x fa-arrow-circle-o-up" aria-hidden="true"></i><span class="inactive"><br>&nbsp;top</span></a></p>
        </div>
      </div><!--/.col-->
    </div><!--/.row -->
  </div><!--/.container -->

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
          <img class="footer-img" src="img/logo_footer.svg" alt="Goyoom Logo">
          <p class="lead medium margin-bottom line-normal">Subscribe to our mailing list to be updated</p>
          <div class="form-group input-group">
              <input class="form-control lead" type="email" placeholder="Enter your e-mail">
            <span class="input-group-btn">
              <button class="btn btn-primary btn-group-border uppercase smooth-hover">Subscribe</button>
            </span>
          </div>
          <!-- Social Media -->
          <p>
            <a href="http://www.facebook.com/goyoomed/" role="button" target="blank"><i class="fa fa-facebook social-link smooth-hover" aria-hidden="true"></i></a>
            <a href="http://twitter.com/goyoomed/" role="button" target="blank"><i class="fa fa-twitter social-link smooth-hover" aria-hidden="true"></i></a>
            <a href="http://www.linkedin.com/company/13249512?trk=vsrp_companies_res_pri_act&trkInfo=VSRPsearchId%3A488187521484125390653%2CVSRPtargetId%3A13249512%2CVSRPcmpt%3Aprimary/" role="button" target="blank"><i class="fa fa-linkedin social-link smooth-hover" aria-hidden="true"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="container">
      <div class="row">
        <div class="center-block small">
        </div>
        <p class="lead small margin-bottom">© <?= date('Y '); ?>Goyoom, Inc. All rights reserved . <a class="decoration-none footer-link smooth-hover" href="https://www.lynda.com/aboutus/otl-privacy.aspx" role="button">Privacy Policy</a></p>
        <span class="vrc">Version <?= "$major.$minor.$patch" ?></span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Tracking Code -->
  <script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76342843-1', 'auto');
    ga('send', 'pageview');

  </script>

  <!-- Zendesk SDK -->
  <div>
  <script>

      window.zEmbed||function(e,t){
          var n,o,d,i,s,a=[],r=document.createElement("iframe");
          window.zEmbed=function(){
              a.push(arguments)
          },window.zE=window.zE||window.zEmbed,
              r.src="javascript:false",
              r.title="",
              r.role="presentation",(r.frameElement||r).style.cssText="display: none",
              d=document.getElementsByTagName("script"),
              d=d[d.length-1],
              d.parentNode.insertBefore(r,d),
              i=r.contentWindow,
              s=i.document;
          try{o=s}catch(e){n=document.domain,
              r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',
              o=s}o.open()._l=function(){
              var o=this.createElement("script");
              n&&(this.domain=n),
                  o.id="js-iframe-async",
                  o.src=e,
                  this.t=+new Date,
                  this.zendeskHost=t,
                  this.zEQueue=a,
                  this.body.appendChild(o)},
              o.write('<body onload="document._l();">'),
              o.close()
      }("https://assets.zendesk.com/embeddable_framework/main.js","goyoom.zendesk.com");

  </script>
  </div>

  <!-- Additional script -->
  <script src="js/script.js"></script>

</body>
</html>