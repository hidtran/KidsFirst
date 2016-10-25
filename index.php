
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kevin Duong - Home</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>

<?php include 'header.php' ?>
  <!-- Carousel
   ================================================== -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img class="first-slide" src="css/img/carousel1.jpeg" alt="First slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>First Slide</h1>
             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           </div>
         </div>
       </div>
       <div class="item">
         <img class="second-slide" src="css/img/carousel2.jpeg" alt="Second slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>Second Slide</h1>
             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         </div>
         </div>
       </div>
       <div class="item">
         <img class="third-slide" src="css/img/carousel3.jpeg" alt="Third slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>Third Slide</h1>
             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           </div>
         </div>
       </div>
     </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div><!-- /.carousel -->

   <div id="courses">
      <!-- Marketing messaging and featurettes
   ================================================== -->
   <!-- Wrap the rest of the page in another container to center all the content. -->

   <div class="container marketing">
     <div class="row">
       <div class="col-md-4 contactIcon">

         <img class="img-circle" src="css/img/little_girl.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Who We Are</h2>
		 <div align = "justify">
			 <p><b>Kids First</b> is an interactive educational program designed to meet the specific needs of children whose parents are separated or divorced.</p>
		</div>
         <p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-md-4 contactIcon">
         <img class="img-circle" src="css/img/laughing.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>What We Do</h2>
         <div align = "justify">
			 <p><b>Kids First</b> provides a safe place for all family members to learn skills that will for parents and children on how to adapt during and after divorce.</p>
		</div>
         <p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-md-4 contactIcon">
         <img class="img-circle" src="css/img/2kids.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Register Today</h2>
		 <div align="justify">
			<p><b>Kids First</b> is an important commitment to yourself and your child. For Registration and Fee Information, go to our <font color = 'green'>Registration page</font>.
				  For Program Dates, see our <font color='green'>Program Schedule.</font></p>
			   <p>For additional information, or to speak with the Registration Coordinator, please call: <b>714-604-6439.</b></p>
		</div>
         <p><a class="btn btn-default" href="#" role="button">Registration &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
    </div>
  </div>
   <hr class="featurette-divider">

   <div id="testimonials" class="container">
     <h2>Testimonials</h2>
     <blockquote>
     <p>"Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."</p>
     <footer>John Doe</footer>
     <blockquote>
   </div>

<?php include 'footer.php' ?>


</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/home.js"></script>
</html>
