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
    
    <!-- as I don't have Genesis written on the website, I've made the title on the browser Genesis -->
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
    
    <!-- navigation bar using the HTML unordered list feature -->
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a href="carbonhacks.php">CARBON HACKS</a></li>
<li><a class="active" href="advice.php">ADVICE</a></li>

</ul>
    
    <!-- static text giving advice on how to protect the enivronment.
         All of the heading and paragraph tags are styled within the css file. -->
<h1>Advice for those who did not achieve a Badge</h1>
    
    <!-- width for the paragraphs are styled in the css file with the class advice size, all paragraphs are 50% of the webpage. This also works within different browsers and when resizing webpage, making it responsive. -->
        <img src="images/nobadge.png" class="nobadge" id="nobadge">
<div class="advicesize">


        <h3>Use reusable water bottles</h3>
        <p> Did you know, plastic bottles contain plastic fibres? This means you are consuming plastic. Currently only 23% of plastic water bottles in the USA are recycled. Using resuable water bottles will reduce waste and also help you save more money!</p>
        <br>
          
        <h3>Use reusable bags instead of plastic ones</h3>
        <p>Using resuable bags will help to clean up the environment, espeically animal habitats, in parks and oceans. In fact, using resuable bags instead of plastic ones could save the lives of more than 1,000,000 seabirds and 100,000 marine animals every year.</p>
        <br>
        
        <h3>Reduce the amount of time spent on electronics (Phone, Tablet, TV, Gaming Device etc.)</h3>
        <p>Charging your samrtphone produces carbon dixonide, which is a greenhouse gas thought to cause global warming. Also these personal electronic devices contain lead, mercury and cadmium which when they are burned or left at landfill sites, instead of being deposed properly, they will release dangerous toxins into the air and water, damaging our environment</p>
        <br>
        
        <h3>Eat more organic foods</h3>
        <p>Eating more organic foods will help to support organic farming. This farming helps to create more a healthy soil which is more resistant to drought and floods. This also then helps with the impacts of climate change. Organic farmers use more natural resources to stop pests and diseases, this will reudce the need for them to use chemicals which can negatively impact our environment.</p>
        <br>
        
        <h3>Put leftover food in compost</h3>
        <p>Composting has many many benefits! Firstly, it will save landfill space, this means natural green areas won't be destroyed to make more landfill sites. Composting also helps to save water as the soil will hold moisture, this also minimises wind and water erosion. Composting food will add nutrients to the compost which helps with the growth of microorganisms, insects and earthworms. </p>
        <br>
    
        <h3>Use as little paper as possible</h3>
        <p>Paper uses up all our earths natural resources such as water, trees, and nonrenewable fossil fuels. Printing paper will release air pollution into our environment. Avoid printing and using paper when possible. Try switching for digital options.</p>
        <br>
        
        <h3>Cycle to work instead of drive</h3>
        <p>Although cycling to work instead of driving is healthy for you it is also better for the environment. Cycling emits no greenhouse gases, it also reduces noise pollution and congestion. Cycling also reduces the need for large car parks and roads, this then leads to the reduce of green spaces being used for development. </p>
        <p>Lots of cities now have bike rental schemes in place to utilize, alongside lots of bike routes. Lots of work places are also offering cycle to work schemes. Cycling in most european countries has not become the norm.</p>
        <br>
    
</div>
    
<h3>Please rate our advice 
<!-- this includes the rating.php file into this webpage which will show the star rating section -->
<br><br><?php    include 'rating.php';
    ?></h3>
     <p>  Copyright &copy; 2020, Genesis </p>
</body>
</html>