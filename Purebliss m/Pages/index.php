
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Purebliss M</title>

<!--Title icon-->
<link rel="icon" href="../Images/title-icon-min.png">

<!--Css file or style sheet-->
<link rel="stylesheet" type="text/css" href="../Css/stylesheet.css">

<!--  FontAwesome link   -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<!--  FontAwesome Bootstrap CND  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--using FontAwesome---------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>


	<!--     style   ----->
	<style>
		body{
			font-family: "Times New Roman", Times, serif;
		}
	</style>

</head>
<body>

  <section id="home">
  	<!--navigation------------------------->
  	<nav>
  	<!--logo-->
  <a href="#" class="logo"><img src="../Images/title-icon-min.png" alt="icon" height="40px" weight="40px">Purebliss M</a>
  	<!--  menu  -->
  	<ul>
  	<li><a href="#home" class="active">Home</a></li>
  	<li><a href="#about">About</a></li>
    <li><a href="Services.php">Services</a></li>
    <li><a href="Gallary.php">Gallary</a></li>
  	<li><a href="#foot">Contact us</a></li>
  	</ul>
  	<!--bars--------------->
  	<div class="toggle"></div>

  	</nav>
    <!--text----------------------->
		<div class="text-container">
			<p> <img src="../Images/title-icon-min.png" alt="icon" height="100px" weight="100px"></p>

        <!--   Catch phrase/ Slogan     -->
		    <p>Purebliss M</p>
			<p>Where Nails <br>Become Art</p>
		</div>
	<!--model---------------------->
	<img alt="color" class="model" src="../Images/color thing.png">
</section id="about">
      <!--   About Us Container       -->
        <div class="about-container">
        	<!--img-->
        		<img src="../Images/image.png" alt="square"/>
        	<!--about-me-text-->
        		<div class="about-text">
        		<p>About</p>
        		<p>Purebliss M</p>
        		<p>is a fully equipped business that specializes on complete nail care for men and women.</p>
        		<p>  I provide high quality Manicure and Pedicure services while thriving to provide excellent professionalism and services.
              Workmanship, cleaniness and customer satisfaction is my promise to you.</p>
        		</div>
        	</div>

              <!-- Services  -->
    <section id="services">
          <!--services-container---------------------------->
	<div class="services ">
		<!--text-->
		<div class="services-text ">
	<p>Services</p>
	<p>Here Are the Services I provide</p>
			</div>
		<div class="box-container">
		<!--1------------->
			<div class="box-1">
			<p class="heading">Manicure</p>
			<a href="Services.php"> <button>Read More</button></a>
			</div>
	   <!--2------------->
			<div class="box-2">
			<p class="heading">Pedicure</p>
    	<a href="Services.php"> <button>Read More</button></a>
			</div>
		<!--3------------->
			<div class="box-3">
			<p class="heading">Polygel Nails</p>
			<a href="Services.php"> <button>Read More</button></a>
			</div>
      <!--3------------->
        <div class="box-4">
        <p class="heading">Soak Off Gel Manicure</p>
				<a href="Services.php"> <button>Read More</button></a>
        </div>
		</div>
	</div>
  </section>

  <!--Contact Us-->
        <!--footer--------------->
				<?php include '../Footer/foot.php'; ?>

            	<!--social-attach-bar-->
							<?php include '../Social Media Bars/social-attach-bars.php'; ?>
							<a href="#home" class="to-top">Back to top</a>


<!-------------------------------------------------------------------------------------------------------------------------------------->
        <!-- Javascript for the toggle changing to X--->
      <script type="text/javascript" src="../Javascripts/jqueryCode.js"></script>
    	<script type="text/javascript" src="../Javascripts/Toggle.js"></script>


       <!--Javascript for sidebar icon-->
       <script type="text/javascript" src="../Javascripts/jqueryCode.js"></script>
			 <script type="text/javascript" src="../Javascripts/SideNavBars.js"></script>

</body>
</html>
