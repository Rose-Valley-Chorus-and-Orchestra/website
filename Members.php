<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="our ticket prices are $25.00 for Adult tickets, $20.00 forSenior (60+)/Student tickets, and $10.00 for a Child (12 and under) ticket; link to Zeffy to purchase a tickts online" />
<meta name="keywords" content="The Pirates of Penzance, Rose Valley, Delaware Valley, theater, theatre, performance, orchestra, Rose Valley, Media, Springfield" />
<title>Members - RVCO</title>
<link rel="shortcut icon" href="images/rvco.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">	
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Max425.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min426Max768.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min769Max1000.css" rel="stylesheet" type="text/css">
<link href="css/multiColumn_Min1001.css" rel="stylesheet" type="text/css">

<!-- First uploaded Januart 16, 2024 -->
<style>
     label {margin-top:20px;}
     .instr {font-size: .8em; color:#555;padding-bottom: 10px;font-style: italic;}
     .submitB {color:#333;padding: 30px 0;font-style: bold;}
            button.zeffy-btn {
                background-color: #YOURHEXCOLOUR;
                border: none;
                border-radius: 5px;
                box-sizing: border-box;
                color: white;
                cursor: pointer;
                left: calc(50% - 75px);
                margin: 10px;
                min-height: 50px;
                min-width: 150px;
                padding: 5px 10px;
                text-transform: uppercase;
                top: calc(50% - 25px);
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>     

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
		 <?php include("header_new.php"); ?>
    </div>
    <nav><div class="secondary_header" id="menu">
      <ul>
            <li><a href="index.php">HOME</a></li>
           <li><a href="AboutUs.php">ABOUT</a></li>
             <li>TICKETS</li>
		  <li><a href="archive/Venue.php">VENUE</a></li>
		  <li><a href="Auditions.php">AUDITIONS</a></li>
            <li><a href="archive/ContactUs.php"><nobr>CONTACT US</nobr></a></li>
      </ul>
    </div>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
                   <article class="left_article">
                              <h1 id="pageName">Members</h1>
                              <!-- <h2 class="storyHead" style="visibility: hidden;"><i>State Fair</i></h2>-->
                              <form action="/action_page.php">
                              
                                   <div><label for="FName">First Name</label></div>
                                   <input type="text" id="FName" maxlength="50" required></input>
                                   
                                   <div><label for="LName">Last Name</label></div>
                                   <input type="text" id="LName" maxlength="50" required></input>
                        
                                   <div><label for="FName">Email</label></div>
                                   <input type="email" id="Email" size="30" required></input>
                                   
                                   <div><label for="CPhone">Cell Phone</label></div>
                                       <div class="instr">Format: 123-123-1234</div>
                                   <input type="tel" id="CPhone" size="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required></input>
                                   
                                   <div><label for="HPhone">Home Phone</label></div>
                                       <div class="instr">Format: 123-123-1234</div>
                                   <input type="tel" id="HPhone" size="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></input>
     
                                   <div><label for="Addr1">Address 1</label></div>
                                   <input type="text" id="Addr1" size="30" required></input>
     
                                   <div><label for="Addr2">Address 2</label></div>
                                   <input type="text" id="Addr2" size="30"></input>
     
                                   <div><label for="City">City</label></div>
                                   <input type="text" id="City" size="30" maxlength="50" required></input>
     
                                   <div><label for="State">State</label></div>
                                   <select id="State" name="State" size="4" required>
                                        <option selected value="PA">Pennsylvania</option>
                                        <option value="DE">Delaware</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                   </select>
     
                                   <div><label for="Zip">Zip Code</label></div>
                                   <input type="number" id="Zip" maxlength="5" required></input>
     
                                   <div class="submitB"><input type="submit" value="Submit"></div>
                             </form>
                                                  
                          <p>For questions, e-mail <a href="mailto:webmaster@rvco.org">webmaster@rvco.org</a></p>
                                   
	  
<!-- Inclement Weather Cancelation message	  
	  <div style="border: solid #8E1B1D 2px;margin-bottom: 20px;text-align: center;max-width:800px"><span style="font: Arial; font-size: 24px;font-weight: bold">ATTENTION! No performance tonight!</span><br />
		Due to the school canceling all evening activities because of inclement weather, tonight's performance (Thursday, November 15) has been cancelled.<br /><br /> 
		We will see you on Saturday (2 pm and 8 pm performances) and Sunday (2 pm performance)!<br /><br /></div>
End of Inclement Weather Cancelatio message -->	  

                              </div>
                    </article>
  </section>
     
     
     
<footer class="secondary_header, footer">
    <div class="copyright">
 <?php include("footer.php"); ?></div>
  </footer>
</div>
</body>
</html>
