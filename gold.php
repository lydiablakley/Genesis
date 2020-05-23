<?php
// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in

include 'quizzer/database.php';

?>
      
    
<!doctype html>   
<html lang="en">
<head>
    
    <!-- Stylesheet Linked -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- J-Query cdn linked so that the library for the JavaScript function is available on this specific webpage -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
 <title>Genesis</title>
    
 <script>

$(document).ready(function(){

      var list = $(".list li");
    // amount of the list to be currently shown before button is pressed, 3 items
      var numToShow = 3;
    // button with ID learnmore defined
      var button = $("#learnmore");
    // number of list items is defined by the length of the lsit
      var numInList = list.length;
    // the remaining part of the list will be hidden
      list.hide();
        // if the number of list items is more than the amount of list items shown then the button will be visible
      if (numInList > numToShow) {

        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          // when the learnmore button is clicked the list will then become visible
          var showing = list.filter(':visible').length;
          // list is to be faded in
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          // if the amount of items in the list currently shown is more than or equal to the amount of items in the list then the button will be hidden
          if (nowShowing >= numInList) {
           
            button.hide();
          }
      });

});;
     
</script>

</head>
<body>
<!-- style of navigation bar is defined in the CSS, it is taken from https://www.w3schools.com/css/css_navbar.asp -->
<ul id="nav" class="nav">
  <li2><a href="index.php">HOME</a></li2>
  <li2 id="1" class="1"><a href="quizzer/index.php">CALCULATOR</a></li2>
  <li2 id="1" class="1"><a href="carbonhacks.php">CARBON HACKS</a></li2>
<li2 id="1" class="1"><a class="active" href="advice.php">ADVICE</a></li2>
 
</ul>
    <img src="images/goldbadge.png" class="goldbadge" id="goldbadge">
<div class="advicesize" id="advicesize">
<h1>Advice for Gold Badge Holders</h1>

<h3>Congratulations on achieving a Gold Badge. Here at Genesis we believe there is always room for improvement. Here are somethings you may have never considered before which could help make a great impact to our Earth</h3>
<br><br>
<h3>There are some Eco Friendly Airlines so next time you are going to book a holiday, look out for these!</h3>
    <p>Eco Friendly Airlines burn less fuel and result in less CO2 being released into the Earths atmospehere. Some eco friendly arlines also are paperless and don't use single use plastics on their flights. When booking a flight, look out for a green leaf beside it, that means it is eco friendly!</p>
    <p>Here is a list of some eco friendly airlines:</p>
    <div class="wrapper">
        
        <!-- ul class defined in JavaScript at top -->
	 <ul class="list">
     <li><p2>Alaska Airlines</p2></li>
         <li><p2>Delta Airlines</p2></li>
         <li><p2>American Airlines</p2></li>
         <li><p2>KLM</p2></li>
         <li><p2>United Airlines</p2></li>
         <li><p2>British Airways</p2></li>
   
  </ul><br>
        <!-- button id linked in JavaScript at top -->
  <button id="learnmore" class="info" title="Click to see more">More</button>
</div>
   
    

<h3>Have shorter showers!</h3>
    <p>Having shorter showers have 3 main benefits. Firstly, it will reduce the amount of water used, this then helps to save water as many countries are facing a water crisis today. Secondly, it will reduce the amount of energy used to heat the water, boilers use carbon monoxide to operate. Lastly, it will save you money!</p>
<br>
<h3>Don't participate in fast fashion trends</h3>
<p>Fashion trends are constantly changing, therefore more clothes are being produced and purchased than ever before. The fashion industry produces 10% of all humanity's carbon emissions. The fashion industry is the second-largest consumer of the world's water supply. Also, the fashion industry pollutes our oceans with microplastics, this is dangerous for marine animals. Cut down on the amount of clothes you buy or opt for recycled clothing which lots of popular clothing sites like Pretty Little Thing and Miss Guided have now introduced.</p><br>
    
    <h3>Grow more trees!</h3>
    <p>Trees help to purify the air by emitting oxygen which in turn helps to reduce the greenhouse gases. Perhaps support local missions to plant more trees in your area. Trees are a big part in protecting our environment as they contribute to climate control.</p>
    <br>
    
    <h3>Invest in solar panels</h3>
    <p>Fun fact: solar panels can reduce your carbon footprint by 80% in just one year! Solar panels gather energy from the sun and convert it intro electricity or hot water for your home. This means no green house gases are produced, helping to protect our environment. Solar panels are a great natural way to heat your home!</p>
    <br>
    
    <h3>Invest in a Geothermal Heating System</h3>
    <p>One main advantage of a geothermal heating system is that it does not product any carbon monoxide into your home! A geothermal heating system can be expensive to first purchase however the advantages of it are amazing. No fossil fuels are burned to produce heat therefore less greenhouse gases are emitting into the earth, helping to protect your environment.</p>
    <br>
    
    <h3>Harvest Rainwater</h3>
    <p>Although rainwater is renewable, the careless use of it has contributed to the water crisis in many countries. Collecting rain water in a tank at your home to then use for the washing dishes, watering plants, refilling fish tanks and many more will make a huge impact on saving water. If everybody did this, it would really help to elimate the water crisis many countries are facing.</p>
    <br>
    
    
    
    <h3>Please rate our advice  
        
      
<br><br>
        <!-- this includes the rating.php file into this webpage which will show the star rating section -->
    <?php    include 'rating.php';
    ?></h3>
    </div>
    
         <p>  Copyright &copy; 2020, Genesis </p>
       
    </body>
</html>