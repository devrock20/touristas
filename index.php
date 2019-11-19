<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/W3css.css">
       
        <title>group project</title>
       
    
    </head>
    <body>
        <?php
        session_start();
         $_SESSION['myValue'];
        ?>
        
        <div class="w3-content" style="max-width:100%">
      <div class="w3-display-container w3-text-white ">
          <img class="mySlides" src="images/925039153s.jpg" height=700 width="1400">
          <img class="mySlides" src="images/Hyderabad 1080p Wallpapers 1.jpg" height=700 width="1400"  >
          <img class="mySlides" src="images/bangalore01-big.jpg" height=700 width="1400"  >
          <img class="mySlides" src="images/beach_tropics_sea_sand_palm_trees_sunset_evening_84730_1920x1080.jpg" height=700 width="1400"  >
          <img class="mySlides" src="images/city.jpg" height=700 width="1400"  > 
          <img class="mySlides" src="images/head_img-82.jpeg" height=700 width="1400"  > 
          <img class="mySlides" src="images/mountains_grass_trees_day_summer_93030_602x339.jpg" height=700 width="1400"  > 
          <img class="mySlides" src="images/summer_mountains_nature_lake_river_grass_93164_2560x1600.jpg" height=700 width="1400"  >        
          <img class="mySlides" src="images/vizag-beach-view.jpg" height=700 width="1400"  > 
          <div class="w3-display-topleft w3-container w3-text-white"> 
           <ul class="w3-navbar w3-large">
  <li><a class="w3-hover-red" href="#">Touristas</a></li>

</ul>

</div>
  <div class="w3-display-topright w3-container w3-text-white">
               <ul class="w3-navbar w3-large ">
                   <li><?php echo $_SESSION['myValue'];?>
                   <li><a class="w3-hover-red " href="login1.php">Sign in</a></li> 
                   <li><a class="w3-hover-red " href="registration.php">Sign up</a></li> 
                   <li><a class="w3-hover-red" href ="Logout.php">Log Out</a>
               </ul>
                
            </div>
                   </div>
      </div>
         <script>
                var myIndex = 0;
                  carousel();

               function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
        
       
        <div class="w3-row-padding w3-margin-top">

         <div class="w3-third">
            <div class="w3-card-4">
                <a href="hyderabad.php">
                <img  src="images/charminar.jpg" style="width:100%">
                </a>
                   <div class="w3-container">
                        <h5>Hyderabad</h5>
                
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
    <a href="bangalore.php">
    <img src="images/20bangalore.jpg" style="width:100%">
    </a>
<div class="w3-container">
<h5>Bangalore</h5>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
    <a href="vizag.php">
        <img src="images/kailasagiri-park.jpg" style="width:100%"></a>
<div class="w3-container">
<h5>Vishakhapatnam</h5>
</div>
</div>
</div>

</div>
<div class="w3-row-padding w3-margin-top">

<div class="w3-third">
<div class="w3-card-4">
    <a href="Goa.php">
    <img src="images/beach_tropics_sea_sand_palm_trees_sunset_evening_84730_1920x1080.jpg" style="width:100%">
    </a>
<div class="w3-container">
<h5>Goa</h5>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
    <a href="hampi.php">
        <img src="images/925039153s.jpg" style="width:100%"></a>
<div class="w3-container">
<h5>Hampi</h5>
</div>
</div>
</div>
    

<div class="w3-third">
<div class="w3-card-4">
    <a href="delhi.php">
    <img src="images/Delhi_Metro_2790707g.jpg" style="width:100%">
    </a>
<div class="w3-container">
<h5>Delhi</h5>
</div>
</div>
</div>
</div>
        
        <div class="w3-row">
            <div class="w3-container w3-red">
                <p>
                  This Website helps the user in choosing a place or city,where he wants to visit. It also helps the user in choosing the right restaurants, hotels, sightseeing places, book flight tickets etc. All the basic facilities required for a tourist are listed in this website
                    
                </p>
             
            </div>
           
        </div>
        
        <div class="w3-row-padding">
            <div class="w3-container">
                <h4 align="center">About Us</h4>
            </div>
            <div class="w3-third">
<div class="w3-card-4">
    <img src="" style="width:100%">
<div class="w3-container">
<h5>Satya Dev</h5>
<h6>Developer</h6>
</div>
</div>
</div>

         
        <div class="w3-third">
<div class="w3-card-4">
    <img src="" style="width:100%">
<div class="w3-container">
<h5>P Dhruveeth</h5>
<h6>Documentation</h6>
</div>
</div>
</div>
   
      <div class="w3-third">
<div class="w3-card-4">
    <img src="" style="width:100%">
<div class="w3-container">
<h5>Jaswanth Reddy</h5>
<h6>Resources</h6>
</div>
</div>
</div>   
        </div>
  
    </body>
</html>
