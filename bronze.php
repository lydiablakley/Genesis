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
    <!-- Stylesheet Linked -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- title for browser tab -->
     <title>Genesis</title>
     <!-- style for the navigation bar, taken from https://www.w3schools.com/css/css_navbar.asp -->
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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
</style>
</head>
<body>
<!-- navigation bar using HTML unordered list feature -->
<ul>
    
  <li><a href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a href="carbonhacks.php">CARBON HACKS</a></li>
<li><a class="active" href="advice.php">ADVICE</a></li>
 
</ul>
    <img src="images/bronzebadge.png" class="bronzebadge" id="bronzebadge">
         <!-- div to style the text in the CSS, this allows the text to be 50% of the webpage -->  
<div class="advicesize" id="advicesize">
    <h1>Advice for Bronze Badge Holders</h1>
    <h3>Congratulations on achieving a Bronze Badge. Here at Genesis we believe there is always room for improvement. Here are somethings you may have never considered before which could help make a great impact to our Earth</h3>
    <br><br>
    
    <h3>Stop using plastic straws, switch to paper or metal straws</h3>
    <p>Most plastic straws break into small particles which release chemicals into the soil, air, and water. These chemicals can be to plants, people, and the environment. However, the chemicals can be especially harmful to animals and can even kill them. Plastic straws are destroying our ocean. Lots of restaurants are now using paper straws however to save the environment even more you can purchase metal reusbale straws.</p>
    <br>
   
    <h3>Use reusable bags instead of plastic ones</h3>
    <p>Using resuable bags will help to clean up the environment, espeically animal habitats, in parks and oceans. In fact, using resuable bags instead of plastic ones could save the lives of more than 1,000,000 seabirds and 100,000 marine animals every year.</p>   
    <br>
    
    <h3>Do not litter!</h3>
    <p>Litter wastes our natural resources. It is vey likely animals will mistake litter in the ocean as food and could choke on them or get tangled up on it. Animals that consume litter can pick up germs from it, they then become the carriers of these germs and transfer it to humans, making them sick. Recycle whenever possible!</p>
    <br>
    
    <h3>Print as little as possible</h3>
    <p>Printing paper produces a large amount of waste. Paper uses up all our earths natural resources such as water, trees, and nonrenewable fossil fuels. Printing will also release air pollution into our environment. Avoid printing when possible, switching for digital options.</p>
    <br>
    
    <h3>Reduce the amount of time spent on electronics (Phone, Tablet, TV, Gaming Device etc.)</h3>
    <p>Charging your samrtphone produces carbon dixonide, which is a greenhouse gas thought to cause global warming. Also these personal electronic devices contain lead, mercury and cadmium which when they are burned or left at landfill sites, instead of being deposed properly, they will release dangerous toxins into the air and water, damaging our environment.</p>
    <br>
   
    <h3>Put leftover food in compost</h3>
    <p>Composting has many many benefits! Firstly, it will save landfill space, this means natural green areas won't be destroyed to make more landfill sites. Composting also helps to save water as the soil will hold moisture, this also minimises wind and water erosion. Composting food will add nutrients to the compost which helps with the growth of microorganisms, insects and earthworms. </p>
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