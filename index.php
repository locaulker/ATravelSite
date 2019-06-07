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
      autoplay:true,
      autoplayInterval: 3000,
      duration: 1000,
      animation: 'fade',
      kenburns: true
    }">
    <ul class="tm-home-slideshow uk-slideshow uk-slideshow-fullscreen">
      <li><img src="/assets/images/slider/sunrise.jpg"/>
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
          <div>
            <h1 class="uk-heading-large">Slide One</h1>
            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
            <a href="#" class="uk-button uk-button-primary uk-button-large">Book Now</a>
          </div>
        </div>
      </li>
      <li><img src="/assets/images/slider/seine-river.jpg"/>
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
          <div>
            <h1 class="uk-heading-large">Slide Two</h1>
            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
            <a href="#" class="uk-button uk-button-primary uk-button-large">Book Now</a>
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

    <?php include dirname(__FILE__) . '/includes/footer.inc.php'; ?>
</body>
</html>