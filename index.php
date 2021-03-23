<?php
include 'Classes.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Innoraft Services</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
<div class="Container">
  <div class="Intro">
    <p>
      Innoraft has been successfully delivering web and mobile solutions to esteemed global clientele. Our key solutions include website design and development, Drupal development and maintenance, mobile app design and development, and E-Commerce solutions. The quality-driven processes for all these services is our USP and we live by them every single day. We love to work with startups, small, medium, and large scale enterprises in the same way i.e. as partners.
    </p>
  </div>

  <div class="info" id="webdesign">
    <div class="img1">
      <?php
      $img_url = image(15, $data, $url);
      echo "<br><br><img src = '{$img_url}' height=400 width=500/>"; ?>
    </div>
    <div class="txt-cover">
      <div class="txt">
        <h1><span>website design & </span>development</h1>
        <div class="icons-cover">
          <div class="icons">
            <?php
            $img_url = image(10, $data, $url);
            echo "<img src = '{$img_url}' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php
            echo '<img src = "https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/icon-g4.png"  height=50 width=50/>'; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/icon-d1_0.png' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-08/H9IAAYru_400x400%20%282%29.png' height=50 width=50/>"; ?>
          </div>
        </div>
        <ul>
          <li><a href="https://www.innoraft.com/services/progressive-web-application"><?php echo title(2,$data); ?></a></li>
        </ul>
        <button><a href="https://www.innoraft.com/services/web-design-development">Explore More</a> </button>
      </div>
    </div>
  </div>


  <div class="info" id="drudev">

    <div class="txt-cover">
      <div class="txt">
        <h1><span>Drupal Development </span>& Maintenance</h1>
        <div class="icons-cover">
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-08/H9IAAYru_400x400.png' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/icon-g6.png' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-08/H9IAAYru_400x400%20%281%29.png' height=50 width=50/>"; ?>
          </div>
        </div>
      <ul>
        <li><a href="https://www.innoraft.com/services/website-development-using-drupal-9-cms"><?php echo title(7,$data); ?></a></li>
        <li><a href="https://www.innoraft.com/services/migration-d8-or-d9"><?php echo title(0,$data); ?></a></li>
        <li><a href="https://www.innoraft.com/services/support-maintenance-drupal-websites"><?php echo "Support & Maintenance of Drupal Websites"; ?></a></li>
        <li><a href="<?php echo body($x,$data,$url); ?>"><?php echo title(11,$data); ?></a></li>
      </ul>
      <button><a href="https://www.innoraft.com/services/drupal-development-maintenance">Explore More</a> </button>
      </div>
    </div>
    <div class="img1">
      <?php
      $img_url = image(12, $data, $url);
      echo "<br><br><img src = '{$img_url}' height=400 width=500/>"; ?>
    </div>
  </div>

  <div class="info" id="mobileapp">
    <div class="img1">
      <?php
      $img_url = image(13, $data, $url);
      echo "<br><br><img src = '{$img_url}' height=400 width=500/>"; ?>
    </div>
    <div class="txt-cover">
      <div class="txt">
        <h1><span>mobile app</span> development</h1>
        <div class="icons-cover">
          <div class="icons">
            <?php
            $img_url = image(8, $data, $url);
            echo "<img src = '{$img_url}' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php
            $img_url = image(1, $data, $url);
            echo "<img src = '{$img_url}' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php
            $img_url = image(9, $data, $url);
            echo "<img src = '{$img_url}' height=50 width=50/>"; ?>
          </div>
        </div>
        <ul>
          <li><a href="https://www.innoraft.com/services/hybrid-mobile-app"><?php echo title(3,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/android-mobile-app"><?php echo title(1,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/ios-mobile-app"><?php echo title(8,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/ecommerce-mobile-app"><?php echo title(9,$data); ?></a></li>
        </ul>
        <button><a href="https://www.innoraft.com/services/mobile-app-development">Explore More</a> </button>
      </div>
    </div>
  </div>



  <div class="info" id="ecommerce">

    <div class="txt-cover">
      <div class="txt">
        <h1><span>Ecommerce</span> Web Solutions</h1>
        <div class="icons-cover">
          <div class="icons">
            <?php
            $img_url = image(5, $data, $url);
            echo "<img src = '{$img_url}' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/drupal%20commerce.jpeg' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/woo.png' height=50 width=50/>"; ?>
          </div>
          <div class="icons">
            <?php

            echo "<img src = 'https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-08/1200px-Shopify_logo_2018%20%282%29.png' height=50 width=50/>"; ?>
          </div>
        </div>
        <ul>
          <li><a href="https://www.innoraft.com/services/shopping-cart-development"><?php echo title(10,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/ecommerce-website-design-development"><?php echo title(4,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/marketplace-development"><?php echo title(5,$data); ?></a></li>
          <li><a href="https://www.innoraft.com/services/product-catalog-microsite-development"><?php echo title(6,$data); ?></a></li>
        </ul>
        <button><a href="https://www.innoraft.com/services/ecommerce-web-development">Explore More</a></button>
      </div>
    </div>
    <div class="img1">
      <?php
      $img_url = image(14, $data, $url);
      echo "<br><br><img src = '{$img_url}' height=400 width=500/>"; ?>
    </div>
  </div>



</div>
</body>
</html>
