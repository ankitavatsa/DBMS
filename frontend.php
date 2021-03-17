<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MINI PROJECT</title>
<link rel="stylesheet" href="frontend.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<!------navigation------>
<selection id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../adminpanel/sanitary-towel.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#nav-bar">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup2.php">CALENDAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">OUR SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">OUR TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#promo">RATE US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#precautions">PRECAUTIONS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
          </ul>
        </div>
      </nav>
</selection> 
<!------slider------>
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../adminpanel/p1.png" class="d-block w-100" height="580">
    </div>
    <div class="carousel-item">
      <img src="../adminpanel/p2.png" class="d-block w-100" height="580">
    </div>
    <div class="carousel-item">
      <img src="../adminpanel/p4.png" class="d-block w-100" height="580">
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--------------about---------->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       <div class="aboutus"> <h1>About Us</h1></div>
        <div class="about-content">
       <h3> Hey beautiful ladies out there,,</h3>
       <h4> Welcome to "Red days" a website designed for you to keep a record of your menstrual cycle and can consult to 
       the gynaecologist when needed.</h4>
       <h4> Remembering the dates of menstrual cycle every month is very difficult but now don't worry "Red days" is here to support
        you every month. </h4>
       <h4>You can also predict your next menstrual date by following some simple steps(signup/login->calculator/calendar->enter 
       cycle length and period start date).</h4>
       <h4>So, what are you waiting for? </h4>
      <h3>Signup fast and join our Red days' family.</h3>
        </div>
        </div>
        <div class="col-md-6">
        <div class="column"style="margin-top:5%">
        <img src="../adminpanel/a8.jpg" style="width:250px;height:270px;margin-left:5%">
        <img src="../adminpanel/o.jpg" style="width:250px;height:270px;margin-bottom:3%">
        <img src="../adminpanel/o1.jpg" style="width:250px;height:270px;margin-left:5%">
        <img src="../adminpanel/a7.jpg" style="width:250px;height:270px;margin-bottom:3%">
       </div>
      </div>
    </div>
  </div>
</section>
<!--------services----->
<section id="services">
  <div class="container">
   <h1>Our Services</h1>
    <div class="row services">
      <div class="col-md-3 text-center">
        <div class="icon">
        <a href="signup2.php">  <i class="fa fa-calendar"  style="color:white"></i>  </a>
        </div>
        <h3>Calendar</h3>
        <p style="font-size:16px">In order for this period calender/calculator to work correctly, you need to input
         basic information about your menstrual cycle by signing up to "RED DAYS".</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon">
        <a href="mood2.php">  <i class="fa fa-smile-o"  style="color:white"></i> </a>
        </div>
        <h3>Mood</h3>
        <p style="font-size:16px">Do you feel mood swings during periods? 
         Not to worry now you can enter your mood to know your constant.</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon">
        <a href="symptoms2.php"> <i class="fa fa-medkit"  style="color:white"></i>  </a>
        </div>
        <h3>Symptom</h3>
        <p style="font-size:16px">Hey, do you want to know the symptom during your periods?
         You can just click the icon and enter your symptom.</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon">
        <a href="Gynaecologist2.php">  <i class="fa fa-user-md"  style="color:white"></i> </a>
        </div>
        <h3>Help</h3>
        <p style="font-size:16px">Are you facing trouble during your menstruation?
        We are here to help you out so that you can contact to the gynaecologist when needed.</p>
      </div>
    </div>
  </div>
</section>
<!-------------team member--------->
<section id="team">
  <div class="container">
    <h1>Our Team</h1>
    <div class="row">
      <div class="col-md-6 profile-pic text-center">
        <div class="img-box">
          <img src="../adminpanel/mili.jpg" class="img-responsive" width="180" height="200">
          <ul>
            <a href="https://www.facebook.com/akanksha.roy.984"><li><i class="fa fa-facebook"></i></li></a>
            <a href="https://twitter.com/voguishstunner/"><li><i class="fa fa-twitter"></i></li></a>
            <a href="https://www.linkedin.com/in/akanksharoy04"><li><i class="fa fa-linkedin"></i></li></a>
          </ul>
        </div>
        <h2>Akanksha Roy</h2>
        <h3>Student</h3>
        <p>Innovator, Fashionista, Firefighter</p>
      </div>
      <div class="col-md-6 profile-pic text-center">
        <div class="img-box">
          <img src="../adminpanel/ankita.jpeg" class="img-responsive" width="180" height="200">
          <ul>
            <a href="https://www.facebook.com/ankita.vatsa.7355"><li><i class="fa fa-facebook"></i></li></a>
            <a href="https://twitter.com/ankitavatsa4/"><li><i class="fa fa-twitter"></i></li></a>
            <a href="https://www.linkedin.com/in/ankita-vatsa-960b40170"><li><i class="fa fa-linkedin"></i></li></a>
          </ul>
        </div>
        <h2>Ankita Vatsa</h2>
        <h3>Student</h3>
        <p>Hardworking, Sincere, Learner </p>
      </div>
    </div>
  </div>
