<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/aboutus.css">

    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Andika+New+Basic&family=Dancing+Script:wght@700&family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'inc/navbar.php'; ?>      
    <footer>
        <div class="image">
            <p>~ About Us ~</p>
            <img class="pic" src="images/aboutUsView.jpg">
        </div>
        <div class="text-2">
            <h2>Details&Others</h2>
            <p>The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make <br>
			great recommendations. These delicious smells are enough to make your mouth water and your stomach begin to growl.
               <br>
			   <br>
			   <br>
               This restaurant is situated in the heart of a semi-urban area near a motorsports academy. It is a favorite hangout for motorsports lovers.<br>
            The decor is a stunning mix of vintage sports cars, luxury, and modernity. Every table provides a clear view of the chef working in the<br>
           kitchen.Diners without reservation are invited to wait in a beautifully decorated lounge with comfortable armchairs and thematic artwork.<br>
                <br>
                <br>
                The first Michelin star ratings were given in 1926 – restaurants in France were awarded a single star if they
				were considered to be<br>
				“fine dining establishments”.
                In 1931 the rating system was expanded to become the Michelin three-star rating…  
				<br>
                <br>
                The Michelin star rating didn’t take hold in America until 2005 and concentrated solely on fine dining in New York.
                Tokyo, Hong Kong, and<br>Macau were added to the Guide between 2007-2008. It now covers 23 countries, with 14 editions sold in 90 countries around the world.
                <br>The Michelin Guide only touches on a small number of US cities – Chicago, New York, Los Angeles, Las Vegas, and San Francisco. 
                <br>
               </p>
				
				 
				 	 <?php
					 $string = 'Life is as aa restaurantt you can have anything you want as long as you are willing to pay the price.';
					 $patterns = array();
					 $patterns[0] = '/as/';
					 $patterns[1] = '/aa/';
					 $patterns[2] = '/restaurantt/';
					 $replacements = array();
					 $replacements[2] = 'like';
					 $replacements[1] = 'a';
					 $replacements[0] = 'restaurant';
					 echo preg_replace($patterns, $replacements, $string);
					 ?>
					 <br>
					 <br>
					 <br>
        </div>
    </footer>