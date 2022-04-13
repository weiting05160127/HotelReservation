<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Roxandrea Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  <style>
  .open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    opacity: 0.8;
    width: 380px;
    margin-left: 600px;
  }

  /* Add styles to the form container */
  .form-container {
    overflow: hidden;
    max-width: 300px;
    padding: 10px;
    background-color: white;
    margin-left: 650px;
    border: solid;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    border: solid;
  }

  select{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    border: solid;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }

  .popModal{
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0.8;
  position: fixed;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}

.modal-content{
  width: 300px;
  height: 300px;
  background-color: white;
  opacity: 1;
  border-radius: 4px;
  text-align: center;
  padding: 20px;
  position: relative;
}

.close{
  position: absolute;
  top: 0;
  right: 14px;
  font-size: 42px;
  transform: rotate(45deg);
  cursor: pointer;
}

  </style>
  </head>
  <body>

    <div class="hero">
      <div class="container-wrap d-flex justify-content-end align-items-end">
      </div>

      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate">
              <div class="text mb-5 pb-5">
                <h1 class="mb-3">Roxandrea</h1>
                <h2>More than a hotel... an experience</h2>
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate">
              <div class="text mb-5 pb-5">
                <h1 class="mb-3">Experience Epic Beauty</h1>
                <h2>Roxandrea Hotel &amp; Resort</h2>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
    </div>

<!-- Register form -->
  <br><br>
  <div id="flip"><button class="open-button">Register</button></div>
  <div id="Myform" style="display: none;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="passV" class="form-container">

      <label for="userName"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="userName" required>

      <label for="NRIC"><b>NRIC</b></label>
      <input type="text" placeholder="Enter NRIC" name="NRIC" required>

      <label for="email"><b>Email Address</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="State"><b>State</b></label>
      <select id="State" name="State">
        <option selected="selected">--Select--</option>
        <?php
$state = array("Johor", "Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Sabah", "Sarawak", "Selangor", "Terengganu");

foreach ($state as $item) {
    echo "<option value='strtoupper($item)'>$item</option>";
}
?>
      </select>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="verifyPsw"><b>Verify Password</b></label>
      <input type="password" placeholder="Confirm Password" name="confirm_password" required>

      <button type="submit" id="btnSub" name="btnSub" class="btn">Login</button>
    </form>
  </div>
<br><br>




<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Roxandrea</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by Colorlib .Downloaded from Themeslab
  </p>
          </div>
        </div>
      </div>
    </footer>

        <?php
if (isset($_POST['btnSub'])) {

    $Name = $_POST['userName'];
    $Ic = $_POST['NRIC'];
    $Email = $_POST['email'];
    $State = $_POST['State'];
    $Pass = $_POST['psw'];
    $VPass = $_POST['confirm_password'];

    function showState($State)
    {
        if ($State = "Johor") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Kedah") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Kelantan") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Malacca") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Negeri Sembilan") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Pahang") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Perak") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Perlis") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Sabah") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Sarawak") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Selangor") {
            $Hometown = "Your are from " . $State;
        } elseif ($State = "Terengganu") {
            $Hometown = "Your are from " . $State;
        } else {
            echo "Error input......";
        }
    }

    //Check gender
    function checkGender($numCard)
    {
        $gender = substr($numCard, 11);
        if ($gender % 2 == 0) {
            $userGender = "Your are female.";
        } else {
            $userGender = "You are male.";
        }

        return $userGender;
    }

    //check date of birth
    function checkDOB($numCard)
    {
        $DOBYear = substr($numCard, 0, 2);
        $DOBMonth = substr($numCard, 2, 2);
        $DOBday = substr($numCard, 4, 2);

        switch ($DOBMonth) {
            case '01':
                $month = "January";
                break;
            case '04':
                $month = "April";
                break;
            case '05':
                $month = "May";
                break;
            case '06':
                $month = "June";
                break;
            case '07':
                $month = "July";
                break;
            case '08':
                $month = "August";
                break;
            case '09':
                $month = "September";
                break;
            case '10':
                $month = "October";
                break;
            case "11":
                $month = "November";
                break;
            case '12':
                $month = "December";
                break;
            default:
                $month = "Wrong input!!!";
        }

        $DOBDisplay = "Your birth day is $DOBday $month $DOBYear.";

        return $DOBDisplay;
    }

    checkGender($Ic);
    echo "<br>";
    checkDOB($Ic);

    ?>
<!-- pop out modal -->
  <div class="popModal">
    <div class="modal-content">
      <div class="close">+</div>
        <center><img src="images/success.gif" width="100px" height="80px" ></center>
        <?php

    $output = $Name . "<br>your ic is " . $Ic . "<br>DOB: " . checkDOB($Ic) . "<br>Gender: " . checkGender($Ic) . "<br>Email: " . $Email . "<br>State: " . $State . "<br>Password: " . $Pass;
    echo $output;

    ?>
<label><?php echo $output; ?></label>
      <form action="">
        <a href="#" class="button">Ok</a>
      </form>
      <hr>

  </div>
<?php }?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>

<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#Myform").slideToggle("slow");
  });
});

document.getElementById('btnSub').addEventListener('click',function(){
document.querySelector('.popModal').style.display='flex';
});

/*document.querySelector('.close').addEventListener('click',function(){
  document.querySelector('.popModal').style.display='none';
});*/

$(document).ready(function() {
    $(document).on('submit', '#passV', function() {
      // do your things
submit();
      return false;
     });
});
</script>
</html>

