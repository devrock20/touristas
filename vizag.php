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
<title>Vizag</title>

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
         <li class="w3-right"><a class="w3-hover-red w3-white" href="index.php"><h1 id="1"><?php echo $_SESSION['myValue'];?></h1></a></li>

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
        <h1 align="center" class="w3-text-red">Vishakapatnam</h1>
        <p>
              Visakhapatnam, which is popularly referred to as Vizag, is named after God Vaishaka. The city is a port city, located along the shores of Bay of Bengal and is headquarters to the Eastern Naval Command of the Indian Navy. Although considered to be an industrial city, Vizag has a rich and vibrant culture and heritage. The city was part of the ancient Kalinga Empire and was ruled by renowned kings, such as Ashoka and Krishnadeva Raya. During the 18th century, the city was a Dutch colony. Today, Vizag embraces its past and present seamlessly, making it an interesting and attractive city to spend holidays. 
        </p>
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/Araku_valley_view.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Araku valley</h2>
  <p>
      Located at a height of 3,200 feet in the midst of the hills of Anantagiri, Araku Valley is a beautiful and enchanting hill station. The salubrious climate, musically gurgling streams, the rainbow-creating waterfalls and lush green landscape can offer a memorable escape from the city life. The valley is located about 112 kilometres from Visakhapatnam. Araku Valley is home to 19 indigenous tribes and offers a wonderful opportunity to get insights into the lifestyle of these tribes and their culture and traditions.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Borra_Cave.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Borra caves</h2>
  <p>
  These caves are located 1,400 metres above sea level in Visakhapatnam's Anantagiri area. The caves are famous for their beautiful stalagmite and stalactite formations. Borra Caves have both religious and historical significance. The locals flock to the caves to worship a Shivalinga and an idol of Kamadenu, the divine bovine goddess of Hindu mythology. This idol is located deep inside caves. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/kailasagiri-park.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>KAILASAGIRI TEMPLE</h2>
  <p>
     Hill station of Kailash Giri is a popular tourist destination and getaway. It offers an awe-inspiring view of the Bay of Bengal and is home to the beautiful Rushikonda Beach and RK Beach. The surrounding hills are lush and green and offer a wonderful respite from the concrete jungle of Visakhapatnam. One of the attractions of Kailash Giri is its huge park called the Floral Watch. This park is shared like a watch and covered with grass. However, the main attraction is undoubtedly the massive statues of Lord Shiva and Goddess Parvati made from white marble. 
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Ramakrishna-Beach-Visakhapatnam2.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>RAMAKRISHNA BEACH</h2>
  <p>
 Located along the coast of Vizag, Rama Krishna Beach is known for its pristine sands and crystal clear waters of the Bay of Bengal. It is adjoining the Lawson's Bay Beach and offers awe-inspiring natural views and vistas. The beach is perfect for catching mesmerising sunsets and sunrises. The beach is home to the Kali Temple, VUDA Park, a submarine museum and several roadside eateries and restaurants. While the Rama Krishna Beach is not safe for swimming, there are many attractions and activities to keep visitors busy.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/inskursua.jpeg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>INS Kursura</h2>
  <p>
      INS Kursura (S20) was a Kalvari-class diesel-electric submarine of the Indian Navy. She was India's fifth submarine. Kursura was commissioned on 18 December 1969 and was decommissioned on 27 February 2001 after 31 years of service
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/vimu.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Visakha Museum</h2>
  <p>
     Visakha Museum is a museum located in the port city of Visakhapatnam in Andhra Pradesh, India which houses the historical treasures and artifacts of the Kalingandhra region
  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to Vizag either by bus,plane,train,or road.
           You can use the following links to book tickets 
        </p>
        <br>
        <br>
        <div class="row custompad w3-padding-right">
        
        <img onclick="myHotel()"class='imagepad w3-hover-opacity'   src="icons/hotel.png" height="150" width="150">
        <img onclick="myTrain()"class='imagepad w3-hover-opacity' src="icons/train-xxl.png" height="150" width="150">
        <img onclick="myFlight1()"class='imagepad w3-hover-opacity' src="icons/departing-flight-icon-3634.png" height="150" width="150">
         <img onclick="myBus()"class='imagepad w3-hover-opacity' src="icons/BusIcon.png" height="150" width="150">
        </div>
        
    </div>
    
    
    
    
</div>
</body>
</html>

