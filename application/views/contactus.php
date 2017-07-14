<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
    <link href="<?=base_url()?>/public/assets/css/template.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header id="header" class="site-header">
        <nav id="topbar" class="site-topbar visible-lg visible-md">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">سوالی دارید ؟؟ با ایمیل من تماس بگیرید: info@websegment.ir </div>
              <div class="social-links col-sm-6">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </nav>

        <nav id="navbar" class="site-navbar navbar navbar-static-top one-page-nav" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
              </button>
              <h1 class="navbar-brand"><i class="fa fa-power-off"></i> <a href="<?=base_url()?>">شروعی تازه با وب سگمنت</a></h1>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul id="navigation" class="nav navbar-nav navbar-right">
                <li class="active"><a href="#header" class="current">خانه </a></li>
                <li><a href="#features">ویژگی ها</a></li>
                <li><a href="#portfolio">نمونه کارها</a></li>
                <li><a href="#testimonials">نظر مشتریان</a></li>
                <li><a href="#blog">وبلاگ</a></li>
                <li><a href="#clients">مشتریان</a></li>
                <li><a href="#contact">تماس</a></li>
                <li><a href="<?=base_url('index.php/contactus')?>">ارتباط با ما</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
<main id="main" class="site-main">
        <section id="contact" class="section section-center section-contact">
          <div class="container">
            <h2 class="section-title"><span>تماس با ما</span></h2>
            <p>مشتری گرامی برای پیگیری یا سوال درباره سفارش بهتر است از فرم زیر استفاده کنید. اما اگر تمایل به ارسال مستقیم ایمیل دارید، جهت تسریع در پاسخ‌گویی لطفاً شماره سفارش (پیگیری) را در ایمیل خود ذکر کنید.
لطفاً در صورت امکان اطلاعات را به فارسی وارد نمایید.</p>
            <?php 
              $this->load->library('form_validation');
              $this->load->helper(['url']);
              echo validation_errors('<p>', '</p>');
              if( isset($msg) )  echo '<p>'.$msg.'</p>';
            ?>
            
            <div class="main-action">
                  <?=form_open('contactus', 'id="form-contactus"')?>
                <div class="results"></div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">پیام</label>
                      <textarea name="text" class="form-control" placeholder="پیام" style="height: 181px" rows="6" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">موضوع</label>
                      <input name="subject" type="text" class="form-control" placeholder="عنوان" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">نام</label>
                      <input name="name" type="text" class="form-control" placeholder="نام" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">ایمیل</label>
                      <input name="email" type="email" class="form-control" placeholder="ایمیل" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <button id="submit" type="submit" class="btn btn-default btn-block">ارسال</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
       </section>
      </main>
      <footer id="footer" class="site-footer">
        <div class="container">

          <div id="sidebar-footer-1">
            <div class="row">

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">درباره ما</h5>
                <p>درباره وب سگمنت بیشتر بدانید
شرکت رسانه‌ تجارت وب سگمنت با هدف ارائه‌ی خدمات رایانه یی پردازش داده، طراحی و توسعه‌ی وب، اطلاع رسانی و انتقال فناوری نوین ارتباطات دیتا به عموم مردم، شرکت ها و سازمان‌ها تاسیس شده است. رسانه تجارت وب سگمنت استفاده از رایانه و اینترنت و راحت تر شدن کارها توسط آن را، حق تمام مردم می داند و خلاقیت و نوآوری را سر لوحه‌ی تلاش‌ها و فعالیت‌های خود قرار داده و معتقد است روزی خواهد رسید که برای شهروند کارآمد، استفاده از رایانه و اینترنت همان قدر ضرورت می یابد که توانایی خواندن و نوشتن اهمیت دارد.</p>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">تماس</h5>
                <div class="textwidget">
                  <div class="adr">
                    <div class="street-address"> </div>
                    <span class="locality">شیراز</span>,
                    <abbr class="region" title="شیراز"></abbr>
                    <span class="postal-code"></span>
                    <span class="country-name">ایران</span>
                  </div>
                  <div>ایمیل: <span class="tel">info@websegment.ir</span></div>
                  <div>وبسایت: <a class="url" href="http://websegment.ir">WebSegment.IR</a></div>
                  <div>فروشگاه: <a class="url" href="http://shop.websegment.ir">Shop.WebSegment.IR</a></div>
                </div>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">آیا به کمک نیاز دارید ؟</h5>
                <p>به ما ایمیل بزنید مشاوره ریگان است.</p>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">در تماس باشید</h5>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="info@websegment.ir">
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="fa fa-arrow-right"></i></button>
                  </span>
                </div>
                <ul class="social-links">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </aside>

            </div>
          </div>

          <div class="copyright"><p>© 2017 <br /> CopyRight All Reverse: <a href="http://www.websegment.ir">Web Segment</a></p></div>
        </div>
      </footer>
          <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/bootstrap-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.isotope.min.js?v=1.5.26"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.singlePageNav.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/my-validate.js"></script>
</body>
<html>