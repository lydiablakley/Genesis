<?php

// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in
?>
   
   
<!doctype html>   
<html lang="en">
<head>
   <!-- stylesheet linked -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- title of webpage identified -->
    <title>Genesis</title>
    
    <!-- navigation bar styled, this is taken from https://www.w3schools.com/css/css_navbar.asp -->
    <style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
    background-color: #333;
    width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
 
        /* calculator animation styled, this is from https://www.sitepoint.com/community/t/div-slide-or-animate-on-view-when-page-load/294086/2 */ 
.wrap {
  overflow-x:hidden;
}
        
    /* defines that the animation will slide in from the right */
.slideInRight {
  animation-name: slideInRight;
}
        /* the animation will take one second to slide in */
.animated {
  animation-duration: 1s;
  animation-fill-mode: both;
}

        /* the animation will come across 100% of the webpage, if I wanted the animation to come from halfway then I would specify 50% */
@keyframes slideInRight {
  from {
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

}
</style>

    
 
</head>
<body>


<ul>
   <!-- navigation bar using HTML unordered list feature -->
  <li><a href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a href="carbonhacks.php">CARBON HACKS</a></li>
<li><a class="active" href="advice.php">ADVICE</a></li>
  
</ul>
     <!-- div to style the text in the CSS, this allows the text to be 50% of the webpage -->  
    <div class="advicebody" id="advicebody">
<br><br>
   
<!-- wrap specified in the style section -->
   <div class="wrap">
       
<!-- slide in animation specified with the heading class, this is defined in the style section above -->
       <h3 class="slideInRight animated" style="padding:10px">Don't forget to try our calculator to get tailored advice to you!  <br>
 
<!-- link to the calculator -->
        <a href="quizzer/index.php" >Calculator</a></h3><br>

        </div>

<!-- div to style the text in the CSS, this allows the text to be 50% of the webpage -->  
    <div class="advicesize">

    <h3>Use reusable water bottles</h3>
    <p> Did you know, plastic bottles contain plastic fibres? This means you are consuming plastic. Currently only 23% of plastic water bottles in the USA are recycled. Using resuable water bottles will reduce waste and also help you save more money!</p>
    <br>

    <h3>Change your lightbulbs to low energy LED versions</h3>
    <p>Low energy LED lightbulbs last up to times longer than normal lightbulbs. They use less electricity while emitting the same amount of light as your usual lightbulb. This will help you reduce your carbon footprint, especially if used for all lights in your home!</p>
    <br>

    <h3>Cycle to work instead of drive</h3>
    <p>Although cycling to work instead of driving is healthy for you it is also better for the environment. Cycling emits no greenhouse gases, it also reduces noise pollution and congestion. Cycling also reduces the need for large car parks and roads, this then leads to the reduce of green spaces being used for development. </p>
    <p>Lots of cities now have bike rental schemes in place to utilize, alongside lots of bike routes. Lots of work places are also offering cycle to work schemes. Cycling in most european countries has not become the norm.</p>
    <br>
    
    <h3>Walk short journies instead of drive</h3>
    <p>Similar to cycling, walking is healthy for you and it also protects the environment as it emits no greenhouse gases. Walking instead of driving will also reduce noise pollution and congestion on the roads.</p>
    <br>
     
    <h3>Use reusable bags instead of plastic ones</h3>
    <p>Using resuable bags will help to clean up the environment, espeically animal habitats, in parks and oceans. In fact, using resuable bags instead of plastic ones could save the lives of more than 1,000,000 seabirds and 100,000 marine animals every year.</p>
    <br>
        
    <h3>Turn radiators down or off in rooms that aren't occupied</h3>
    <p>Using radiators less will save you money,however it will be better for your home environment as radiators produce moisture in the room which can then cause damp and mould. A geothermal heating system is a more environmentally friendly way to heat up your home.</p>
    <br>

    <h3>Lower the setting on your boiler by a few degrees</h3>
    <p>This will to save money but also help protect our environment as household boilers utilise carbon monoxide which is a poisonous gas. If a boiler becomes faulty it can emit gas which when in contact with other gases could seriously harm your health and the environment. A good solution to this would be a geothermal heating system.</p>
    <br>
        
    <h3>Lower the setting on your room thermostat by one degree</h3>
    <p>Turning down the setting on your thermostat will reduce the energy you use, helping to protect our environment. This will also help to save you money!</p>
    <br>
  
      
    </div>
 
  <h3>Please rate our advice  
 <!-- this includes the rating.php file into this webpage which will show the star rating section -->
<br><br><?php    include 'rating.php';
    ?></h3>
  
    </div>
  <p>  Copyright &copy; 2020, Genesis </p>
    </body>
</html>