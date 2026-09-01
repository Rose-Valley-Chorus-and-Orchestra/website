<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Grand Duke Cast Page - RVCO</title>
     
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     
<link rel="shortcut icon" href="https://www.rvco.org/images/rvco.ico" />
<link href="https://www.rvco.org/css/bootstrap.css" rel="stylesheet" type="text/css">	
<link href="https://www.rvco.org/css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="https://www.rvco.org/css/multiColumn_Max425.css" rel="stylesheet" type="text/css">
<link href="https://www.rvco.org/css/multiColumn_Min426Max768.css" rel="stylesheet" type="text/css">
<link href="https://www.rvco.org/css/multiColumn_Min769Max1000.css" rel="stylesheet" type="text/css">
<link href="https://www.rvco.org/css/multiColumn_Min1001.css" rel="stylesheet" type="text/css">
</head>
<script src="//use.edgefonts.net/calligraffitti;chewy;handlee;indie-flower.js"></script> 	
<style>
     table tr td:nth-child(2), table tr th:nth-child(2) {
         display: none;
     }
          
     #email_phone th, #email_phone td {border: #ccc  1px solid; }
     
     #email_phone {border: #ccc  2px solid; }

     
     tr:nth-child(odd) {
           background: lightyellow; border: #ccc 2px solid;
         }     
     
     @media (max-width: 770px) {
          #GrandDukeEnsemble table tr {font-size:12px; }
          table #email_phone th: {  display: none;
     }
     }

     @media (min-width: 550px) {
          #email_phone td, #email_phone th { padding: 3px 5px;}
     }


     
/*	Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically. 	*/
	@media
          only screen 
          and (max-width: 550px), (min-device-width: 768px) 
          and (max-device-width: 1024px)  {

/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
		}
          
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { display: none; visibility: collapse; 
			position: absolute;
			top: -9999px;
			left: -9999px; 
		}
          
               th {display: none; visibility: collapse; height: 0px; }

    tr {
      margin: 0 0 1rem 0;
    }
                     
    tr:nth-child(odd) {
      background: lightyellow;
    }

     td {
          /* Behave  like a "row" */
          border: none;
          border-bottom: 1px solid #ccc;
          position: relative;
          padding-left: 40%;
     }

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
               font-weight: bold;
		}

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "Name"; }
		td:nth-of-type(2):before { content: "Last, First"; }
		td:nth-of-type(3):before { content: "Role"; }
		td:nth-of-type(4):before { content: "Email"; }
		td:nth-of-type(5):before { content: "Phone Number"; }
	}     
     
     
</style>
<style type="text/css">
.schedule td {
     border: 1px solid;
     padding: 8px;
     font-weight: normal;
     vertical-align: top;
}
.schedule {margin-left: auto; margin-right: auto; clear:both; padding-top: 5px;}

#castPage {padding: 5px 0px;margin: 5px; font-size: 16px;}
#castPage p {padding: ;margin: 10px 5px 5px 10px;}

