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
$arrayt = array_column($row_selectt, 'head');
          $arrayts = array_column($row_selectt, 'subhead');
          $arraytp = array_column($row_selectt, 'company_photo');
                    $arraytc = array_column($row_selectt, 'content');


 $arraye = array_column($row_selecte, 'head');
          $arrayes = array_column($row_selecte, 'subhead');
          $arrayep = array_column($row_selecte, 'company_photo');

          $arrayb = array_column($row_selectB, 'head');
          $arraybs = array_column($row_selectB, 'subhead');
          $arraybp = array_column($row_selectB, 'company_photo');

          $array = array_column($row_select, 'head');
          $arraycc = array_column($row_select, 'content');

  $arrayp = array_column($row_select, 'company_photo');
  $arrayc = array_column($row_select, 'subhead');


?>




<!DOCTYPE html>
<html>
<head>
<title>आपली बातमी</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
<link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
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
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">

            <p> <?php $date=new DateTime('now' , new DateTimeZone('Asia/Kolkata'));
              echo $date->format('d-m-Y H:i:s') ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="../index.php" class="logo"><img src="../images/logo.jpg" alt=""></a></div>
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
   
            
           
  <section id="newsSection">
    
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="mp1.php"><img src="../images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-1];?></a></li>
            <li><a href="mp2.php"><img src="../images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-2];?></a></li>
            <li><a href="mp3.php"><img src="../images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-3];?></a></li>
            <li><a href="mp4.php"><img src="../images/news_thumbnail3.jpg" alt=""><?php echo $array[count($row_select)-4];?></a></li>  
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
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">

            
            
            <h1><?php echo $array[count($row_select)-1];?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i></a> आपली बातमी<span><i class="fa fa-calendar"></i><?php $date=new DateTime('now' , new DateTimeZone('Asia/Kolkata'));
              echo $date->format('d-m-Y H:i:s') ?></p></span> <a href="#"><i class="fa fa-tags"></i>NEWS</a> </div>
            <div class="single_page_content"> <img class="img-center" src="../images/<?php echo $arrayp[count($row_select)-1];?>" alt="">
              <p><?php echo $arraycc[count($row_select)-1];?></p>
              
              
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="mp1.php"> <img src="../images/<?php echo $arrayp[count($row_select)-1];?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="mp1.php"> <?php echo $array[count($row_select)-1];?></a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="mp2.php"> <img src="../images/<?php echo $arrayp[count($row_select)-2];?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="mp2.php"> <?php echo $array[count($row_select)-2];?></a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="mp3.php"> <img src="../images/<?php echo $arrayp[count($row_select)-3];?>.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="mp3.php"> <?php echo $array[count($row_select)-3];?></a> </div>
                  </div>
                </li>
              </ul>
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
                <div class="media wow fadeInDown"> <a href="mp1.php" class="media-left"> <img alt="" src="../images/<?php echo $arrayp[count($row_select)-1];?>"> </a>
                  <div class="media-body"> <a href="mp1.php" class="catg_title"> <?php echo $array[count($row_select)-1];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="mp2.php" class="media-left"> <img alt="" src="../images/<?php echo $arrayp[count($row_select)-2];?>"> </a>
                  <div class="media-body"> <a href="mp2.php" class="catg_title"> <?php echo $array[count($row_select)-2];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="mp3.php" class="media-left"> <img alt="" src="../images/<?php echo $arrayp[count($row_select)-3];?>"> </a>
                  <div class="media-body"> <a href="mp3.php" class="catg_title"> <?php echo $array[count($row_select)-3];?></a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="mp4.php" class="media-left"> <img alt="" src="../images/<?php echo $arrayp[count($row_select)-4];?>"> </a>
                  <div class="media-body"> <a href="mp4.php" class="catg_title"> <?php echo $array[count($row_select)-4];?></a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            </div>
          
        
          
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-sm-4">
          
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Gandhi chowk, pathanpura road, near muncipal corporation Chandrapur, Maharashtra, India 442402</p>
            <address>
            आपली बातमी Mob No. - 9999999999/8888888888  <a href="#">email us-aaplibatmi@gmail.com
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright <a href="../index.php">आपली बातमी</a></p>
      <p class="developer">Developed By Nachiket</p>
    </div>
  </footer>
</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="../assets/js/jquery.newsTicker.min.js"></script> 
<script src="../assets/js/jquery.fancybox.pack.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
