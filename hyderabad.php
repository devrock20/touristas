<?php
 session_start();
         $_SESSION['myValue'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
<title>Hyderabad</title>

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
        <h1 align="center" class="w3-text-red">Hyderabad</h1>
        <p>
            Hyderabad is the capital city of the Indian state of Telangana. The city is a hub for film industry, world-class public and private hospitals, Central and State Level Research Institutions, Information Technology industry, Biotech and Pharma industry and many public sector entities.
        </p>
        
        
        
        
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/char.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Charminar</h2>
  <p>
  Charminar is a monument and a mosque, considered synonymous with the history of Hyderabad and was completed in 1591 CE. 
  It is a landmark monument of Hyderabad and it is believed that Mohammed Quli Qutub Shahi, the fifth sultan of the Qutub Shahi dynasty had built this monument to commemorate the end of a deadly plague menace that had gripped the city then.
  It is located near the banks of the river Musi. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/qutub-shahi-tombs.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Qutub-shai tombs</h2>
  <p>
 Built in the memory of the departed kings of Golconda, they are magnificent monuments that have withstood the test of time and nature’s vagaries. They are located one kilometer north of Golconda Fort’s which is called Banjara Darwaza.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/salarjungmuseum.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Salarjung Musem</h2>
  <p>
 Situated close to the Musi River, the Salarjung Museum in Hyderabad has a unique distinction as the third largest museum in India and earned a worldwide fame for its largest one-man collection of antiques. It is a home for the prized collections from different civilizations. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/mecca-masjid.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Mecca Masjid</h2>
  <p>
 Mecca Masjid, located in the heart of Hyderabad’s bustling old city, adjacent to Charminar in a finds place among the largest mosques in India and is the most important and largest one in Hyderabad city. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/golconda-fort.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Golconda</h2>
  <p>
 Golconda Fort is located in the western part of Hyderabad city which occupies an area of three square kilometers, and is approximately 4.8 kilometers in length. It was initially a mud fort under the reign of the Raja of Warangal that was then fortified between 14th and 17th centuries by the Bahmani Sultans followed by the Qutub Shahi dynasty. Golconda was the principal capital of the Qutub Shahi kings and a bustling centre for administration and commerce in its heydays, a fact which has been mentioned by many historians in detail. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/birla-mandir.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Birla-Mandir</h2>
  <p>
 The sparkling white structure visible through skyline of modern Hyderabad, Birla Mandir is located near Hussain Sagar Lake in Hyderabad, atop the Kala. The Birlas had built this temple in 1976 with white marbles procured from Rajasthan. The temple is dedicated to Sri Venkateswara. 
  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to hyderbad either by bus,plane,train,or road.
           You can use the following links to book tickets 
        </p>
        <br>
        <br>
        <div class="row custompad w3-padding-right">
        
            <img onclick="myHotel()" class='imagepad w3-hover-opacity'   src="icons/hotel.png" height="150" width="150">
            <img onclick="myTrain()" class='imagepad w3-hover-opacity' src="icons/train-xxl.png" height="150" width="150">
        <img onclick="myFlight1()"class='imagepad w3-hover-opacity' src="icons/departing-flight-icon-3634.png" height="150" width="150">
        <img onclick="myBus()" class='imagepad w3-hover-opacity' src="icons/BusIcon.png" height="150" width="150">
        </div>
        
    </div>
    
    
    
    
</div>
</body>
</html>
