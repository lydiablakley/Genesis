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
    <img src="images/silverbadge.png" class="silverbadge" id="silverbadge">
         <!-- div to style the text in the CSS, this allows the text to be 50% of the webpage -->  
<div class="advicesize" id="advicesize">
<h1>Advice for Silver Badge Holders</h1>
    <h3>Congratulations on achieving a Silver Badge. Here at Genesis we believe there is always room for improvement. Here are somethings you may have never considered before which could help make a great impact to our Earth</h3>
    <br><br>
    
    <h3>By loose fruit and vegetables rather than prepackaged ones</h3>
    <p>Using loose fruit and vegetablesare cheaper than prepackaged ones so this willsave oyu money alongside saving the enviornment. Most packaging is plastic and are disposed of in landfill sites. They stay in the environment for a long time, this means they are taking up space in landfill sites which could result in more landfill sites being created, destroying green areas. Also, if this plastic packaging is littered then it could be harmful for animals.  </p>
    <br>
    
    <h3>Eat more organic foods</h3>
    <p>Eating more organic foods will help to support organic farming. This farming helps to create more a healthy soil which is more resistant to drought and floods. This also then helps with the impacts of climate change. Organic farmers use more natural resources to stop pests and diseases, this will reudce the need for them to use chemicals which can negatively impact our environment.</p>
    <br>
   
    <h3>Consider eating less meat</h3>
    <p>A main disadvantage to consuming lots of meat is that the meat farms take up so much land. Green areas can be destroyed to be used as meat farms. Meat production also contributes to our Earths pollution through the use of fossil fuels and animal methane.</p>
    <br>
    
    <h3>Consider consuming less dairy products</h3>
    <p>Similar to avoiding meat products, consuming less dairy products is on of the biggest ways to help our environment. In fact, without meat and dairy production, farmlands could be reduced by more than 75%. Similar to meat production, dairy production also contributes to polluting our earth with fossil fuels.</p>
    <br>
   
    <h3>Reduce the amount of time spent on electronics (Phone, Tablet, TV, Gaming Device etc.)</h3>
    <p>Charging your samrtphone produces carbon dixonide, which is a greenhouse gas thought to cause global warming. Also these personal electronic devices contain lead, mercury and cadmium which when they are burned or left at landfill sites, instead of being deposed properly, they will release dangerous toxins into the air and water, damaging our environment</p>
    <br>
   
    <h3>Switch to cruelty free makeup products</h3>
    <p>Firstly, cruelty free makeup products can be better for you! It is scientifically proven that the ingredients are alot safer than those used in products tested on animals, hence why they have to be tested on animals! Help protect these animals by switching to cruelty free skincare and makeup products wherever possible.</p>
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