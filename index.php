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
    <link href="./style.css" rel="stylesheet">

    <title>Frontend Mentor | Social proof section</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body class="desktop_desk_background">

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
          $rating_reviews = new Rating;
          $rating_reviews -> publish_rating('Rated 5 Stars in Reviews', 5);
        ?>
        <?php
          $rating_guru = new Rating;
          $rating_guru -> publish_rating('Rated 5 Stars in Report Guru', 4);
        ?>
        <?php
          $rating_bestTech = new Rating;
          $rating_bestTech -> publish_rating('Rated 5 Stars in BestTech', 5);
        ?>
      </div>
    </main>

    <!-- LAST FLOOR -->
    <aside>
      <div class="testimony_box">
        Colton Smith 
        Verified Buyer
        "We needed the same printed design as the one we had ordered a week prior.
        Not only did they find the original order, but we also received it in time.
        Excellent!"
      </div>

      
      Irene Roberts 
      Verified Buyer
      "Customer service is always excellent and very quick turn around. Completely
      delighted with the simplicity of the purchase and the speed of delivery."
      
      Anne Wallace 
      Verified Buyer
      "Put an order with this company and can only praise them for the very high
      standard. Will definitely use them again and recommend them to everyone!"

    </aside>
    
    <div class="attribution">
      Challenge by
      <a href="https://www.frontendmentor.io?ref=challenge" target="_blank"
        >Frontend Mentor</a
      >. Coded by <a href="#">Your Name Here</a>.
    </div>
  </body>
</html>
