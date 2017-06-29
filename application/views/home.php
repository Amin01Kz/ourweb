<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شروع</title>
    <link href="<?=base_url()?>/public/assets/css/template.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="page">
      <header id="header" class="site-header">
        <nav id="topbar" class="site-topbar visible-lg visible-md">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">سوالی دارید ؟؟ با شماره من تماس بگیرید : 09360970585</div>
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
              <h1 class="navbar-brand"><i class="fa fa-power-off"></i> <a href="index.html">شروع</a></h1>
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
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <main id="main" class="site-main">

        <section id="carousel-1" class="carousel slide section-slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active" style="background: url(<?=base_url()?>/public/images/bg-1.jpg);">
              <div class="container"><img src="images/typo-1.png" alt="First slide"></div>
            </div>
            <div class="item" style="background: url(<?=base_url()?>/public/images/bg-2.jpg);">
              <div class="container"><img src="<?=base_url()?>/public/images/typo-2.png" alt="Second slide"></div>
            </div>
            <div class="item" style="background: url(<?=base_url()?>/public/images/bg-3.jpg);">
              <div class="container"><img src="<?=base_url()?>/public/images/typo-1.png" alt="Third slide"></div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
          <a class="right carousel-control" href="#carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
        </section>

        <section class="section section-center section-cta">
          <div class="container">
            <h2 class="section-title"><span>طراحی سایت و برنامه نویسی اختصاصی</span></h2>
            <h4>طراحی سایت کافی نیست ما به جهانی و شناخته شدن شما کمک میکنیم! </h4>
            <div class="main-action row">
              <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2"><a href="#contact" class="smooth-scroll btn btn-lg btn-block btn-danger">درخواست نقل قول</a></div>
              <div class="col-md-3 col-sm-4"><a href="#portfolio" class="smooth-scroll btn btn-lg btn-block btn-default">مشاهده نمونه کارها</a></div>
            </div>
          </div>
        </section>

        <section id="features" class="section section-center section-hilite section-features">
          <div class="container">
            <h2 class="section-title"><span>چگونه کار می کند؟</span></h2>
            <div class="row">

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-bag-flat.png" alt=""></div>
                <h4>طراحی حرفه ای</h4>
                <p>یکی از مهم‌ترین فاکتورها در بالا بردن ترافیک سایت و افزایش هدفمند بازدیدکنندگان، طراحی سایت مناسب است. در صورتیکه طراحی وب سایت شما با آخرین تکنولوژی و بر اساس اصول سئو طراحی شود شانس شما برای قرار گرفتن در رتبه‌های بالای موتورهای جستجو بالا می‌رود.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-book-flat.png" alt=""></div>
                <h4>سئو و بهینه سازی سایت</h4>
                <p>سئو سایت در حقیقت بهینه سایت برای موتور های جستجو می باشد . اینتن با تکیه بر کارشناسان قدرتمند خود در حوزه سئو بصورت تضمینی خدمات افزایش رتبه سایت در گوگل را به مشتریان خود ارائه می نماید . برای مشاوره با کارشناسان تجارت الکترونیک اینتن با ما در ارتباط باشید ، ارائه استراتژی مناسب برای وب سایت شما یکی از وظایف بخش سئو اینتن می باشد.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-calculator-flat.png" alt=""></div>
                <h4>طراحی اپلیکیشن موبایل</h4>
                <p>امروزه با توجه به توسعه گوشی های هوشمند و استفاده روز افزون کاربران یکی از نقاط قوت در توسعه کسب و کار داشتن اپلیکیشن موبایل می باشد، طراحی اپلیکیشن موبایل مبتنی بر اندروید  بصورت کاملا آنلاین با بانک اطلاعات وب سایت، از تخصص های کاسپید می باشد. </p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-comments-flat.png" alt=""></div>
                <h4>پشتی بانی</h4>
                <p>تمام تلاش ما بر این است که محیط کاربری و مدیریت وب سایت ساده و راحت باشد اما چنانچه زمان کافی برای مدیریت و بروزرسانی وب سایت خود را ندارید می توانید این کار را به ما بسپارید .
