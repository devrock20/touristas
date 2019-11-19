<?php

session_start();
         $_SESSION['myValue'];

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
<title>Bangalore</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/W3css.css">



<style>
    .custom-colour{
        background-color: #2b2d2e;
        color: white;
    }
    .custompad{
        padding-left: 190px;
    }
    .imagepad{
        padding: 5px;
    }
</style>
<script>
   function fg23(){
      var div = document.getElementById("dom-target");
    var myData = div.textContent;
      return myData;
  }
   
function myHotel(){
    var regex_mail=/([_][a-z][A-Z][0-9])*(@)([a-z])*(.)([a-z])*/g;
    if(fg23().match(regex_mail)){
    window.open("https://in.hotels.com");
           }
           else{
                 alert("You Must be logged in");   
        }
           
    }

function myTrain(){
     var regex_mail2=/([_][a-z][A-Z][0-9])*(@)([a-z])*(.)([a-z])*/g;
      if(fg23().match(regex_mail2)){
    window.open("https://www.irctc.co.in/eticketing/loginHome.jsf");
           }
           else{
                 alert("You Must be logged in");   
        }
    
}
function myBus(){
     var regex_mail3=/([_][a-z][A-Z][0-9])*(@)([a-z])*(.)([a-z])*/g;
     if(fg23().match(regex_mail3)){
    window.open("https://www.redbus.in");
     }
     else{
                 alert("You Must be logged in");   
        }
}
function myFlight1(){
     var regex_mail4=/([_][a-z][A-Z][0-9])*(@)([a-z])*(.)([a-z])*/g;
     if(fg23().match(regex_mail4)){
          window.open("https://www.makemytrip.com");
     }
         else{
                 alert("You Must be logged in");   
        }
        
        }




</script>



</head>
<body>

<div class="w3-container w3-teal w3-text-white">
     <ul class="w3-navbar w3-large ">
         <li><a class="w3-hover-red w3-white" href="index.php"><h1>Back</h1></a></li>
          <li class="w3-right"><a class="w3-hover-red w3-white" href="index.php"><h1><?php echo $_SESSION['myValue'];?></h1></a></li>

</ul>
    
</div>
    <div id="dom-target" style="display:none" >
    <?php 
        $output = $_SESSION['myValue']; //Again, do some operation, get the output.
        echo htmlspecialchars($output); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
    </div>
    
    
    
    
    

<div class="w3-content">
<div class="w3-row w3-margin">
        <h1 align="center" class="w3-text-red">Bangalore</h1>
        <p>
            South India's most alive city is Bangalore. A melting point of ethnic and cultural backgrounds, the hoi polloi is charmingly mixed here. Nearly every one speaks English, even if it’s only a smattering, and everyone is aware of the privilege they're bestowed with. Yes, every resident of Bangalore, regardless of where they're from, takes immense pride in their address. Malls, parks, pubs, theatre, cafes, art galleries, palaces - at any given point, Bangalore is buzzing and alive with activity. A bustling city today, Bangalore often reminisces about its days as a sleepy cantonment area of the British - tree lined avenues with quaint sounding names like Richmond Town and Victoria Layout hint that the city does get sentimental about its past. The Bangalore Palace, the Attara Kacheri (High Court), St. Mary’s Basilica, Tipu’s Palace, ISKCON Temple and the Bull Temple highlight Bangalore’s many personalities and are monuments that mark its journey, ante-IT.
        </p>
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/4611469-Vidhana_Soudha_Bangalore.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Vidhana Soudha</h2>
  <p>
  An imposing edifice housing the State Legislature and the Secretariat of Karnataka, this is one of the best known landmarks of Bangalore.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/793916941HighCourt_Main.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Attara Kacheri</h2>
  <p>
Overlooking Vidhana Soudha is this red brick and stone building in the Graeco-Roman style of architecture. It houses the state High Court.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/4473043277_d23c7257d0_z.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Visveswaraya Industrial & Technological Museum</h2>
  <p>
 This museum is dedicated to the memory of Sir M Visveswaraya, the architect of modern Karnataka. It provides a brief history of technological development in the country, and houses many technical inventions.
Kasturba Road,Bangalore 560 001
Tel: 080-2286 4009/ 4563 
Timings: 10 am to 6 pm, 
Entry: Rs.20
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/143784_Lalbagh Botanical Gardens_ Bangalore Attraction_11671.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Lalbagh Gardens</h2>
  <p>
     Lalbagh or Lalbagh Botanical Gardens, meaning The Red Garden in English, is a well known botanical garden in southernBengaluru, India. The garden was originally commissioned by Hyder Ali, the ruler of Mysore, and later finished by his son Tipu Sultan. It has a famous glass house which hosts two annual flower shows (26 January and 15 August). Lalbagh houses India's largest collection of tropical plants, has a lake, and is one of the main tourist attractions in Bangalore
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/407023039_1a3b8420d9_z.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>ISKCON Temple </h2>
  <p>
 Built in an ornate architectural style, the Krishna Temple is a blend of modern technology and spiritual harmony.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/12bg_bgsss_cubb_12_2437451f.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Cubbon Park</h2>
  <p>
 Cubbon Park provides Bangaloreans with over 300 acres of sprawling greenery in the heart of the city. The park houses the State Library, an impressive, red Gothic structure, and is dotted with fountains, statues, flowering trees and shady groves.
  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to Bangalore either by bus,plane,train,or road.
           You can use the following links to book tickets 
        </p>
        <br>
        <br>
        <div class="row custompad w3-padding-right">
        
            <img onclick="myHotel()" class='imagepad w3-hover-opacity'   src="icons/hotel.png" height="150" width="150">
        <img onclick="myTrain()"class='imagepad w3-hover-opacity' src="icons/train-xxl.png" height="150" width="150">
        <img onclick="myFlight1()"class='imagepad w3-hover-opacity' src="icons/departing-flight-icon-3634.png" height="150" width="150">
         <img onclick="myBus()" class='imagepad w3-hover-opacity' src="icons/BusIcon.png" height="150" width="150">
        </div>
        
    </div>
    
    
    
    
</div>
</body>
</html>