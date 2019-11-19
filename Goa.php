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
        <h1 align="center" class="w3-text-red">Goa</h1>
        <p>
            Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda.
        </p>
        
    </div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/basilica.jpg"  style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Bom Jesus Basilica</h2>
  <p>
The Bom Jesus Basilica, perhaps Goa's most famous church and among the most revered by Christians worldwide, is partially in ruins but still a model of simplicity and elegance, and a fine example of Jesuit architecture. 
This is the only church in Old Goa, which is not plastered on the outside, the lime plaster having been stripped off by a zealous Portuguese conservationist in 1950.

  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/photo_2015_03_16_21_34_54.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Dudhsagar Falls </h2>
  <p>
Dudhsagar Falls (literally Sea of Milk ) is a four-tiered waterfall located on the Mandovi River in the border of the Indian states of Karnataka and Goa. It is 60 km from Panaji by road and is located on the Madgaon-Belgaum rail route about 46 km east of Madgaon and 80 km south of Belgaum. Dudhsagar Falls is amongst India's tallest waterfalls with a height of 310 m(1017 feet) and an average width of 30 metres (100 feet).
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/aguada-fort-goa.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Fort Aguada</h2>
  <p>
 Fort Aguada and its lighthouse is a well-preserved seventeenth-century Portuguese fort standing in Goa, India, on Sinquerim Beach, overlooking the Arabian Sea. The fort was constructed in 1612 to guard against the Dutch and the Marathas. It was a reference point for the vessels coming from Europe at that time. This old Portuguese fort stands on the beach south of Candolim, at the shore of the Mandovi River. It was initially tasked with defense of shipping and the nearby Bardez sub district.
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
    <img src="images/secath.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Se Cathedral</h2>
  <p>
     The Sé Catedral de Santa Catarina, known as Se Cathedral, is the cathedral of the Latin Rite Roman Catholic Archdiocese of Goa and Daman and the seat of the Patriarch of the East Indies. It is located in Old Goa, India
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/Our-Lady-Of-The-Immaculate-Conception-Church-Goa-India.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Our Lady of the Immaculate Conception Church, </h2>
  <p>
The Our Lady of the Immaculate Conception Church is located in Panjim, Goa, India. The Church conducts mass every day in English, Konkani, and Portuguese
  </p>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="images/chapora-beach-goa4.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Chapora Beach </h2>
  <p>
Chapora Beach is a coastal village at Chapora River estuary lying alongside a beach stretch in North Goa that is around 10 km. from Mapusa, a City in Northern Goa. It is close to Chapora Fort, an old Portuguese fort
  </p>
</div>

</div>
    <div class="custom-colour">
        <p align="center" class="w3-text-white w3-padding-top w3-xlarge">
           You Can go to to Goa either by bus,plane,train,or road.
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

