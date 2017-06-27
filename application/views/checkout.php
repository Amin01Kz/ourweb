<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/assets/css/style.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>فاکتور</h1>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                	<em>به نام: <?=$name?></em>
                	<br>
                	<em>شماره تلفن: <?=$phone?></em>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>تاریخ: <?=$jtime?></em>
                    </p>
                    <p>
                        <em>شماره رسید #: <?=$receipt_code?></em>
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
					  foreach ($items_data as $row) {
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

                <button type="button" class="btn btn-success btn-lg btn-block">
                    پرداخت نهایی   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>