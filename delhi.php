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
<title>Delhi</title>

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

<div class="w3-content">
<div class="w3-row w3-margin">
        <h1 align="center" class="w3-text-red">Delhi</h1>
        <p>
           A symbol of the country’s rich past and thriving present, Delhi is a city where ancient and modern blend seamlessly together. It is a place that not only touches your pulse but even fastens it to a frenetic speed. Home to millions of dreams, the city takes on unprecedented responsibilities of realizing dreams bringing people closer and inspiring their thoughts.
 
Just a century ago, the British moved the seat of their empire from Kolkata to Delhi. And it has been the Capital of India ever since. Now a thriving, cosmopolitan metro, the city has much to celebrate as it has already reached the milestone of completing 100 years as a Capital. With a history that goes back many centuries, Delhi showcases an ancient culture and a rapidly modernising country. Dotted with monuments there is much to discover here. The seat of many powerful empires in the past, its long history can be traced in its many carefully-preserved monuments, ancient forts and tombs.
 
        </p>
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/ingate.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>India Gate</h2>
  <p>
  At the centre of New Delhi stands the 42 m high India Gate, an "Arc-de-Triomphe" like archway in the middle of a crossroad. Almost similar to its French counterpart, it commemorates the 70,000 Indian soldiers who lost their lives fighting for the British Army during the World War I. The memorial bears the names of more than 13,516 British and Indian soldiers killed in the Northwestern Frontier in the Afghan war of 1919.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/IN_THMNI_PARLIAMEN_1284275f.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Parliament House</h2>
  <p>
The Parliament house is a cirular colonnaded building . It also houses ministerial offices,numerous committee rooms and an excellent library as well. Conceived in the Imperial Style, the Parliament House consists of an open verandah with 144 columns.

The domed circular central hall with oak paneled walls and the three semi circular buildings are used for the Rajya Shabha and Lok Shabha meetings.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Rashtrapati-Bhavan.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Rashtrapati Bhavan</h2>
  <p>
 Rashtrapati Bhavan, home to the President of the world’s largest democracy, is emblematic of Indian democracy and its secular, plural and inclusive traditions. It was designed by Sir Edwin Lutyens and Herbert Baker and stands on a 330 acre estate. It took seventeen years to build this presidential palace which was completed in the year 1929. Almost seven hundred million bricks and three million cubic feet of stone were used in building this architectural marvel that has 2.5 kilometers of corridors and 190 acres of garden area.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/qutubminar.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Qutab Minar</h2>
  <p>
 Qutab Minar is a soaring, 73 m-high tower of victory, built in 1193 by Qutab-ud-din Aibak immediately after the defeat of Delhi's last Hindu kingdom. The tower has five distinct storeys, each marked by a projecting balcony and tapers from a 15 m diameter at the base to just 2.5 m at the top. The first three storeys are made of red sandstone; the fourth and fifth storeys are of marble and sandstone. At the foot of the tower is the Quwwat-ul-Islam Mosque, the first mosque to be built in India.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Akshardham_Delhi.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Akshardham Temple </h2>
  <p>
 Swaminarayan Akshardham in New Delhi epitomizes 10,000 years of Indian culture in all its breathtaking grandeur, beauty, wisdom an d bliss. It brilliantly showcases the essence of India’s ancient architecture, traditions and timeless spiritual messages. The Akshardham experience is an enlightening journey through India’s glorious art, values and contributions for the progress, happiness and harmony of mankind.

  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/jama-masjid-delhi.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Jama Masjid</h2>
  <p>
 This great mosque of Old Delhi is the largest in India, with a courtyard capable of holding 25,000 devotees. It was begun in 1644 and ended up being the final architectural extravagance of Shah Jahan, the Mughal emperor who built the Taj Mahal and the Red Fort.

  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to Delhi either by bus,plane,train,or road.
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
