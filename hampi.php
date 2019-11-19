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
<title>Hampi</title>

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
        <h1 align="center" class="w3-text-red">Hampi</h1>
        <p>
            The former capital of the Vijayanagara Empire, Hampi remains an essential religious hub, housing the Virupaksha, Lakshmi Narasimha, Hemakuta Hill, Big Shivlinga and Vithala temples. The architectural ruins of Hampi are a UNESCO World Heritage Site. Rock-climbing enthusiasts will adore Hampi, considered the bouldering capital of India, and the city’s rocky landscape, dotted with ancient temple ruins, makes for a unique climbing experience.
        </p>
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/arc.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Archaeological Museum</h2>
  <p>
      The Archaeological Museum of Hampi is one of the principal attractions of the place that houses collections of sculptures and assorted antiques. Although a lot of these findings were made by the British officers who stored them in elephant stables, the Archaeological Survey of India established this museum and started shifting the antiques in 1972.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/hum.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>HANUMAN TEMPLE</h2>
  <p>
This Hampi Temple is located 4 km from Hampi and is believed to be the birth place of Lord Hanuman. This Monkey Temple is basically a small concrete structure consisting of a granite carved statue of Lord Hanuman along with a small shrine of Lord Rama and his wife Devi Sita. As you reach the main site, a flight of granite steps lead you inside the temple.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/re.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>ROYAL ENCLOSURE</h2>
  <p>
 The present day fortified area or the Royal Enclosure of Hampi was once the seat of power of the Vijaynagara rulers. In current times this Royal Enclosure is basically a wide open ground consisting of a number of small shelters.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Stone-Charriot-at-Hampi.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Vithala Temple Complex</h2>
  <p>
     This is perhaps the most famous and well-known among the ruins of Hampi. The iconic stone chariot in the vicinity of this temple complex is a symbol of Karnataka Tourism. Unfortunately it had a brick tower above it which was demolished. Of late, floodlights have been installed in the temple complex that provide illumination at dusk, thereby adding to the grandeur of the architecture.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Elephant_Stables,_Hampi.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Elephant stables  </h2>
  <p>
 Elephant stables used to house the eleven royal elephants in King Krishnadeva Raya's army. The neighbouring building housed the elephant riders of the royal elephants.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/hazara-rama-temple.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Hazara Rama Temple Complex</h2>
  <p>
 This ruined temple complex is well known for elaborate frescoes from the Hindu theosophy and a sprawling courtyard well-laid with gardens. It is well known for more than many thousand carvings & inscriptions on & in the temple depicting the mighty story of Ramayana. It has about 1000 carvings & inscriptions depicting the story of Ramayana
  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to Hampi either by bus,plane,train,or road.
           You can use the following links to book tickets 
        </p>
        <br>
        <br>
        <div class="row custompad w3-padding-right">
        
        <img onclick="myHotel()"class='imagepad w3-hover-opacity'   src="icons/hotel.png" height="150" width="150">
        <img onclick="myTrain()" class='imagepad w3-hover-opacity' src="icons/train-xxl.png" height="150" width="150">
        <img onclick="myFlight1()"class='imagepad w3-hover-opacity' src="icons/departing-flight-icon-3634.png" height="150" width="150">
         <img onclick="myBus()"class='imagepad w3-hover-opacity' src="icons/BusIcon.png" height="150" width="150">
        </div>
        
    </div>
    
    
    
    
</div>
</body>
</html>

