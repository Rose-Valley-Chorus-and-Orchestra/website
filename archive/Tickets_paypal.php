<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tickets - RVCO</title>
<link rel="shortcut icon" href="../images/rvco.ico" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">	
<link href="../css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="../css/multiColumn_Max425.css" rel="stylesheet" type="text/css">
<link href="../css/multiColumn_Min426Max768.css" rel="stylesheet" type="text/css">
<link href="../css/multiColumn_Min769Max1000.css" rel="stylesheet" type="text/css">
<link href="../css/multiColumn_Min1001.css" rel="stylesheet" type="text/css">

<!-- First uploaded Januart 16, 2024 -->

<script type="text/javascript">

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
}

</script>
    
</head>
<body>
<div class="container">     
     <header>
    <div class="primary_header">
		 <?php include("../header_new.php"); ?>
    </div>
    <nav><div class="secondary_header" id="menu">
      <ul>
            <li><a href="../index.php">HOME</a></li>
           <li><a href="../AboutUs.php">ABOUT</a></li>
             <li>TICKETS</li>
		  <li><a href="Venue.php">VENUE</a></li>
		  <li><a href="../Auditions.php">AUDITIONS</a></li>
            <li><a href="../Contacts.php"><nobr>CONTACT US</nobr></a></li>
      </ul>
    </div>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
  <h1 id="pageName">TICKETS</h1>
	<div id="tickets">
    <h4><em>Rodgers &amp; Hammerstein's Cinderella</em></h4>
	  
<!-- Inclement Weather Cancelation message	  
	  <div style="border: solid #8E1B1D 2px;margin-bottom: 20px;text-align: center;max-width:800px"><span style="font: Arial; font-size: 24px;font-weight: bold">ATTENTION! No performance tonight!</span><br />
		Due to the school canceling all evening activities because of inclement weather, tonight's performance (Thursday, November 15) has been cancelled.<br /><br /> 
		We will see you on Saturday (2 pm and 8 pm performances) and Sunday (2 pm performance)!<br /><br /></div>
End of Inclement Weather Cancelatio message -->	  
	  
<table border="1" cellpadding="2" cellspacing="0" bordercolor="#330099" class="buy_tickets_small">
    <tr>
      <th width="100" valign="top">Type</th>
      <th width="25" align="center" valign="top">Price</th>
      <th width="15%" rowspan="4" bgcolor="#FFCCCC">Put the number of tickets in the Quantity column of the shopping cart on the next page.</th>
    </tr>
    
      <tr>
        <td valign="top"><b>Adult General Admission</b>
		  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Adult Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Adult Ticket - Cinderella" />
          <input type="hidden" name="amount" value="17.00" />
          <input type="hidden" name="no_shippin2" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn" value="PP-ShopCartBF" />
          </form>
		  </td>
        <td align="center" valign="top">$17</td>
      </tr>
      <tr>
        <td valign="top"><b>Senior Citizen (60+) / Student</b>
		  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Senior/Student Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Senior/Student - Cinderella" />
          <input type="hidden" name="amount" value="14.00" />
          <input type="hidden" name="no_shipping" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn" value="PP-ShopCartBF" />
          </form>
		  </td>
        <td align="center" valign="top">$14</td>

      </tr>
    
      <tr>
        <td valign="top"><b>Children</b><br />
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Child Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Child Ticket - Cinderella" />
          <input type="hidden" name="amount" value="7.00" />
          <input type="hidden" name="no_shipping" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn5" value="PP-ShopCartBF" />
          </form>		
          (12 years old and under)</td>
        <td align="center">$7</td>
      </tr>
    
  </table>    
		
		
		
<table border="1" cellpadding="2" cellspacing="0" bordercolor="#330099" class="buy_tickets">
    <tr>
      <th width="100" valign="top">Type</th>
      <th width="25" align="center" valign="top">Price</th>
      <th width="15%" rowspan="4" bgcolor="#FFCCCC">Put the number of tickets in the Quantity column of the shopping cart on the next page.</th>
      <th width="80"></th>
    </tr>
    
      <tr>
        <td valign="top"><b>Adult General Admission</b></td>
        <td align="center" valign="top">$25</td>
        <td align="center" valign="top">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Adult Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Adult Ticket - Cinderella" />
          <input type="hidden" name="amount" value="25.00" />
          <input type="hidden" name="no_shippin2" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn" value="PP-ShopCartBF" />
          </form>
          </td>
      </tr>
      <tr>
        <td valign="top"><b>Senior Citizen (60+) / Student</b></td>
        <td align="center" valign="top">$20</td>
        <td align="center" valign="top">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Senior/Student Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Senior/Student - Cinderella" />
          <input type="hidden" name="amount" value="20.00" />
          <input type="hidden" name="no_shipping" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn" value="PP-ShopCartBF" />
          </form>
</td>
      </tr>
    
      <tr>
        <td valign="top"><b>Children</b><br />
          (12 years old and under)</td>
        <td align="center">$10</td>
        <td align="center" valign="top">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="image" vspace="2" src="../images/add2cart.gif" border="0" name="submit" alt="Add to cart" title="Add to cart" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
          <input type="hidden" name="item_name" value="Child Ticket - Cinderella" />
          <input type="hidden" name="item_number" value="Spring 2024 Child Ticket - Cinderella" />
          <input type="hidden" name="amount" value="10.00" />
          <input type="hidden" name="no_shipping" value="2" />
          <input type="hidden" name="return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="cancel_return" value="http://www.rvco.org/Tickets.php" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="bn5" value="PP-ShopCartBF" />
          </form>
</td>
      </tr>

    
  </table>
					
					
			<div class="view_cart" align="center">
			  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			  <input type="hidden" name="cmd" value="_cart" />
			  <input type="hidden" name="business" value="rosevalleychorus@gmail.com" />
			  <input type="image" src="../images/viewcart.gif" border="0" name="submit" alt="View shopping cart" title="View shopping cart" />
			  <input type="hidden" name="display" value="1" />
			  </form></div>

					
					
  </div>
			</article>
    <aside class="right_article">
			<div class="ticket_instr">
				<p class="high">Tickets ordered online must be picked up at the theater. Please print out the PayPal receipt and bring it to the theater. </p>
	
				  <hr style="clear: both"/>
					  <div>
						<p>All tickets are general admission and are good for <b><i>any</i></b> performance.</p>

						 <p> Tickets are $25 Adult, $20 Senior Citizen/Student, and $10 Child. Tickets may be purchased at the door on performance dates or send a check with your name, address, and order to:</p>
						  <!--<p>All members of a group must use the tickets for the <i>same</i> performance.  If bought online, make sure group members give the name of the purchaser (as provided to PayPal) at the door.</p>
						  <p>For the advance purchase discount:</p>

							<li>purchase tickets online here</li>  -->

						  <p class="mail_instr">RVCO, PO Box 414, Media, PA 19063.</p>
						  <p class="mail_instr">Include a stamped self-addressed envelope if you want the tickets mailed to you, otherwise the tickets will be held at the door.</p>
						<p>For additional questions, e-mail <a href="mailto:tickets@rvco.org">tickets@rvco.org</a> or call our ticket hotline: <font class="high">610-565-5010</font></p>
					  </div>
			</div>			
	  </aside>
  </section>
<div id="a_state"> </div>
<footer class="secondary_header, footer">
    <div class="copyright">
 <?php include("../footer.php"); ?></div>
  </footer>
</div>
</body>
</html>
