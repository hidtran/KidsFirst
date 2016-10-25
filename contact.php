
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

  <div id="contactJumbo" class="jumbotron">
  </div>
  <div class="jumbotext">
    <h1>Contact Us</h1>
    <hr>
    <h2>Give Us A Call.</h2>
  </div>
   <div class="container">
       <h3 class="center">Directions</h3>
       <hr class="small">
       <div id="map">My map will go here</div>
  </div>
   <hr class="featurette-divider">
  <div class="container">
    <h3 class="center">Contact</h3>
    <hr class="small">
    <p class="center">
      Kid's First Support can be contaced through the channels below.
    </p>
    <div id="contact" class"row">
      <div class="col-md-4 contactIcon">
          <img class="img-circle" src="css/img/emaild.png">
          <p>admin@kidsfirstoc.org</p>
      </div>
      <div class="col-md-4 contactIcon">
        <img class="img-circle" src="css/img/phone.png">
        <p>714-604-6439</p>
      </div>
      <div class="col-md-4 contactIcon">
          <img class="img-circle" src="css/img/mail-icon.png">
          <p>18685 Main Street #A-467</br>Huntington Beach, CA 92648</p>
      </div>
    </div>

  </div>
   <hr class="featurette-divider">
  <div class="container">
    <h3 class="center">Have a Question?</h3>
    <hr class="small">
    <p class="center">We would love to hear from you. Send us a Message!</p>
    <form class="form-inline center">
        <div class="form-group">
          <label class="sr-only" for="firstName">First Name</label>
          <input type="email" class="form-control" id="firstName" placeholder="First Name">
        </div>
        <div class="form-group">
          <label class="sr-only" for="lastName">Last Name</label>
          <input type="password" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        <p>
          <div class="form-group">
            <label class="sr-only" for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="phoneNumber">Phone Number</label>
            <input type="password" class="form-control" id="phoneNumber" placeholder="Phone Number">
          </div>
        </p>
        <p>
          <label class="sr-only" for="comment">Comment</label>
          <textarea class="form-control" rows="5" cols="45" id="comment" placeholder="Send a message.."></textarea>
        </p>
        </br>
        <button id="contactButton" type="submit" class="btn btn-default">Send</button>
    </form>
  </div>

<?php include 'footer.php' ?>


</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Google Maps-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDovUE3550eYSBPNRK2a7ahQPLx3Srk-2Y&callback=initMap"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/home.js"></script>
</html>
