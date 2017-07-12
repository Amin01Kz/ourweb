<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    آخرین فاکتور ها</h3>
                <span class="label label-info">
                    <?=$totalFactors?></span>
            </div>
            <div class="panel-body">

	        <?php if ( $msg = $this->session->flashdata('success_msg') ): ?>
	        	<div class="alert alert-success">
					<strong>تبریک</strong> <?=$msg?>
				</div>
	        <?php endif ?>

	        <?php if ( $msg = $this->session->flashdata('error_msg') ): ?>
	        	<div class="alert alert-danger">
					<strong>متاسفانه</strong> <?=$msg?>
				</div>
	        <?php endif ?>
            
                <ul class="list-group">


                <?php foreach($factors as $row) { ?>


                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt=""></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="<?=base_url().'index.php/factor/'.$row->code?>">
                                        <?=$row->description?></a>
                                    <div class="mic-info">
                                          
                                        <i><p>تاریخ ثبت :<?=$row->date?></p></i>
                                        <i><p>کد رسید‌:<?=$row->receipt_code?></i>
                                         <p>به نام :<?=$row->name?></p>
                                         
                                        <?php 
                                            if($row->paid) 
                                                echo '<p class="bg-success">پرداخت شده</p>';
                                            else
                                                echo '<p class="bg-warning">پرداخت نشده</p>';
                                        ?>
                                        
                                        <p>شماره تماس :<?=$row->phone?></p>
                                        

                                        
                                    </div>
                                </div>

                                <div class="action">
                                    <a href="<?=base_url('index.php/panel/factor/edit/') . $row->id?>" type="button" class="btn btn-primary btn-xs" title="ویرایش">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="<?=base_url('index.php/panel/factor/delete/') . $row->id?>" type="button" class="btn btn-danger btn-xs" title="حذف">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                <?php } ?>





                </ul>
                <a href="#" class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> بیشتر</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>