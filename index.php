<!doctype html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <!--<meta http-equiv="Cache-Control" content="no-cache" />
          <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="author" content="William Michael">
          <meta name="viewport" content="width=device-width, initial-scale=1">     
          <meta name="description" content="We are a community theater troupe that has been putting on two shows a year with a full orchestra for over 100 years, performance are in the spring and fall" />
          <meta name="keywords" content="The Pirates of Penzance, Me and My Girl, Rose Valley, Delaware Valley, theater, theatre, performance, orchestra, Rose Valley, Media, Springfield" />
          <title>Rose Valley Chorus & Orchestra</title>
          <link rel="shortcut icon" href="images/rvco.ico" />

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link href="/css/style.css" rel="stylesheet">

          
          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

     </head>
     <body>
          <?php include 'includes/header.php'; ?>

          <!-- Main content -->
          <main>
               <!-- Carousel -->
               <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
               </div>
               <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/gondoliers_carousel.png" class="d-block w-100" alt="The Gondoliers">
                    <div class="carousel-caption text-end">
                         <p><a class="btn btn-sm btn-primary" href="#">Learn More</a></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/h2s_carousel.png" class="d-block w-100" alt="How To Succeed In Business Without Really Trying">
                    <div class="carousel-caption text-end">
                         <p><a class="btn btn-sm btn-primary" href="#">Learn More</a></p>
                    </div>
                    </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
               </button>
               </div>

               <!-- Marketing / donate & sponsor -->
               <div class="container marketing">
               <div class="row text-center donateSec">
                    <span><strong>Please consider helping us keep live musical theater in the community</strong></span>
               </div>
               <div class="row">
                    <div class="col-lg-6 text-center mb-3">
                    <img class="rounded-circle" width="140" height="140" src="/images/donateIcon.png">
                    <h2>Donate</h2>
                    <h5>Consider making a donation now</h5>
                    <p><a class="btn btn-info" href="https://www.zeffy.com/en-US/donation-form/d9b4ba19-0df8-4869-9aa8-2b7835686f90">Donate</a></p>
                    </div>
                    <div class="col-lg-6 text-center mb-3">
                    <img class="rounded-circle" width="140" height="140" src="/images/sponsorIcon.png">
                    <h2>Sponsor</h2>
                    <h5>Consider becoming a Sponsor for a specific show</h5>
                    <p><a class="btn btn-info" href="https://www.zeffy.com/en-US/ticketing/sponsorship-for-the-gondoliers-2">Sponsor</a></p>
                    </div>
               </div>
               </div>
               </main>

          <!-- Footer -->
          <?php include 'includes/footer.php'; ?>

          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     </body>

     </body>
</html>