</section>
<!-------------promo------>
<section id="promo">
  <div class="container">
    <h1 style="color:white">Rate Us</h1>
    <p style="font-size:16px">Don't want to interrupt but  your smile is important want to know your view.</p>
    <div class="rate" style="margin-left:3%">
    <center>
    <a href="sad.php"><i class="fa fa-frown-o" style="font-size:80px;margin-right:5%;color:white"></i></a>
     <a href="happy.php"><i class="fa fa-meh-o" style="font-size:80px;margin-right:5%;color:white"></i></a>
      <a href="veryhappy.php"><i class="fa fa-smile-o" style="font-size:80px;margin-right:5%;color:white"></i></a>
      </center>
</div>
  </div>
</section>
<!--------precautions------>
<section id="precautions">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       
      </div>
      <div class="col-md-6">
        <div class="preacautions"> <h1>Precautions</h1></div>
         <div class="precautions-content">
     <h4> How to Feel Better on Your Periods:</h4> 
     <ul style="font-size:1.2rem">  
   <li>  Take a warm bath.</li>
   <li> Place a hot water bottle on lower abdomen or lower back.</li>
   <li> Change your sanitary napkin.</li>
   <li> Have lots of veggies and fruits in your diet.</li>
   <li> Keep track of your period.</li>
   <li> Do an easy exercise like yoga, walking, or swimming to help increase blood flow.</li></ul>
    <h4>Things to Avoid during Periods:</h4>
    <ul style="font-size:1.2rem">
    <li>  Avoid Caffeine, Sugar, Fatty meat & fried foods, Dairy, Processed & salty foods.</li>
    <li> Avoid Waxing.</li>
    <li> Avoid using cleansers with artificial fragrances to clean the vaginal part.</li>
    <li> Avoid pain killers during periods.</li>
    <li> Don’t ignore any symptoms.</li></ul>
         </div>
        
       </div>
       <div class="col-md-6">
        <div class="column"style="margin-top:-105%">
        <img src="../adminpanel/b1 (2).jpg" style="width:250px;height:270px;margin-left:5%">
        <img src="../adminpanel/b2.jpg" style="width:250px;height:270px;margin-bottom:3%">
        <img src="../adminpanel/b3.jpg" style="width:250px;height:270px;margin-left:5%">
        <img src="../adminpanel/b4.jpg" style="width:250px;height:270px;margin-bottom:3%">
       </div>
      </div>
    </div>
  </div>
</section>

<!---------testimonials------->
<section id="testimonials">
  <div class="container">
    <h1>Testimonials</h1>
    <p class="text-center">Anything is possible when you have the right people there to support you.</p>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="../adminpanel/hod.jpeg" class="user">
          <blockquote>Motivation comes from working on things we care about.</blockquote>
            <h3>Prof. S.K. GUPTA <span>HOD,CSE Department,BTI</span></h3>

        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="../adminpanel/k.jpeg" class="user">
          <blockquote>Don't try to be original, 
          just try to be good.</blockquote>
            <h3>Mrs. KUSUMA S <span>Project Guide</span></h3>

        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="../adminpanel/r.jpeg" class="user">
          <blockquote>The TIME is always right...
          to do what is RIGHT.</blockquote>
            <h3>Mr. Rohith Vaidya <span>Class Co-ordinator</span></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!----------get in touch-------->
<form action="" method="post">
<section id="contact">
  <div class="container">
    <h1>Get In Touch</h1>
    <div class="row">
      <div class="col-md-6">
        <form class="Contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="Name" value="" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Id" name="Email" value="" required>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" rows="4" placeholder="Comments"
						name="Comments" value="" required></textarea>
          </div>
          <input class="button" style=" background-color: #e75480;border-color: #e75480; display: inline-block;
    font-weight: 400;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   " type="submit"
			name="submit" value="Submit"> 

          <?php
include 'connect.php';
if(isset($_POST['submit'])){
$Name=mysqli_real_escape_string($con,$_POST['Name']);
$Email= mysqli_real_escape_string($con,$_POST['Email']);
$Comments= mysqli_real_escape_string($con,$_POST['Comments']);

$Equery= "select * from signup where Email='$Email' ";
$query= mysqli_query($con,$Equery);
$Ecount=mysqli_num_rows($query);
if($Ecount==0){
    echo"Email does not match..";
}else{


$insertquery = "insert into feedback(Name,Email,Comments) values('$Name','$Email','$Comments')";
$iquery = mysqli_query($con,$insertquery);
if($iquery){

    ?>
<script> 
alert("insertion Successful");
</script>
<?php
}else{
 ?>
 <script> 
alert(" No Connection ");
</script>
<?php
}
}
}

?>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>Bangalore Technological Institute, Bangalore, IN</div>
        <div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+91 1234567890</div>
        <div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>reddaysservice@gmail.com</div>
        <div class="follow"><label><b>Get Social:</b></label>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------footer------>
<section id="footer">
  <div class="container text-center">
    <p>Made With <i class="fa fa-heart-o"></i> by Akanksha Roy & Ankita Vatsa</p>
  </div>
</section>
</body>
</html>