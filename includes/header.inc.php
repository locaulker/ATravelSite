<nav class="uk-navbar main-nav">
  <div class="uk-container uk-container-center">
    <a href="" class="uk-navbar-brand uk-hidden-small">
      <img src="/assets/images/logo/logo.svg" alt="Logo" srcset="">
    </a>
    <ul class="uk-navbar-nav uk-hidden-small">
      <?php include dirname(__FILE__) . '/menu.inc.php'; ?>
    </ul>
    <div class="uk-navbar-flip uk-hidden-small">
      <ul class="uk-navbar-nav">
        <li><a href=""><i class="uk-icon-twitter"></i></a></li>
        <li><a href=""><i class="uk-icon-facebook"></i></a></li>
        <li><a href=""><i class="uk-icon-youtube-play"></i></a></li>
      </ul>
    </div>

    <a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-content uk-navbar-center uk-visible-small">
      <a href="" class="">
        <img src="/assets/images/logo/logo.svg" alt="Logo" srcset="">
      </a>
    </div>
  </div>
</nav>
<div id="offcanvas-nav" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
      <?php include dirname(__FILE__) . '/menu.inc.php'; ?>
    </ul>
  </div>
</div>