<?php
    require('./functions.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <link rel="stylesheet" media="screen and (max-width: 1900px) and (min-width: 421px" href="./style.css"> 
    <link rel="stylesheet" media="screen and (max-width: 420px" href="./style_mobile.css"> 

    <title>Frontend Mentor | Social proof section</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body class="background">

    <!-- FIRST FLOOR -->
    <main>
      <!-- TOP TITLE -->
      <div class="top_title">
        <h1 class="title">
          10,000+ of our users love our products.     
        </h1>
        <p class="punchline_text">
        We only provide great products combined with excellent customer service.
        See what our satisfied customers are saying about our services.
        </p>
      </div>

    <!-- RATING PART -->
      <div class="rating">
        <?php
          // Function in order to create a rating box with variant star and names
        	$rating_reviews = new Rating;
           	$rating_reviews -> publish_rating('Reviews', 5);         	
        ?>
        <?php
          $rating_guru = new Rating;
          $rating_guru -> publish_rating('Report Guru', 5);
        ?>
        <?php
          $rating_bestTech = new Rating;
          $rating_bestTech -> publish_rating('BestTech', 5);
        ?>
      </div>
    </main>

    <!-- LAST FLOOR -->
    <aside class="testimony">
      <?php
          // Function in order to create a testimony box with the name, if he/she's a verified buyer, the testimony and the profil picture
          $testimony_ColtonSmith = new Testimony;
          $testimony_ColtonSmith  -> publish_testimony('Colton Smith', true ,'"We needed the same printed design as the one we had ordered a week prior. Not only did they find the original order, but we also received it in time. Excellent!"', "image-colton.jpg" );
      ?>
      <?php
          $testimony_IreneRoberts = new Testimony;
          $testimony_IreneRoberts  -> publish_testimony('Irene Roberts', false ,'"Customer service is always excellent and very quick turn around. Completely delighted with the simplicity of the purchase and the speed of delivery."', "image-irene.jpg" );
      ?>
      <?php
          $testimony_AnneWallace = new Testimony;
          $testimony_AnneWallace  -> publish_testimony('Anne Wallace', true ,'"Put an order with this company and can only praise them for the very high standard. Will definitely use them again and recommend them to everyone!"', "image-anne.jpg" );
      ?>
    </aside>
    
    <div class="attribution">
      Challenge by
      <a href="https://www.frontendmentor.io?ref=challenge" target="_blank"
        >Frontend Mentor</a
      >. Coded by <a href="https://www.linkedin.com/in/lucas-z-8a286087/">LucasZuk</a>.
    </div>
  </body>
</html>