ما این مسئولیت را بر عهده خواهیم گرفت</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-easel-flat.png" alt=""></div>
                <h4>تجارت اینترنت</h4>
                <p>اینترنت امروزه نقش بسیار کلیدی در تجارت بازی می کند . حضور موفق در دنیای اینترنت تنها با دارا بودن یک استراتژی مناسب برای طراحی سایت و سئو وب سایت امکان پذیر است . ارائه راهکار های اصولی در کسب و کار های اینترنتی یکی از ابزار هایی است که کارشناسان اینتن در پروژه های طراحی سایت و سئو سایت به مشتریان ارائه می نماید .</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="<?=base_url()?>/public/images/icon-photo-flat.png" alt=""></div>
                <h4>زیرعنوان</h4>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </div>

            </div>
          </div>
        </section>

        <section id="portfolio" class="section section-portfolio">
          <div class="container">
            <h2 class="section-title"><span>آثار اخیر.</span></h2>
            <ul id="filters">
              <li><a href="#" data-filter="*">همه</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".web">طراحی وب</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".graphic">طراحی گرافیک</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".photography">عکاسی</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".motion">برنامه نویسی</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".branding">بهینه سازی وب</a></li>
            </ul>

            <div class="portfolio-isotope row">
              <article class="col-md-3 col-sm-6 portfolio-item branding photography web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-1.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item motion graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-1.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item branding web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-3.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item photography graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-2.png" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item motion web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-3.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item branding graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-1.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item motion photography web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-3.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="col-md-3 col-sm-6 portfolio-item photography motion branding graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="<?=base_url()?>/public/images/single-project-2.png" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
            </div>

          </div>
        </section>

        <!-- Project Modal -->
        <div class="modal fade" id="project-modal" tabindex="-1" role="dialog" aria-labelledby="project-modal-label" aria-hidden="true">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="project-modal-label">عنوان پروژه</h4>
              </div>
              <div class="modal-body">
                <article class="single-project">
                  <div class="project-thumbnail">
                    <div id="project-thumbnail-carousel-1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active"><img src="http://placehold.it/800x600" /></div>
                        <div class="item"><img src="http://placehold.it/800x600" /></div>
                        <div class="item"><img src="http://placehold.it/800x600" /></div>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="1"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="2"></li>
                      </ol>
                      <a class="left carousel-control" href="#project-thumbnail-carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                      <a class="right carousel-control" href="#project-thumbnail-carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-block btn-primary">پروژه راه اندازی</button>
                      <ul class="list-unstyled project-info">
                        <li><strong>نوع</strong> <span class="pull-right">طراحی وب</span></li>
                        <li><strong>مشتری</strong> <span class="pull-right">گوگل</span></li>
                        <li><strong>سال</strong> <span class="pull-right">2014</span></li>
                      </ul>
                    </div>
                    <div class="col-md-8">
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>

          </div>
        </div>

        <section id="testimonials" class="section section-center section-hilite section-testimonial">
          <div class="container">
            <h2 class="section-title"><span>آنچه مشتریان ما می گویند؟</span></h2>
            <i class="fa fa-quote-left fa-3x"></i>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <blockquote>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <small>کسی معروف در <cite title="Source Title">شرکت شما</cite></small>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <small>کسی معروف در <cite title="Source Title">شرکت شما</cite></small>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <small>کسی معروف در <cite title="Source Title">شرکت شما</cite></small>
                  </blockquote>
                </div>
              </div>

              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><img src="<?=base_url()?>/public/images/avatar-1.png" width="64" height="64" alt="" class="img-circle"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"><img src="<?=base_url()?>/public/images/avatar-2.png" width="64" height="64" alt="" class="img-circle"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"><img src="<?=base_url()?>/public/images/avatar-3.png" width="64" height="64" alt="" class="img-circle"></li>
              </ol>
            </div>

          </div>
        </section>




        <section id="clients" class="section section-hilite section-our-clients">
          <div class="container">
            <h2 class="section-title"><span> علت نوسان شدید در قیمت طراحی سایت چیست ؟</span></h2>
            <div class="row">
                   <p>
                   ا چند تماس ساده متوجه تفاوت قیمت از رقم های نجومی تا قیمت های خیلی ارزان وسوسه کننده می شوید سیاست قیمت گذاری باید با توجه به امکانات درخواستی ، کیفیت خدمات پیشتیبانی ، استفاده نکردن از قالب آماده و مدت زمان پروژه باشد
                   </p>
                   
                   <br>
                   
                   <h3>همیشه قیمت های خیلی گران تضمین کیفت بالاتر هستند ؟</h3>
                   <p>
                   ملاک در قیمت طراحی سایت توانایی آن شرکت ، تعداد نمونه کارهای واقعی و البته شاخص آن شرکت می باشد که میتواند آن را برای انتخاب قابل اعتماد تر کند
                   </p>
            </div>
          </div>
        </section>





        <section id="pricing" class="section section-center section-pricing">
            <div class="container">
                <h2 class="section-title"><span>جدول قیمت گذاری آسان</span></h2>
                <div class="pricing-table">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>برنزی</h1>
                                    <div class="the-price">10 هزار تومان <span class="subscript">/ ماه</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>یک کاربره</td></tr>
                                            <tr class="active"><td>یک پروژه</td></tr>
                                            <tr><td>دسترسی</td></tr>
                                            <tr class="active"><td>50 نگابایت فضا</td></tr>
                                            <tr><td>سفارشی خدمات ابر</td></tr>
                                            <tr class="active"><td>گزارش هفتگی</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-block btn-default">ثبت نام کنید</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>نقره ای</h1>
                                    <div class="the-price">20 هزار تومان <span class="subscript">/ ماه</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>یک کاربره</td></tr>
                                            <tr class="active"><td>3 پروژه</td></tr>
                                            <tr><td>دسترسی</td></tr>
                                            <tr class="active"><td>100 مگابایت فضا</td></tr>
                                            <tr><td>سفارشی خدمات ابر</td></tr>
                                            <tr class="active"><td>گزارش هفتگی</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-block btn-default">ثبت نام کنید</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-primary">
                                <header class="panel-heading">
                                    <h1>طلایی</h1>
                                    <div class="the-price">30 هزار تومان <span class="subscript">/ ماه</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>دو کاربره</td></tr>
                                            <tr class="active"><td>5 پروژه</td></tr>
                                            <tr><td>دسترسی</td></tr>
                                            <tr class="active"><td>200 مگابایت فضا</td></tr>
                                            <tr><td>سفارشی خدمات ابر</td></tr>
                                            <tr class="active"><td>گزارش هفتگی</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-block btn-primary">ثبت نام کنید</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>الماس</h1>
                                    <div class="the-price">40 هزار تومان <span class="subscript">/ ماه</span></div>
                                </header>
                                <div class="panel-body">
                                    
                                    <table class="table">
                                        <tbody>
                                            <tr><td>5 کاربره</td></tr>
                                            <tr class="active"><td>20 پروژه</td></tr>
                                            <tr><td>دسترسی</td></tr>
                                            <tr class="active"><td>500 مگابایت فضا</td></tr>
                                            <tr><td>خدمات ابری</td></tr>
                                            <tr class="active"><td>گزارش هفتگی</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-block btn-default">ثبت نام کنید</a></footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="section section-center section-hilite section-team">
            <div class="container">
                <h2 class="section-title"><span>تیم شاد ما</span></h2>
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>ریحانه</h5>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>مژگان</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>محمد</h5>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>حجت</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>عباس</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="http://placehold.it/300x300">
                        <h5>فردین</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="section section-blog">
          <div class="container">
            <h2 class="section-title"><span>وبلاگ ما</span></h2>
            <div class="row">
              <div class="col-md-6">
                <article class="hentry post">
                  <div class="row">
                    <div class="entry-thumbnail col-lg-4 col-md-5 col-sm-4">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/165x165" alt="" />
                        <span class="overlay"><i class="fa fa-plus"></i></span>
                      </a>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-8">
                      <header class="entry-header">
                        <h2 class="entry-title"><a href="#">عنوان نمونه وبلاگ</a></h2>
                        <div class="entry-meta">توسط <a href="#">حجت دهنوی</a> به <a href="#">دسته</a></div>
                      </header>
                      <div class="entry-content">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a href="#" class="more"><span class="btn btn-primary">ادامه مطلب</span></a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6">
                <article class="hentry post">
                  <div class="row">
                    <div class="entry-thumbnail col-lg-4 col-md-5 col-sm-4">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/165x165" alt="" />
                        <span class="overlay"><i class="fa fa-plus"></i></span>
                      </a>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-8">
                      <header class="entry-header">
                        <h2 class="entry-title"><a href="#">عنوان نمونه وبلاگ</a></h2>
                        <div class="entry-meta">توسط <a href="#">حجت دهنوی</a> به <a href="#">دسته</a></div>
                      </header>
                      <div class="entry-content">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a href="#" class="more"><span class="btn btn-primary">ادامه مطلب</span></a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>

        <section id="clients" class="section section-hilite section-our-clients">
          <div class="container">
            <h2 class="section-title"><span>مشتریان ما</span></h2>
            <div class="row">
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="http://placehold.it/165x80" alt="" /></a>
              </div>
            </div>
          </div>
        </section>

        <section id="contact" class="section section-center section-contact">
          <div class="container">
            <h2 class="section-title"><span>تماس با ما</span></h2>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            <div class="main-action">
              <form method="post" action="contact.php" name="contactform" id="contactform">
                <div class="results"></div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">پیام</label>
                      <textarea name="message" class="form-control" placeholder="پیام" style="height: 181px" rows="6" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">عنوان</label>
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
                          <img src="image.php" alt="Image verification" class="captcha-image">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="verify" type="text" id="verify" class="form-control" placeholder="کد در عکس را وارد کنید" required>
                        </div>
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
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="#">ادامه مطلب</a></p>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">تماس</h5>
                <div class="textwidget">
                  <div class="adr">
                    <div class="street-address">خیابان امام خمینی - خیابان فیاض بخش شمالی - فیاض بخش شمالی 2 - ساختمان علاالدین - طبقه +1</div>
                    <span class="locality">نیشابور</span>,
                    <abbr class="region" title="New York"></abbr>
                    <span class="postal-code"></span>
                    <span class="country-name">ایران</span>
                  </div>
                  <div>تلفن: <span class="tel">09360970585</span></div>
                  <div>وبسایت: <a class="url" href="http://persianscript.ir">persianscript.ir</a></div>
                </div>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">آیا به کمک نیاز دارید ؟</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. <a href="#">ادامه مطلب</a></p>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title">در تماس باشید</h5>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ایمیل شما">
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

          <div id="sidebar-footer-2">
            <div class="row">

              <aside class="widget col-sm-6">
                <h5 class="widget-title">آخرین توییت</h5>
                <div class="tweet">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<br />– حجت دهنوی –
                </div>
              </aside>

              <aside class="widget widget_flickr col-sm-6">
                <h5 class="widget-title">آخرین عکس ها</h5>
                <a href="#" class="hover-effect"><img src="http://placehold.it/100x100" /><span class="overlay"><i class="fa fa-plus"></i></span></a>
                <a href="#" class="hover-effect"><img src="http://placehold.it/100x100" /><span class="overlay"><i class="fa fa-plus"></i></span></a>
                <a href="#" class="hover-effect"><img src="http://placehold.it/100x100" /><span class="overlay"><i class="fa fa-plus"></i></span></a>
              </aside>

            </div>
          </div>

          <div class="copyright"><p>© 2014 <br /> فارسی شده توسط: <a href="http://www.persianscript.ir">پرشین اسکریپت</a></p></div>
        </div>
      </footer>
    </div>

    <div class="scroll-to-top" data-spy="affix" data-offset-top="200"><a href="#page" class="smooth-scroll"><i class="fa fa-arrow-up"></i></a></div>
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/bootstrap-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.isotope.min.js?v=1.5.26"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.singlePageNav.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/main.js"></script>
  </body>
</html>