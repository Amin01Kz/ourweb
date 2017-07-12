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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>/public/assets/js/bootstrap-3.1.1.min.js"></script>
    </head>

<body>
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=base_url()?>">وب سگمنت</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?=base_url('index.php/panel')?>">خانه</a></li>
      <li><a href="<?=base_url('index.php/panel/factor/new')?>">ساخت فاکتور جدید</a></li>
      <li><a href="<?=base_url('index.php/panel/factor/show')?>">نمایش فاکتور ها</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url('index.php/panel/logout')?>"><span class="glyphicon glyphicon-log-in"></span> خروج</a></li>
    </ul>
  </div>
</nav> 