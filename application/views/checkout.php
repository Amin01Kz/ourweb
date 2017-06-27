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

</head>
<body>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            
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
                        <em>شماره رسید #: <?=$factor->receipt_code?></em>
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
						      	<td>$row->price</td>
					    	</tr>";
					  }
				  ?>
				  </tbody>
				</table>

				<h3>قیمت کل : <?=$sum?></h3> 
                
                <form action="<?=base_url(uri_string())?>" method="post">
                <button type="submit" name="btn" value="1" class="btn btn-success btn-lg btn-block" <?php if($factor->paid) echo "disabled"; ?>>
                    پرداخت نهایی   <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
                </form></td>
            </div>
        </div>
    </div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="<?=base_url()?>public/assets/js/boostrap.min.js"></script>
</body>
</html>