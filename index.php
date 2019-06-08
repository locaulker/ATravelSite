<?php $page_id = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>A Travel Site</title>
  <?php include dirname(__FILE__) . '/includes/head.inc.php'; ?>
</head>
<body>
    <?php include dirname(__FILE__) . '/includes/header.inc.php'; ?>

    <div class="uk-slidenav-position" data-uk-slideshow="{
      autoplay:false,
      autoplayInterval: 3000,
      duration: 1000,
      animation: 'fade',
      kenburns: true
    }">
    <ul class="tm-home-slideshow uk-slideshow uk-slideshow-fullscreen">
      <li><img src="/assets/images/slider/sunrise.jpg"/>
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
          <div>
            <h1 class="uk-heading-large">Your Next Adventure Awaits</h1>
            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
            <a href="#" class="uk-button uk-button-primary uk-button-large tm-button-huge">Book Now</a>
          </div>
        </div>
      </li>
      <li><img src="/assets/images/slider/seine-river.jpg"/>
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
          <div>
            <h1 class="uk-heading-large">Have A Fabulous Vacation</h1>
            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
            <a href="#" class="uk-button uk-button-primary uk-button-large tm-button-huge">Book Now</a>
          </div>
        </div>
      </li>
      <li><img src="/assets/images/slider/couple_1.jpg"/></li>
      <li><img src="/assets/images/slider/couple_2.jpg"/></li>
      <li><img src="/assets/images/slider/couple_3.jpg"/></li>
    </ul>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
      <li data-uk-slideshow-item="0"><a href=""></a></li>
      <li data-uk-slideshow-item="1"><a href=""></a></li>
      <li data-uk-slideshow-item="2"><a href=""></a></li>
      <li data-uk-slideshow-item="3"><a href=""></a></li>
      <li data-uk-slideshow-item="4"><a href=""></a></li>
    </ul>
  </div>

  <!-- HomePage Contents Starts here -->
  <div class="uk-block uk-block-secondary uk-contrast">
    <div class="uk-container uk-container-center">
      <h2 class="uk-h1 uk-text-center">Some of Our Awsome Packages</h2>
        <div class="uk-grid">

          <div class="uk-width-medium-1-3">
            <div class="uk-panel uk-panel-box">
              <div class="uk-panel-teaser">
                <img src="/assets/images/packages/cabanas.jpg" alt="">
              </div>
              <h3 class="uk-panel-title">Island Hoping</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime libero dignissimos expedita repellendus tenetur perferendis sed modi esse autem unde quis pariatur totam, fugiat harum tempore minus reiciendis sequi laborum.</p>
              <p><a href="" class="uk-button uk-button-primary">Book Now</a></p>
            </div>
          </div>
          <div class="uk-width-medium-1-3">
            <div class="uk-panel uk-panel-box">
              <div class="uk-panel-teaser">
                <img src="/assets/images/packages/elephant.jpg" alt="">
              </div>
              <h3 class="uk-panel-title">African Safari</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime libero dignissimos expedita repellendus tenetur perferendis sed modi esse autem unde quis pariatur totam, fugiat harum tempore minus reiciendis sequi laborum.</p>
              <p><a href="" class="uk-button uk-button-primary">Book Now</a></p>
            </div>
          </div>
          <div class="uk-width-medium-1-3">
            <div class="uk-panel uk-panel-box">
              <div class="uk-panel-teaser">
                <img src="/assets/images/packages/couple_2.jpg" alt="">
              </div>
              <h3 class="uk-panel-title">Couple's Special</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime libero dignissimos expedita repellendus tenetur perferendis sed modi esse autem unde quis pariatur totam, fugiat harum tempore minus reiciendis sequi laborum.</p>
              <p><a href="" class="uk-button uk-button-primary">Book Now</a></p>
            </div>
          </div>
          

        </div>
    </div>
  </div>






    <?php include dirname(__FILE__) . '/includes/footer.inc.php'; ?>
</body>
</html>