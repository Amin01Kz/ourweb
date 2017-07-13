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
        <section id="contact" class="section section-center section-contact">
          <div class="container">
            <h2 class="section-title"><span>تماس با ما</span></h2>

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

          <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/bootstrap-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.isotope.min.js?v=1.5.26"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.singlePageNav.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/public/assets/js/my-validate.js"></script>
</body>
<html>