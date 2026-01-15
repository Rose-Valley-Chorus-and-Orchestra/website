<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">     
<meta name="description" content="find out how to contact use or get information regarding show information, tickets, auditioning, placing an ad, becoming a sponsor, or becoming a member" />
<meta name="keywords" content="email, information, Me and My Girl, Rose Valley, Delaware Valley, theater, theatre, performance, orchestra, Rose Valley, Media, Springfield" />
<title>Contact Us - RVCO</title>
<link rel="shortcut icon" href="images/rvco.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">	
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Max425.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min426Max768.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min769Max1000.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min1001.css" rel="stylesheet" type="text/css">
<style  type="text/css" media="screen">
.form-row {
    margin-bottom: 10px;
}

.form-input {
    display: block;
}

.form-error {
    color: red;
}
#popup-form-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

#popup-form-container form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    width: 80%;
    max-width: 500px;
    margin: 30px auto;
}
    
</style>        

     
     <?php 
     ini_set("include_path", '/home/rvco/php:' . ini_get("include_path") );
if(isset($_POST['submit'])){
    $to = "wbmichael99@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $add_remove = $_POST['add_remove'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers,$add_remove);
    mail($from,$subject2,$message2,$headers2,$add_remove); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
     
     
     
<!-- First uploaded Januart 16, 2024 -->

<script type="text/javascript">
<!--
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
function MM_changeProp(objId,x,theProp,theValue) { //v9.0
  var obj = null; with (document){ if (getElementById)
  obj = getElementById(objId); }
  if (obj){
    if (theValue == true || theValue == false)
      eval("obj.style."+theProp+"="+theValue);
    else eval("obj.style."+theProp+"='"+theValue+"'");
  }
function showPopupForm() {
  document.getElementById("popup-form-container").style.display = "block";
}

function hidePopupForm() {
  document.getElementById("popup-form-container").style.display = "none";
}

document.getElementById("contact-form").addEventListener("submit", (event) => {
  const contactForm = event.target
  if (!validateContactForm(contactForm)) {
    event.preventDefault();
    displayError(contactForm, 'Invalid input')
  }
});     
     
   document.addEventListener("DOMContentLoaded", () => {

  document.getElementById('show-popup').addEventListener('click', () => {
    showPopupForm();
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') hidePopupForm()
  });

});  
     
     
     
}
//-->
</script>
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
		 <?php include("header_new.php"); ?>
    </div>
    <nav><div class="secondary_header" id="menu">
      <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="AboutUs.php">ABOUT</a></li>
            <li><a href="Tickets.php">TICKETS</a></li>
		  <li><a href="archive/Venue.php">VENUE</a></li>
		  <li><a href="Auditions.php">AUDITIONS</a></li>
           <li><nobr>CONTACT US</nobr></li>
      </ul>
     </div>
    </nav>
 </header>

     
<div id="content">
  <h1 id="pageName">CONTACT US </h1>
  <div id="contacts" class="story">
    <h2>E-mail</h2>
    <ul type="disc">
          <li>For general inquiries: <a href="mailto:info@rvco.org">info@rvco.org</a></li>
          <li>For tickets: <a href="mailto:tickets@rvco.org">tickets@rvco.org</a></li>
          <li>To join the chorus, orchestra, production crew, or to audition for a leading role: <a href="mailto:auditions@rvco.org">auditions@rvco.org</a></li>
          <li>To inquire about a RVCO roadshow for your organization: <a href="mailto:roadshows@rvco.org">roadshows@rvco.org</a></li>
          <li>To join our group or for questions about membership: <a href="mailto:members@rvco.org">members@rvco.org</a></li>
          <li>To become a sponsor: <a href="mailto:sponsorship@rvco.org">sponsorship@rvco.org</a></li>
          <li>To place an ad in our playbill: <a href="mailto:ads@rvco.org">ads@rvco.org</a></li>
          <li>To connect with our marketing/PR committee: <a href="mailto:marketing@rvco.org">marketing@rvco.org</a></li>
          <!--<li>To bring your group or school to a show: <a href="mailto:groups@rvco.org">groups@rvco.org</a></li>-->
          <li>For issues concerning this site: <a href="mailto:webmaster@rvco.org">webmaster@rvco.org</a></li>
    </ul>
    <h2>Mailing List</h2>
    <p>If you would like to be added or removed from our mailing list, email and post mail, email us at <a href="mailto:info@rvco.org?subject=Mailing List">info@rvco.org</a>.
    Please include your name, address, and email address.</p>
       
<button id="show-popup">Show Contact Form</button>       
<div id="popup-form-container" style="display:none;">       
          <form id="contact-form" method="POST" action="sendmail.php">
            <div class="form-row form-error" style="display:none;"></div>
            <div class="form-row">
              <label for="contact-form-name">Name:</label>
              <input id="contact-form-name" class="form-input" type="text" name="name" required>
            </div>
            <div class="form-row">
              <label for="contact-form-email">Email:</label>
              <input id="contact-form-email" class="form-input" type="email" name="email" required>
            </div>
            <div class="form-row">
              <label for="contact-form-phone">Phone:</label>
              <input id="contact-form-phone" class="form-input" type="tel" name="phone">
            </div>
            <div class="form-row">
              <label for="contact-form-message">Message:</label>
              <textarea id="contact-form-message" class="form-input" name="message" required></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>       
</div>       
       

       
<!-- Begin Constant Contact Inline Form Code -->
<div class="table-responsive"><form action="" method="post">
<table class="table table-sm" id="emailform">
     <tr><td>    
          
          <div>
            <input type="radio" name="add_remove" id="add-to-list"  checked>
            <label for="add-to-list">
              Add me to your mailing list
            </label>
          </div>
          <div>
            <input type="radio" name="add_remove" id="remove-from-list">
            <label  for="remove-from-list">
              Remove me from your mailing list
            </label>
          </div>     
     </td></tr>
     <tr><td>First Name: </td><tr></tr><td><input type="text" name="first_name"></td></tr>
     <tr><td>Last Name: </td><tr></tr><td><input type="text" name="last_name"></td></tr>
     <tr><td>Email: </td><tr></tr><td><input type="text" name="email"></td></tr>
     <tr><td>Message:<div><textarea rows="5" name="message" cols="30"></textarea></div></td></tr>
     <tr><td><input id="email_submit" type="submit" name="submit" value="Submit"></td></tr>

          
          
</table>     
     

</form>     
</div>
<!-- End Constant Contact Inline Form Code -->       
       
       
    <h2>Mailing Address</h2>
    <p>Rose Valley Chorus and Orchestra<br />
      P.O. Box 414<br />
      Media, PA 19063</p>
    <h2>Telephone</h2>
    <p>General Number: 484-891-9801</p>
    <!-- RVCO cell phone 484 981 9108 -->
       
  </div>
</div>

     
     
     
     
     
<!--begin sponsor and donate -->          
 <?php include("social.php"); ?> 
<!-- <?php include("join.php"); ?> -->     
<!--end sponsor and donate -->     
     
    
</div>
<!--end content -->


<footer class="secondary_header, footer">
    <div class="copyright">
 <?php include("footer.php"); ?></div>
  </footer>
</div>
       <!-- Begin Constant Contact Active Forms
<script> var _ctct_m = "a1729bfc4fb2d627c52886e283c16f5e"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
     
</body>
</html>
