<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\ParamsModel;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"> 
  
  <!-- Loader Landing Page -->
  <div id="ip-container" class="ip-container"> 
    <!-- initial header -->
    <header class="ip-header" >
      <div class="ip-loader">
        <div class="text-center">
          <div class="ip-logo"><img  src="img/logo.jpg" alt="logo"></div>
        </div>
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
        <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
        <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg> </div>
    </header>
  </div>
  <!-- Loader end -->
  

  
  <!-- HEADER -->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3  col-xs-12"> <a href="index.html" class="logo"> <img src="img/logo.jpg" width="305" height="76" alt="logo"/></a> </div>
        <div class="col-md-9  col-xs-12">
          <div class="right-header">
            <div class="col-right-header">
              <h5>Адрес</h5>
              <h4><a href="mailto:<?=ParamsModel::paramsList()['mail'];?>"><?=ParamsModel::paramsList()['mail'];?></a></h4>
            </div>
            <div class="col-right-header">
              <h5>Телефонная Поддержка</h5>
              <h4><?=ParamsModel::paramsList()['phone'];?></h4>
            </div>
            <div class="col-right-header">
              <a href="#tabs-section" class="btn btn-primary btn-lg" style="background: #526aff; border: none 0;">Обратный звонок</a>
            </div>
            <div class="top-cart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-nav ">
      <div class="container">
        <div class="row">
          <div class="col-md-12  col-xs-12">
            <form class="hidden-md  hidden-lg " id="search-global-mobile" method="get">
              <input type="text" value="" id="search-mobile" name="s" >
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="navbar yamm " >
              <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="#" class="navbar-brand">Menu</a> </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="dropdown"><a href="./">Home </a></li>
                  <li class="dropdown"><a href="./">Constructions<b class="caret"></b> </a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="home.html"> Home construction 1</a> </li>
                      <li> <a href="home2.html"  > Home construction 2</a> </li>
                      <li> <a href="home3.html"  > Home Boxed</a> </li>
                      <li><a href="home4.html"  > Home  Shop</a> </li>
                    </ul>
                  </li>
                  <li><a href="service.html"  > SERVICES <b class="caret"></b> </a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="about.html"> About Page</a> </li>
                      <li> <a href="service.html"> OUR SERVICES 1</a> </li>
                      <li> <a href="service2.html"  > OUR SERVICES 2</a> </li>
                      <li> <a href="service3.html"  > TECHNICAL ANALYSIS</a> </li>
                    </ul>
                  </li>
                  <li><a href="service.html"  > Our Works <b class="caret"></b> </a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="project1.html"  > PROJECT construction 1</a> </li>
                      <li> <a href="project2.html"  > PROJECT construction 2</a> </li>
                      <li> <a href="project3.html"  > PROJECT construction 3</a> </li>
                      <li> <a href="details.html"  > PROJECT DETAILS</a> </li>
                    </ul>
                  </li>
                  <li class=" yamm-fw"><a href="shop.html"  >Shop</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <h3 class="t1-title">Building Materials</h3>
                              <ul>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Builders Hardware</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Ceilings</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Concrete, Cement &amp; Masonry</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Drywall</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Fireplace &amp; Hearth</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Insulation</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <h3 class="t1-title"> Builders Hardware</h3>
                              <ul>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Roofing & Gutters</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Material Handling Equipment</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Moulding &amp; Millwork</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Plastic Sheets</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Roofing &amp; Gutters</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Safety Equipment</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <h3 class="t1-title">Moulding & Millwork</h3>
                              <ul>
                                <li> <a href="shop.html"><i class="fa fa-angle-right"></i>Moulding</a> </li>
                                <li> <a href="shop.html"><i class="fa fa-angle-right"></i>Moulding Packs</a> </li>
                                <li> <a href="shop.html"><i class="fa fa-angle-right"></i>Columns</a> </li>
                                <li> <a href="shop.html"><i class="fa fa-angle-right"></i>Faux Wood Beams</a> </li>
                                <li> <a href="shop.html"><i class="fa fa-angle-right"></i>Corbels</a> </li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Siding</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="thumbnail" href="shop.html"><img width="270" height="270" alt="img" src="media/menu/promo.jpg"></a> </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="thumbnail" href="shop.html"> <img width="350" height="140" alt="img" src="media/menu/pormo2.jpg"> </a> </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="thumbnail" href="shop.html"> <img width="350" height="140" alt="img" src="media/menu/pormo3.jpg"> </a> </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="thumbnail" href="shop.html"> <img width="350" height="140" alt="img" src="media/menu/pormo4.jpg"> </a> </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="blog1.html"  >Blog <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="blog.html"> Blog page</a> </li>
                      <li> <a href="post.html"  > Post page</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="home1.html"  >Pages <b class="caret"></b> </a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="typography.html"  >Typography</a></li>
                      <li> <a href="table.html"  >Price Table</a></li>
                      <li> <a href="contact.html"> Contact Page</a> </li>
                      <li> <a href="flaticons.html"> Flaticons Page</a> </li>
                      <li> <a href="doc.html"> Documentation</a> </li>
                    </ul>
                  </li>
                </ul>
                <form id="search-global-menu" method="get">
                  <input type="text" value="" id="search" name="s" >
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- HEADER END -->

        <?= Alert::widget() ?>
        <?= $content ?>

  <footer class="footer footer-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-logo"><img src="img/logo2.jpg"  alt="logo" /></h3>
            <p>&copy;&nbsp;2005-<?=date('Y')?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-title">Политика конфидэнциальности</h3>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="fot-box">
                    <p>Политика конфеденциальности - описание</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-title">Ссылка на разработчика</h3>
            <div class="fot-contact">
              <div class="media-body">
                <a href="http://voidmedia.ru/">voidmedia.ru</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</div>
<a class="scroll-top"> <i class="fa fa-angle-up"> </i></a>
<div class="portfolio-modal modal fade" id="myModal-id-12"  >
  <div class="modal-content"> </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
