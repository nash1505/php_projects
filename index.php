<?php
require_once("conn.php");



$stmt_select=$conn->prepare("SELECT * FROM np");
  $executed=$stmt_select->execute(); 
  $row_select=$stmt_select->fetchAll(PDO::FETCH_ASSOC);
  
  //print_r($row_select);exit;

  $stmt_selectB=$conn->prepare("SELECT * FROM npb");
  $executedB=$stmt_selectB->execute(); 
  $row_selectB=$stmt_selectB->fetchAll(PDO::FETCH_ASSOC);


  $stmt_selecte=$conn->prepare("SELECT * FROM npe");
  $executede=$stmt_selecte->execute(); 
  $row_selecte=$stmt_selecte->fetchAll(PDO::FETCH_ASSOC);

  $stmt_selectt=$conn->prepare("SELECT * FROM npt");
  $executedt=$stmt_selectt->execute(); 
  $row_selectt=$stmt_selectt->fetchAll(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html>
<head>
<title>आपली बातमी
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
                            <li><a href="admin-verfication.php">Admin-Panel</a></li>

            </ul>
          </div>
          <div class="header_top_right">
            <p><?php $date=new DateTime('now' , new DateTimeZone('Asia/Kolkata'));echo $date->format('d-m-Y H:i:s')?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      
    </nav>
  </section>

  <?php
  
  $array = array_column($row_select, 'head');

  $arrayp = array_column($row_select, 'company_photo');
  $arrayc = array_column($row_select, 'subhead');
  ?>
  <section id="newsSection">




    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="pages/mp1.php"><img src="images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-1];?></a></li>
            <li><a href="pages/mp2.php"><img src="images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-2];?></a></li>
            <li><a href="pages/mp3.php"><img src="images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-3];?></a></li>
            <li><a href="pages/mp4.php"><img src="images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-4];?></a></li>
            
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/mp1.php"> <img src="images/<?php echo $arrayp[count($row_select)-1];?>"></a>
            <div class="slider_article">
              
              <h2><a class="slider_tittle" href="pages/mp1.php">
                  <?php
                    echo $array[count($row_select)-1];
                    # code...
                  ?>


                </a></h2>
              <p>                
                  <?php echo $arrayc[count($row_select)-1];?>
                </p>
            </div>

           



          </div>
          <div class="single_iteam"> <a href="pages/mp2.php"> <img src="images/<?php echo $arrayp[count($row_select)-2];?>"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/mp2.php"><?php echo $array[count($row_select)-2];?></a></h2>
              <p><?php echo $arrayc[count($row_select)-2];?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/mp3.php"> <img src="images/<?php echo $arrayp[count($row_select)-3];?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/mp3.php"><?php echo $array[count($row_select)-3];?></a></h2>
              <p><?php echo $arrayc[count($row_select)-3];?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/mp4.php"> <img src="images/<?php echo $arrayp[count($row_select)-4];?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/mp4.php"><?php echo $array[count($row_select)-4];?></a></h2>
              <p><?php echo $arrayc[count($row_select)-4];?></p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/mp1.php" class="media-left"> <img alt="" src="images/<?php echo $arrayp[count($row_select)-1];?>"> </a>
                  <div class="media-body"> <a href="pages/mp1.php" class="catg_title"> <?php echo $array[count($row_select)-1];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/mp2.php" class="media-left"> <img alt="" src="images/<?php echo $arrayp[count($row_select)-2];?>"> </a>
                  <div class="media-body"> <a href="pages/mp2.php" class="catg_title"> <?php echo $array[count($row_select)-2];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/mp3.php" class="media-left"> <img alt="" src="images/<?php echo $arrayp[count($row_select)-3];?>"> </a>
                  <div class="media-body"> <a href="pages/mp3.php" class="catg_title"> <?php echo $array[count($row_select)-3];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/mp4.php" class="media-left"> <img alt="" src="images/<?php echo $arrayp[count($row_select)-4];?>"> </a>
                  <div class="media-body"> <a href="pages/mp4.php" class="catg_title"><<?php echo $array[count($row_select)-4];?></a> </div>
                </div>
              </li>
              
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">

    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>

            <?php

          $arrayb = array_column($row_selectB, 'head');
          $arraybs = array_column($row_selectB, 'subhead');
          $arraybp = array_column($row_selectB, 'company_photo');


            ?>




            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/bp1.php" class="featured_img"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-1];?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/bp1.php"><?php echo $arrayb[count($row_selectB)-1];?></a> </figcaption>
                    <p><?php echo $arraybs[count($row_selectB)-1];?></p>
                  </figure>
                </li>
              </ul>
            </div>


           
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <
                  <div class="media wow fadeInDown"> <a href="pages/bp2.php" class="media-left"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-2];?>"> </a>
                    <div class="media-body"> <a href="pages/bp2.php" class="catg_title"> <?php echo $arrayb[count($row_selectB)-2];?></a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/bp3.php" class="media-left"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-3];?>"> </a>
                    <div class="media-body"> <a href="pages/bp3.php" class="catg_title"> <?php echo $arrayb[count($row_selectB)-3];?></a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/bp4.php" class="media-left"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-4];?>"> </a>
                    <div class="media-body"> <a href="pages/bp4.php" class="catg_title"> <?php echo $arrayb[count($row_selectB)-4];?></a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/bp5.php" class="media-left"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-5];?>"> </a>
                    <div class="media-body"> <a href="pages/bp5.php" class="catg_title"> <?php echo $arrayb[count($row_selectB)-5];?></a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>


          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Entertainment</span></h2>
                <ul class="business_catgnav wow fadeInDown">


                  <?php
                  $arraye = array_column($row_selecte, 'head');
          $arrayes = array_column($row_selecte, 'subhead');
          $arrayep = array_column($row_selecte, 'company_photo');


                  ?>
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/ep1.php" class="featured_img"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-1];?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/ep1.php"><?php echo $arraye[count($row_selecte)-1];?></a> </figcaption>
                      <p><?php echo $arrayes[count($row_selecte)-1];?></p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/ep2.php" class="media-left"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-2];?>"> </a>
                      <div class="media-body"> <a href="pages/ep2.php" class="catg_title"><?php echo $arraye[count($row_selecte)-1];?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/ep3.php" class="media-left"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-3];?>"> </a>
                      <div class="media-body"> <a href="pages/ep3.php" class="catg_title"> <?php echo $arraye[count($row_selecte)-3];?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/ep4.php" class="media-left"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-4];?>"> </a>
                      <div class="media-body"> <a href="pages/ep4.php" class="catg_title"><?php echo $arraye[count($row_selecte)-4];?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/ep5.php" class="media-left"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-5];?>"> </a>
                      <div class="media-body"> <a href="pages/ep5.php" class="catg_title"><?php echo $arraye[count($row_selecte)-5];?></a> </div>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">


                  <?php
                  $arrayt = array_column($row_selectt, 'head');
          $arrayts = array_column($row_selectt, 'subhead');
          $arraytp = array_column($row_selectt, 'company_photo');


                  ?>
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.php" class="featured_img"> <img alt="" src="images/<?php echo $arraytp[count($row_selectt)-1]?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.php"><?php echo $arrayt[count($row_selectt)-1]?></a> </figcaption>
                      <p><?php echo $arrayts[count($row_selectt)-1]?></p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/np1.php" class="media-left"> <img alt="" src="images/<?php echo $arraytp[count($row_selectt)-2]?>"> </a>
                      <div class="media-body"> <a href="pages/np1.php" class="catg_title"><?php echo $arrayt[count($row_selectt)-2]?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/np2.php" class="media-left"> <img alt="" src="images/<?php echo $arraytp[count($row_selectt)-3]?>"> </a>
                      <div class="media-body"> <a href="pages/np2.php" class="catg_title"> <?php echo $arrayt[count($row_selectt)-3]?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/np3.php" class="media-left"> <img alt="" src="images/<?php echo $arraytp[count($row_selectt)-4]?>"> </a>
                      <div class="media-body"> <a href="pages/np3.php" class="catg_title"> <?php echo $arrayt[count($row_selectt)-4]?></a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/np4.php" class="media-left"> <img alt="" src="images/<?php echo $arrayt[count($row_selectt)-5]?>"> </a>
                      <div class="media-body"> <a href="pages/np4.php" class="catg_title"> <?php echo $arrayt[count($row_selectt)-5]?></a> </div>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/mp1.php" class="media-left"> <img alt="" src="images/<?php echo $arrayp[count($row_select)-1]?>"> </a>
                  <div class="media-body"> <a href="pages/mp1.php" class="catg_title"> <?php echo $array[count($row_select)-1]?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/ep2.php" class="media-left"> <img alt="" src="images/<?php echo $arrayep[count($row_selecte)-2]?>"> </a>
                  <div class="media-body"> <a href="pages/ep2.php" class="catg_title"> <?php echo $arraye[count($row_selecte)-2]?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/np3.php" class="media-left"> <img alt="" src="images/<?php echo $arraytp[count($row_selectt)-3]?>"> </a>
                  <div class="media-body"> <a href="pages/np2.php" class="catg_title"> <?php echo $arrayt[count($row_selectt)-3]?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDowBn"> <a href="pages/bp4.php" class="media-left"> <img alt="" src="images/<?php echo $arraybp[count($row_selectB)-4]?>"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> <?php echo $arrayb[count($row_selectB)-4]?></a> </div>
                </div>
              </li>
            </ul>
          </div>
        
          
          
          
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig"   >
            
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              
              <li><a href="#">Latest News</a></li>
              <li><a href="#">Buisness</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Technology</a></li>
              
              
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Gandhi chowk, pathanpura road, near muncipal corporation Chandrapur, Maharashtra, India 442402</p>
            <address>
            आपली बातमी Mob No. - 9999999999/8888888888  <a href="#">email us-aaplibatmi@gmail.com</a>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright <a href="index.php">आपली बातमी</a></p>
      <p class="developer">Developed By Nachiket</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>


