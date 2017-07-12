<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <title><?php if(isset($title)) echo $title;?></title>
            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?=base_url()?>public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>public/assets/css/style.css">
            <!-- JS -->
        <script type="text/javascript" src="<?=base_url()?>/public/assets/js/bootstrap-3.1.1.min.js"></script>
    </head>
<body>

<div class="container">
    <div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">ورود به پنل کاربری</h3>
                        <?php
                            $this->load->library('form_validation');
                            echo validation_errors('<p class="bg-warning>', '</p>');
                            if( isset($error_msg) )
                                echo "<p class=\"bg-warning\">$error_msg</p>";
                            if( isset($success_msg) )
                                echo "<p class=\"bg-success\">$success_msg</p>"
                        ?>
                    </div>
                    <div class="panel-body">
                        <?=form_open('panel/login', 'role="form"')?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="ایمیل" name="email" autofocus="" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="رمز عبور" name="password" value="" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-sm btn-success">ورود</button> 
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
</div>

 </body>
</html>