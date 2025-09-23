<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>
<!-- <link rel="stylesheet" href="stylesheet/2col_leftNav.css" type="text/css" />-->
<link rel="shortcut icon" href="images/rvco.ico" />

<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
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
		 <?php include("header.php"); ?>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li>ABOUT</li>
          <li><a href="Tickets_new.php">TICKETS</a></li>
		  <li><a href="Venue_new.php">VENUE</a></li>
		  <li><a href="Support.php">SUPPORT</a></li> <!-- previously JOIN US-->
		  <li><a href="Audition.php">AUDITION</a></li>
        <li><a href="Contacts.php"><nobr>CONTACT US</nobr></a></li>
      </ul>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
			  <h3>ABOUT</h3>
				<p>The Rose Valley Chorus &amp; Orchestra presented its first production, Gilbert &amp; Sullivan's <i>The Mikado</i>, at the Artsman's Hall (now Hedgerow Theatre) in Rose Valley on November 21, 1907. This performance united the wealth of musical and dramatic talent resident in the arts and crafts colony of Rose Valley into a group that is still vibrant and successful 105 years (and over 160 shows) later! See a list of our <a href="productionHistory.php">production history</a>. Today we perform in the beautiful and modern theater at <a href="Venue.php">Strath Haven Middle School</a> in Wallingford.</p>
				<p>Today the Rose Valley Chorus &amp; Orchestra draws its membership from the entire Delaware Valley, a result of its reputation for presenting professional-quality theatrical productions. The voices of the principals and chorus, with the musicianship of the full 35-piece orchestra, rank among the best of the area's many community musical theater groups.</p>
				<p>Rose Valley Chorus &amp; Orchestra now has two major theatrical productions each season (Fall and Spring) which includes Gilbert &amp; Sullivan operettas, Broadway musicals, and other assorted operettas. Stage participation as a principal or chorus member is determined by audition. Audition dates are announced in Stage,  local papers, and our Web site.</p>
				<p>In 1997 Rose Valley Chorus &amp; Orchestra purchased the old Middletown Firehouse in Media. It serves as our set construction site and houses our extensive costume and props collection.</p>
			</article>
    <aside class="right_article">
			<div class="donate">
				  <h4 >Please consider helping us keep live musical theater in the community! Consider making a donation now.</h4>
				  <form style="align-content: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="hidden" name="hosted_button_id" value="W6NERWNHFLSEJ" />
					<input type="image" src="images/donate.gif" border="0" name="submit" alt="Donate using PayPal.  You do not need to be a PayPal member." />
					<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				  </form>
							<table width="150" align="center">
							  <tbody>
								<tr>
								  <td align="left">Angel</td>
								  <td>$500</td>
								</tr>
								<tr>
								  <td align="left">Benefactor</td>
								  <td>$250</td>
								</tr>
								<tr>
								  <td align="left">Patron</td>
								  <td>$100</td>
								</tr>
								<tr>
								  <td align="left">Friend</td>
								  <td>$50</td>
								</tr>
							  </tbody>
							</table>
					<div class="thanks">Any amount will help us! Thanks!</div>
					<div class="find" >Find out more about RVCO by reading our <a href="newsletters/RVCO Winter 2018.pdf" alt="Download our latest newsletter" title="Download our latest newsletter" >Winter Newsletter</a>.</div>     
				</div>			
	  </aside>
  </section>
<div id="a_state">
    <div id="accept_state">
		In keeping with its long-standing traditions and policies, Rose Valley Chorus & Orchestra considers those seeking to participate in its programming and productions on the basis of individual merit.  RVCO does not discriminate on the basis of race, color, religion, sex, sexual orientation, gender identity, national or ethnic origin, age, status as an individual with a disability, protected veteran status, genetic information, or other protected classes under the law.
    </div>
  </div>
<footer class="secondary_header footer">
    <div class="copyright">
 <?php include("footer.php"); ?></div>
  </footer>
</div>
</body>
</html>
