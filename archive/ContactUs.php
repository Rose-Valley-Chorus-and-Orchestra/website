<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link rel="shortcut icon" href="../images/rvco.ico" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
		 <?php include("../header.php"); ?>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li>ABOUT</li>
          <li><a href="../Tickets.php">TICKETS</a></li>
		  <li><a href="Venue.php">VENUE</a></li>
		  <li><a href="../Support.php">SUPPORT</a></li> <!-- previously JOIN US-->
		  <li><a href="../Auditions.php">AUDITION</a></li>
        <li><a href="../Contacts.php"><nobr>CONTACT US</nobr></a></li>
      </ul>
    </nav>
  </header>
  <section>
    <article class="left_article">
        <h3>Contact Us</h3>
    <h5>Mailing Address</h5>
    <p>Rose Valley Chorus and Orchestra<br />
      P.O. Box 414<br />
      Media, PA 19063</p>
    <h5>Telephone</h5>
    <p>General Number: 610-565-5010</p>
    <h5>E-mail</h5>
    <ul type="disc">
      <li>For general inquiries: <a href="mailto:info@rvco.org">info@rvco.org</a></li>
      <li>For tickets: <a href="mailto:tickets@rvco.org">tickets@rvco.org</a></li>
      <li>To join the chorus, orchestra, production crew, or to audition for a leading role: <a href="mailto:auditions@rvco.org">auditions@rvco.org</a></li>
      <li>To become a sponsor: <a href="mailto:sponsorship@rvco.org">sponsorship@rvco.org</a></li>
      <li>To bring your group or school to a show: <a href="mailto:groups@rvco.org">groups@rvco.org</a></li>
      <li>For issues concerning this site: <a href="mailto:webmaster@rvco.org">webmaster@rvco.org</a></li>
    </ul>
    <h5>Mailing List</h5>
    <p>If you would like to recieve email announcements, email us at <a href="mailto:shownews@rvco.org?subject=Mail List">shownews@rvco.org</a>.
    <p>Please include your name, address, and email.</p>  
    </article>
    <aside class="right_article"><img class="logo" src="../images/RVCO.gif" name="logo" hspace="10" vspace="3" id="logo" /> </aside>
  </section>
  <div class="row">
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
  </div>
  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title">LEFT COLUMN</h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title">RIGHT COLUMN</h2>
    </div>
  </div>
  <div class="social">
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
<footer class="secondary_header footer">
    <div class="copyright">
 <?php include("../footer.php"); ?></div>
  </footer>
</div>
</body>
</html>