.schedule tr:nth-child(even){background-color: #f2f2f2;}
.schedule tr:nth-child(odd){background-color: #ffffff;}
.schedule tr:hover {background-color: #ddd;}
.schedule ul { list-style:disc;padding-left: 15px;}
     
.schedule ul li {padding: 0; margin: 0 0 0 25px;}
.schedule ol { list-style-type:upper-alpha;padding-left: 15px;}
.schedule ol li {padding: 0; margin: 0 0 0 10px;}
.schedule th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  padding-left: 5px;
	  text-align: left;
	  background-color: #A30029;
	  color: white;
}
.schedule ul ul {margin: 0 0 10px -20px;padding-left: 5px;}
.schedule ul ul li {margin: 0 0 10px 20px;padding-left: 5px;}

.schedule div {padding: 10px 0px;}
h2, h2 .storyHead {color: darkred;
     font-size: 24px;}
.emails ul {padding-left: 0px;}
.notification {border: red solid 2px;margin: 10px 30px 0px;border-radius: 10px; padding:10px;}
.notificationTime {margin-left: 30px;}  
.button {
  font: bold 13px Arial;
  text-decoration: none;
  background-color:darkblue;
  color: #dedede;
  padding: 10px 10px 10px 10px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
     margin-bottom: 4px;
     border-radius: 10px;     
}
.button a:link {color:#dedede; text-decoration: none;}  
.downLinks { max-width: 1000px;}     
.downLinks li {float:left;padding: 0 15px 0 0px;margin: 0 15px; max-width: 1000px;}
     
@media (max-width: 425px) {
                        .story, .feature .story {width: 380px;
                              font-size: 14px;
                              font-weight:  normal;   }
                         #content {width: 95%;}
                         #castPage {font-size: 14px;}
                         #pageName {width: 100%; margin-left:5px;}
                         .feature {width: 95%; font-size: 14px;}
                         .storylinks {width: 85%;}
                         #castpage .schedule p {padding: 0px; margin: 0px;font-size: 12px; }
                         .schedule ul { list-style:disc;padding-left: 0px;}
                         .schedule ul li {padding: 0; margin: 0 0 0 5px;font-size: 12px; }
                         .schedule ol { list-style-type:upper-alpha;padding-left: 12px;font-size: 12px;}
                         .schedule ol li {padding: 0; margin: 0 0 0 5px;font-size: 12px; }
                         .schedule th {
                                padding: 5px 0px;
                                text-align: left;
                                background-color: #A30029;
                                color: white;
                               margin: 0px;
                         }
                         .schedule div ul {margin: 0 0 10px -10px;padding-left: 5px;}
                         .schedule ul ul {margin: 0 0 10px -30px;padding-left: 5px;}
                         .schedule ul ul li {margin: 0 0 10px 20px;padding-left: 5px;}
                         .schedule div {padding: 10px 0px;}

                         table.schedule {max-width: 380px;}
                         .schedule p, .schedule div {font-size: 12px; } 
                         .schedule td {font-size:12px;}
                         th.sched_date {width: 15%;  }
                         th.sched_note {width: 25%;}
                         th.sched_scene {width: 30%;}
                         th.sched_called {width: 30%;}

                         h1 {font-size: 24px;}
                         .schedule {width: 380px;}

                         tr td p b {font-size: 10px;}
                         .storyHead {font-size: 150%;}
                         .feature div a,   .feature div at {font-weight:normal;}
                         .key div{ border: medium solid #333333; margin: 20px;  width: 300px; font-size: 12px; padding: 10px 5px 0px 10px;margin-left: 0px;}
                         .photos {height: 250px;}
                         .pictures img {padding:7px;}
                         .pictures {background: #444444;text-align: center;padding:20px;}
                         .notificationTime {margin-left: 0px;}
                         .button {
                                font: bold 11px Arial;
                                text-decoration: none;
                                background-color:darkblue;
                                color: #dedede;
                                padding: 7px;
                                border-top: 1px solid #CCCCCC;
                                border-right: 1px solid #333333;
                                border-bottom: 1px solid #333333;
                                border-left: 1px solid #CCCCCC;
                                margin-left: 10px;
                                   margin-bottom: 4px;
                                   border-radius: 10px;
                              }
                         }
@media (max-width: 400px) {
     .schedule {width: 105%;}
     .schedule div ul {margin: 0 0px 10px -20px;padding-left: 0px;}
     .schedule ul ul {margin: 0 0 5px -30px;padding-left: 0px;}
     .schedule ul ul li {margin: 0 0 10px 20px;padding-left: 0px;}
     .schedule div {padding: 10px 0px;}
     .schedule p {padding: 0px;margin-left: -20px;}
     }

     
     
</style>

    
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
}
//-->
</script>    
    
    
<body>
<div class="container">
  <header>
    <div class="primary_header">
		 <?php include("../header2_new.php"); ?>
    </div>
    <nav>
         <div class="secondary_header" id="menu">
                     <ul>
                         <li><a href="http://www.rvco.org/index.php">HOME</a></li>
                         <li><a href="http://www.rvco.org/AboutUs.php">ABOUT</a></li>
                         <li><a href="http://www.rvco.org/Tickets.php">TICKETS</a></li>
                         <li><a href="http://www.rvco.org/Venue.php">VENUE</a></li>
                         <li><a href="http://www.rvco.org/Auditions.php">AUDITIONS</a></li>
                         <li><a href="http://www.rvco.org/Contacts.php"><nobr>CONTACT US</nobr></a></li>
                     </ul>
         </div> <!--class="secondary_header" id="menu" -->
    </nav>
 </header>
     
<!-- end masthead -->

          <!-- Begin content masthead -->
     <div id="content">
          <?php include("../howTo2026/sp_announcement.php"); ?>

               
               <div id="castPage" style="clear: both;">
                    <h1 id="pageName"><i>The Grand Duke</i> Cast List</h1> 
                    
          
                    
                      <div class="feature" style="clear: both;">
                           <p><a href="index.php" title="Go back to the cast's page">&larr; Back to the cast's page</a></p>
                         <p class="headlines"></p>

                           
                              <div id="GrandDukeEnsemble" align="center">

                              <table id="email_phone" cellpadding="5" cellspacing="0">
                                   <thead role="rowgroup">
                                        <tr role="row">
                                             <col role="columnheader" >
                                             <col role="columnheader" >
                                             <col role="columnheader" >
                                             <col role="columnheader" >
                                             <col role="columnheader" >
                                        </tr>
                                   </thead>
                              <tr role="row">
                                   <th>Name</th>
                                   <th>Last, First</th>
                                   <th>Role</th>
                                   <th>Email</th>
                                   <th>Phone</th>
                              </tr>

                              <tr role="row">
                                   <td role="cell">Peter Beik</td>
                                   <td role="cell">Beik, Peter</td>
                                   <td role="cell">Ludwig</td>
                                   <td role="cell">pbeik612@gmail.com</td>
                                   <td role="cell">215-837-4780</td>
                              </tr>

                              <tr role="row"><td role="cell">Don Cheetham</td>
                                   <td role="cell">Cheetham, Don</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">dbc3rd@verizon.net</td>
                                   <td role="cell">610-731-7668</td></tr>

                              <tr role="row"><td role="cell">Colin Dahms</td>
                                   <td role="cell">Dahms, Colin</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">cdahms47@hotmail.com</td>
                                   <td role="cell">610-310-7055</td></tr>

                              <tr role="row"><td role="cell">Faith Donaher</td>
                                   <td role="cell">Donaher, Faith</td>
                                   <td role="cell">Olga</td>
                                   <td role="cell">fdonaher@gmail.com</td>
                                   <td role="cell">267-884-6425</td>
                              </tr>

                              <tr role="row"><td role="cell">Mike Dutka</td>
                                   <td role="cell">Dutka, Mike</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">mikedutka@gmail.com</td>
                                   <td role="cell">215-534-8489</td>
                              </tr>

                              <tr role="row"><td role="cell">Lisa Franks</td>
                                   <td role="cell">Franks, Lisa</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">lisafranks1@verizon.net</td>
                                   <td role="cell">610-246-5681</td></tr>

                              <tr role="row"><td role="cell">Jocelyn Hall</td>
                                   <td role="cell">Hall, Jocelyn</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">&nbsp;</td>
                                   <td role="cell">&nbsp;</td>
                              </tr>

                              <tr role="row"><td role="cell">Jennifer Heller</td>
                                   <td role="cell">Heller, Jennifer</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">jwillrn@yahoo.com</td>
                                   <td role="cell">302-530-3838</td></tr>

                              <tr role="row"><td role="cell">Laura Hull</td>
                                   <td role="cell">Hull, Laura</td>
                                   <td role="cell">Lisa</td>
                                   <td role="cell">lmarkow07@gmail.com</td>
                                   <td role="cell">484-369-3313</td></tr>

                              <tr role="row"><td role="cell">Rob Hull</td>
                                   <td role="cell">Hull, Rob</td>
                                   <td role="cell">Rudolph,</br>Grand Duke</td>
                                   <td role="cell">rhull@alum.mit.edu</td>
                                   <td role="cell">610-627-0433</td></tr>

                              <tr role="row"><td role="cell">Roger Kennedy</td>
                                   <td role="cell">Kennedy, Roger</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">rwkennedy45@gmail.com</td>
                                   <td role="cell">505-314-6273</td></tr>

                              <tr role="row"><td role="cell">Doug Kurtze</td>
                                   <td role="cell">Kurtze, Doug</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">dkurtze@sju.edu</td>
                                   <td role="cell">267-253-6932</td></tr>

                              <tr role="row"><td role="cell">Marie Maguire</td>
                                   <td role="cell">Maguire, Marie</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">mariem@caramanico.com</td>
                                   <td role="cell">215-378-7815</td></tr>

                              <tr role="row"><td role="cell">Paula McGeary</td>
                                   <td role="cell">McGeary, Paula</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">paula.mcgeary@yahoo.com</td>
                                   <td role="cell">484-802-9428</td></tr>

                              <tr role="row"><td role="cell">Albert Melli</td>
                                   <td role="cell">Melli, Albert</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">albert.u.melli@gmail.com</td>
                                   <td role="cell">610-662-9204</td>
                              </tr>

                              <tr role="row"><td role="cell">Bob Moore</td>
                                   <td role="cell">Moore, Bob</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">robert_moore25@comcast.net</td>
                                   <td role="cell">610-368-8668</td></tr>

                              <tr role="row"><td role="cell">Ray Murphy</td>
                                   <td role="cell">Murphy, Ray</td>
                                   <td role="cell">Herald</td>
                                   <td role="cell">murphyplantsman@gmail.com</td>
                                   <td role="cell">610-680-6136</td></tr>

                              <tr role="row"><td role="cell">Steve Naz</td>
                                   <td role="cell">Naz, Steve</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">stevenazigian@gmail.com</td>
                                   <td role="cell">610-572-2500</td></tr>

                              <tr role="row"><td role="cell">Sean O'Donnell</td>
                                   <td role="cell">O'Donnell, Sean</td>
                                   <td role="cell">Tannhäuser</td>
                                   <td role="cell">lastcastipromise@gmail.com</td>
                                   <td role="cell">302-354-1974</td></tr>

                              <tr role="row"><td role="cell">Caroline
                                Pashos</td>
                                   <td role="cell">Pashos, Caroline</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">pashoscd@yahoo.com</td>
                                   <td role="cell">215-896-3528</td>
                              </tr>

                              <tr role="row"><td role="cell">Mary Punshon</td>
                                   <td role="cell">Punshon, Mary</td>
                                   <td role="cell">Julia Jellicoe</td>
                                   <td role="cell">Mpunshon@gmail.com</td>
                                   <td role="cell">610-772-5264</td></tr>

                              <tr role="row"><td role="cell">Brian Rubino</td>
                                   <td role="cell">Rubino, Brian</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">&nbsp;</td>
                                   <td role="cell">&nbsp;</td>
                              </tr>

                              <tr role="row"><td role="cell">Chris Rubino</td>
                                   <td role="cell">Rubino, Chris</td>
                                   <td role="cell">Ernest Dummkopf</td>
                                   <td role="cell">cmrubino@gmail.com</td>
                                   <td role="cell">267-679-6297</td></tr>

                              <tr role="row"><td role="cell">Meagan Rubino</td>
                                   <td role="cell">Rubino, Meagan</td>
                                   <td role="cell">The Princess</td>
                                   <td role="cell">&nbsp;</td>
                                   <td role="cell">&nbsp;</td>
                              </tr>

                              <tr role="row"><td role="cell">Kathy Sarlson</td>
                                   <td role="cell">Sarlson, Kathy</td>
                                   <td role="cell">Elsa</td>
                                   <td role="cell">sarlsonk@gmail.com</td>
                                   <td role="cell">215-284-9994</td></tr>

                              <tr role="row"><td role="cell">Joyce Severin</td>
                                   <td role="cell">Severin, Joyce</td>
                                   <td role="cell">Ensemble</td>
                                   <td role="cell">jp2s84@yahoo.com</td>
                                   <td role="cell">610-5517807</td></tr>

                              <tr role="row"><td role="cell">Brenda Rose
                                Simkin</td>
                                   <td role="cell">Simkin, Brenda Rose</td>
                                   <td role="cell">The Baroness</td>
                                   <td role="cell">b.r.simkin@gmail.com</td>
                                   <td role="cell">610-804-0040</td></tr>

                              <tr role="row"><td role="cell">Jeff Swafford</td>
                                   <td role="cell">Swafford, Jeff</td>
                                   <td role="cell">The Prince</td>
                                   <td role="cell">swafford221@gmail.com</td>
                                   <td role="cell">610-389-2619</td></tr>

                              <tr role="row"><td role="cell">Sharon Weil-Chalker</td>
                                   <td role="cell">Weil-Chalker, Sharon</td>
                                   <td role="cell">Bertha</td>
                                   <td role="cell">sharon.weil@chalker.net</td>
                                   <td role="cell">484-437-5278</td>
                              </tr>

                              <tr role="row"><td role="cell">Heidi Williams</td>
                                   <td role="cell">Williams, Heidi</td>
                                   <td role="cell">Gretchen</td>
                                   <td role="cell">randhwilliams2017@gmail.com</td>
                                   <td role="cell">316-435-8012</td>
                              </tr>

                              </table>

                              </div>
                           
                           

                      </div><!--ends class="feature" -->
               </div><!--ends id="castPage" -->
     </div><!--ends id="content" -->
          <!--end content -->
</div> <!--ends class="container" -->

<div>  
<footer class="secondary_header, footer">
         <div class="copyright"><?php include("../footer2.php"); ?></div>
</footer>
</div>
</body>
</html>


