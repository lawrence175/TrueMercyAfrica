<!--Author: lawrence k ####### True Mercy Africa-->

<?php
    include("admin/db.php");
?>

<!DOCTYPE html>
<head>
<title>True Mercy Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="content-language" content="en-GB"/>
  <link rel="alternate" hreflang="en-GB"
        href="http://www.truemercyafrica.org/index.php"/>
  <link rel="alternate" hreflang="ko-KR"
        href="http://www.truemercyafrica.org/kr.php"/>
  <link rel="alternate" hreflang="de-DE"
        href="http://www.truemercyafrica.org/de.php"/>
  <link rel="alternate" hreflang="fr-FR"
        href="http://www.truemercyafrica.org/fr.php"/>
  <link rel="alternate" hreflang="es-ES"
        href="http://www.truemercyafrica/es.php"/>
  <link rel="alternate" hreflang="x-default"
        href="http://www.truemercyafrica.org/index.php"/>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="favicon_tma.png" type="image/png" sizes="32x32">
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#000051;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body id="top">
<!-- start of scroll up button -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- End of scroll up button -->
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="english/contact.php">Contact Us</a></li>
          <li><a href="index.php">English</a></li>
          <li><a href="kr.php">Korean</a></li>
          <li><a href="de.php">Germany</a></li>
        <li><a href="fr.php">French</a></li>
        <li><a href="es.php">Spanish</a></li>
        <li><a href="admin/login.php">LOGIN</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">True Mercy Africa</a></h1>
      <p>"Luke 6:36,therefore be merciful,just as your father also is merciful"</p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="english/about.php">WHO WE ARE</a></li>
        <li><a class="drop" href="#">GET INVOLVED</a>
          <ul>
            <li><a href="donate/donate.php">Donate</a></li>
            <li><a href="english/fundraise.php">Fundraise</a></li>
            <li><a href="english/volunteer.html">Volunteer</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">WHAT WE DO</a>
          <ul>
            <li><a href="english/evangelism.php">Evangelism</a></li>
            <li><a href="english/child-outreach.php">Children Outreach</a></li>
            <li><a href="english/community-outreach.php">Community Outreach</a></li>
            <li><a href="english/agriculture.php">Agriculture</a></li>
            <li><a href="#">Education & Trainning</a></li>
            <li><a href="#">Child Health Care</a></li>
          </ul>

        </li>
        <li><a class="drop" href="#">PROGRAM REGIONS</a>
          <ul>
            <li><a href="english/full-width.php">TMA-Central Uganda</a></li>
            <li><a href="english/full-width.php">TMA-Eastern Uganda</a></li>
            <li><a href="english/full-width.php">TMA-Western Uganda</a></li>
            <li><a href="english/full-width.php">TMA-Northern Uganda</a></li>
            <li><a href="english/full-width.php">TMA-Southern Uganda</a></li>
            <li><a href="english/full-width.php">rest of Africa</a></li>
           </ul>
        </li>
        <li><a href="english/contact.php">CONTACT</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/1.png" alt=""></a>
        <figcaption>
          <h2>Holistic true love and support to the destitute children</h2>
          <p>Visible spiritual transformation of Children besides carrying out children's camp,Door to door and crusade children's evangelism.etc.</p>
          <p class="right"><a href="english/about.html">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="images/demo/slider/volunteer_1.jpg" alt=""></a>
        <figcaption>
          <h2>Why you should volunteer with Us?</h2>
          <p>Our realizing the challenges that all forms of african youth and Children face,providing education and scholastic materials,is one of our objective. .........</p>
          <p class="right"><a href="english/volunteer.html">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="images/demo/slider/educ_01.jpg" alt=""></a>
        <figcaption>
          <h2>Our emphasise on educating the african child;</h2>
          <p>To ellborate more on this later!!</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/agric_01.jpg" alt=""></a>
        <figcaption>
          <h2>Our focus on creating and investing in community agricultural projects that empowers african child</h2>
          <p>more to ellborate Here!!!</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="images/demo/slider/evan_01.jpg" alt=""></a>
        <figcaption>
          <h2>lets talk about evangelism in empowering the african child </h2>
          <p>Our visions empowerd by the mercy of God;through hope,love,faithe...etc..</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">All About The true mercy Africa</a></li>
        <li><a href="#slide-2">Why You Should Volunteer With Us</a></li>
        <li><a href="#slide-3">Education And child trainning</a></li>
        <li><a href="#slide-4"> projects And Its Donors</a></li>
        <li><a href="#slide-5">Latest Evangelism News &amp; Events</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><a href="#"><em class="heading">Prospective Community Children</em> <img class="borderedbox" src="images/demo/220x95.jpg" alt=""></a></li>
            <li class="btmspace-15"><a href="#"><em class="heading">Child Home Visisting</em> <img class="borderedbox" src="images/demo/220x96.jpg" alt=""></a></li>
            <li class="btmspace-15"><a href="#"><em class="heading">International Students Collaboration</em> <img class="borderedbox" src="images/demo/student_col.jpg" alt=""></a></li>
            <li class="btmspace-15"><a href="#"><em class="heading">Community Children Fellowships</em> <img class="borderedbox" src="images/demo/fellowship.jpg" alt=""></a></li>

          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <h2>Latest on Evangelism,Community School Visistings &amp; Events</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/slider/teaching.jpg" alt=""></div>
              <p class="nospace btmspace-15">Children outreach in central region.<a href="english/child-outreach.html">Readmore...</a></p>
              <p>Trained Children on how to prevent sickness and Balanced diet.</a></p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/water_aid.jpg" alt=""></div>
              <p class="nospace btmspace-15">Water Security is one of our objective to fullfill.<a href="english/community-outreach.html">Readmore..</a></p>
              <p>We build water tanks and sources to support families in regions.</p>
            </li>
                     </ul>
      <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column includes video coverage -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder">
            <h6>True Mercy Africa Documentary</h6>
              <video controls="controls" width="220" height="230" poster="images/demo/tma_image.png">
                <source src="videos/first_video.mp4" video="web/mp4">
              </video>
             <p><a href="#">View More Activities in videos Here</a></p>
            </div>
            <div class="sdb_holder">
            <h6>Children Need Help!</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="english/volunteer.html"><img src="images/demo/volunteer.png" alt=""> Apply to Volunteer</a></li>
              <li class="clear"><a href="donate/donate.php"><img src="images/demo/donate.png" alt=""> Make a donation</a></li>
              <li class="clear"><a href="english/fundraise.php"><img src="images/demo/fundraise.png" alt="">Fundraise</a></li>
              <li class="clear"><a href="english/contact.php"><img src="images/demo/talk.png" alt=""> Talk to Us</a></li>
            </ul>
          </div>
                   <!-- ################################################################################################ --> 
        </div>
        <!-- / Right Column --> 
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div id="twitter" class="group btmspace-30">
        <div class="one_quarter first center"><a href="#"><i class="fa fa-twitter fa-3x"></i><br>
          Follow Us On Twitter</a></div>
        <div class="three_quarter bold">
          <p>To instill the word of God among the young african generation,by Supporting them with Education,Health Care,<a href="#" >Education inline with Organic Farming</a>  , Health Education and Food.</p>
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div class="group">
        <h2>Quickly Find What You Are Looking For</h2>
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">Child Advisory</a></li>
            <li><a href="#">Administration</a></li>
            <li><a href="#">Gospel Life At a Glance</a></li>
            <li><a href="#">Child Health &amp; Security</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">community Activities Schedules</a></li>
            <li><a href="#">Counselling &amp; Guidance </a></li>
            <li><a href="#">Department Directory</a></li>
            <li><a href="#">Fellowships</a></li>
            <li><a href="#">Financial Aid</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">African Child Health Services</a></li>
            <li><a href="#">Bible Studies</a></li>
            <li><a href="#">International Evangelism Programs</a></li>
            <li><a href="#">International University Students patternship</a></li>
            <li><a href="#">Child games &amp; Sports</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">Community Registration</a></li>
            <li><a href="#">Parent Information</a></li>
            <li><a href="#">Child Residence Life</a></li>
            <li><a href="#">Residential Colleges</a></li>
            <li><a href="#">Schools Information</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="https://www.google.com/maps/place/true+mercy+africa/@0.365041,32.9385371,16.25z/data=!4m5!3m4!1s0x0:0xe0a849aef281c23c!8m2!3d0.3637316!4d32.939098">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        True Mercy Africa Central Uganda<br>
        Lugazi Municipality,Buikwe District<br>
        P.O BOX 50,Lugazi<br>
        <br>
        <i class="fa fa-phone pright-10"></i>+256772301936<br>
        <i class="fa fa-phone pright-10"></i>+256704856381<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">truemercyafrica@gmail.com</a>
        </address>
      </div>
      <br>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <br>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="https://www.facebook.com/True-Mercy-Africa-569010696966620/"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="index.php">True Mercy Africa</a></p>
        <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>

<!-- END OF JAVASCRIPTS -->
<!-- ######################################################################################################## -->
<!-- IP TRACKING  -->


<!-- //IP TRACKING  -->
</body>
</html>

