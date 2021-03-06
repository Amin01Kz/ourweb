<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?=base_url()?>public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/assets/css/style.css">
	<style type="text/css">
		.factor-box{
			background: #FFF;
			padding: 30px;
			border: 1px solid #E1E1E1;
			margin-top: 35px;
			border-radius: 10px;
			box-shadow: 1px 1px 10px #e1e1e1;
			color: #656565;
		}
		.total-price{
			text-align: center;
			padding: 12px;
			margin: 0 0 15px 0;
			font-size: 16px;
			color: #3c763d;
			background-color: #dff0d8;
			border: 1px solid #bcd4bc;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="factor-box col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
	        <?php if ( $msg = $this->session->flashdata('error_msg') ): ?>
	        	<div class="alert alert-danger">
					<strong>خطایی رخ داد</strong> <?=$msg?>
				</div>
	        <?php endif ?>

	        <?php if ( $msg = $this->session->flashdata('success_msg') ): ?>
	        	<div class="alert alert-success">
					<strong>تبریک</strong> <?=$msg?>
				</div>
	        <?php endif ?>

            <?php if($factor->paid): ?>
            <div class="alert alert-success">فاکتور پرداخت شده</div>
            <?php endif; ?>
            <div class="text-center">
                <h1>فاکتور</h1>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                	<em>به نام: <?=$factor->name?></em>
                	<br>
                	<em>شماره تلفن: <?=$factor->phone?></em>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>تاریخ: <?=$this->jdf->jdate('j F Y', time())?></em>
                    </p>
                    <p>
                        <em>شماره رسید : <?=$factor->receipt_code?>#</em>
                    </p>
                </div>
            </div>
            <div class="row">

                </span>

				<span class="counter pull-right"></span>
				<table class="table table-hover table-bordered results">
				  <thead>
				    <tr">
				      <th class="col-md-1 col-xs-1">#</th>
				      <th class="col-md-5 col-xs-5">نام</th>
				      <th class="col-md-1 col-xs-3">قیمت</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	  $sum = 0;
				  	  $i = 0;
					  foreach ($items as $row) {
					  	$i++;
					  	$sum += $row->price;
					  	echo "<tr>
					      		<th scope=\"row\">$i</th>
						      	<td>$row->title</td>
						      	<td>".number_format($row->price)." تومان</td>
					    	</tr>";
					  }
				  ?>
				  </tbody>
				</table>

				<h3 class="col-sm-4 total-price">قیمت کل : <?=number_format($sum)?> تومان</h3> 
                
                <form action="<?=base_url(uri_string())?>" method="post">
                <button type="submit" name="btn" value="1" class="btn btn-success btn-lg btn-block" <?php if($factor->paid) echo "disabled"; ?>>
                    تایید و پرداخت</span>
                </button>
                </form></td>
            </div>
        </div>
    </div>
</body>
</html>