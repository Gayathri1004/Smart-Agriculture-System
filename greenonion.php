<?php 
include("fa1.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="sidenave.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Greenonion</title>
  <style>

p {
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 35px;
    margin-right: 0px;
}
}
   
  </style>
</head>
<body>

  <!-- navbar -->
  <header>
    <div class="nav-extended">
      <nav style="min-height: 100px ">
        <nav class="nav-wrapper black ">       
          <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
          <a href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
          <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up">
          <ul class="right hide-on-med-and-down">
            <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home</span> </a></li>
            <li><a href="faq.php"><i class="material-icons green-text right">forum</i><span>FAQ</span></a></li>
            <li><a href="news.php"><i class="material-icons green-text right">notes</i><span>News</span></a></li>
            <li><a href="soc_eco2.php"><i class="material-icons green-text right">account_balance</i><span>Socio-economy</span></a></li>
          </ul>       
        </nav>
      </nav>
    </div>
  </header>

  <ul class="sidenav" id="mobile-links">
        <li><a href="main.php">Home</a></li>
        <li><a href="login.php">Farmer account</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="soc_eco2.php">Socio-economy</a></li>
        <li class="divider"></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="update1.php">Update profile</a></li>
        <li><a href="changepass.php">Change password</a></li>         
        <li><a href="logout.php">Logout</a></li>     
        <li class="divider"></li>
		<li class="white"><a href="cropselection.php" class="waves-effect waves-blue"> Crop Selection</a></li>
		 <li class="white"><a href="calc1.php" class="waves-effect waves-blue"> Crop Calculator</a></li>
     <li class="white"><a href="index_chat.php" class="waves-effect waves-blue"> Chat Room</a></li>
		<li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"> Plant disease detector </a></li>
<li class="white"><a href="landprep.php" class="waves-effect waves-blue"> Land Peparation</a></li>
		<li class="white"><a href="varieties.php" class="waves-effect waves-blue"> Varieties</a></li>
		<li class="white"><a href="sowing.php" class="waves-effect waves-blue"> Sowing</a></li>
		<li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"> Manure and Fertilizers</a></li>
		<li class="white"><a href="weedicide.php" class="waves-effect waves-blue"> Weedicides</a></li>
		<li class="white"><a href="irrigate.php" class="waves-effect waves-blue"> Irrigation</a></li>
        <li class="white"><a href="harvest.php" class="waves-effect waves-blue"> Harvesting</a></li>
        <li class="white"><a href="exp.php" class="waves-effect waves-blue"> Explore</a></li>
  </ul>
 <!-- side navbar -->
  <ul id="sidenav-1 grey darken" class="sidenav sidenav-fixed">
    <li class="sidenav-header green">
      <div class="row">
          <div class="col s8">
            <a href="#" class="dropdown-trigger btn-flat waves-effect waves-light white-text" data-target="dropdown" data-activates="dropdown">
             <?php echo $rsedit[farmername]; ?> <i class="material-icons">arrow_drop_down</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
              <li><a href="update1.php"><i class="material-icons">create</i>Update profile</a></li>
              <li><a href="changepass.php"><i class="material-icons">help</i>Change password</a></li>
              <li class="divider"></li>
              <li><a href="logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </li>
<li class="white"><a href="cropselection.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Crop Selection</a></li>
	<li class="white"><a href="calc1.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Crop Calculator</a></li>
  <li class="white"><a href="index_chat.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">chat</i> Chat Room</a></li>
	<li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">find_in_page</i>Plant disease detector</a></li>

	<li class="white"><a href="landprep.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Land Peparation</a></li>	
    <li class="white"><a href="varieties.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Varieties</a></li>
	<li class="white"><a href="sowing.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Sowing</a></li>
	<li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Manure and Fertilizers</a></li>
	<li class="white"><a href="weedicide.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Weedicides</a></li>
	<li class="white"><a href="irrigate.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Irrigation</a></li>
	<li class="white"><a href="harvest.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Harvesting</a></li>
	<li class="white"><a href="exp.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">explore</i> Explore</a></li>
  </ul>

  <div id="page-container">
  <div class="content">
      <div id="content-wrap">
        
          <!-- all other page-content -->
        <div class="section center">
          <h3 class="center">SMALL ONIONS</h3><br>
		  <img class="responsive" src="greenonion.jpg" style="width:300px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br>
		  <b>Introduction:</b>
          Small onion is one of the most important commercial vegetable crops grown in Tamil Nadu .Small onion accounts for nearly 75 percent of the total onion produced in Tamil Nadu with a productivity of 12 tonnes per hectare.
			<br><br>
			<b>Land preparation:</b>
		    Plough the land to a fine tilth and form ridges and furrows at 45 cm spacing.Prepare thesoil to a fine texture for good germination.<br>
          Soils that are poorly drained can go for raised beds of 15 to 20 cm high and 100 cm wide for planting, this helps to improve water drainage.<br>
          Sow the bulbs on both the sides of the ridges at 10 cm apart.

		   <br><br>
		   <b>Climate:</b>
		   Onion grows under a wide range of climatic conditions but mild season without great extremes of heat or cold or excessive rainfall is best suited. It requires a temperature of 12-25??C before bulbing and 15.6-21. loC for bulb formation.
			<br><br>
			<b>Soil:</b>
			Red loam to black soils with good drainage facilities is highly suited for small onion cultivation.
			<br><br>
			<b>Sowing:</b>
			<br>Time of sowing:</b>October to November is the optimum time for sowing <br><b>
                Spacing:</b> Rows of 20 cm spacing and 12 cm between plants<br>
                <b>Method of sowing:</b> Planting is done at 6 rows in each bed, thereby it accommodates 55,560 plants in one hectare. Irrigation is done after transplanting or planting the bulbs. Complete wetting is necessary to maintain uniform moisture level.
                
			 <br><br>
			<b>Irrigation:</b>
            Irrigate at the time of planting of seedlings and third day and later at weekly intervals.<br>
            Withhold irrigation 10 days before harvest.
   
			<br><br>
			<b>Harvest:</b>
			Harvesting is done by pulling out plants when tops are drooping but still green.During hot days when soil is hard, bulbs are pulled out with a hand-hoe.12-16 t/ha in 70 to 90 days.18 t/ha in 90 days for CO (On) 5 onion. Clean and dry the bulbs for 4 days in shade soon after harvest.
			<br><br>
 
			
		</p>
  </div>
  </div>

  
<footer id="footer" >
 <footer class="page-footer black ">
  <div class="container">
    <div class="row">
      <div class="col  l6 s12  ">
        <ul >
          <li><a class="green-text text-lighten-3 text-indent:"-5em";" href="aboutus.php">About us</a></li>
          <li><a class="green-text text-lighten-3" href="contactus.php">Contact us</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright green darken-4 ">
      <div class="container center">Copyright &copy; 2020 Developed By ARES</div>
    </div>
  </footer> 
  </footer>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.modal').modal();
$('.dropdown-trigger').dropdown();
$('.sidenav').sidenav();
});
  </script>
  </body>
  </html>