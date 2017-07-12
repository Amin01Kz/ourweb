<body>
<div class="container">
<div class="">
    <div class="form-area">  
        <form action="<?=base_url('index.php/panel/factor/edit')?>" method="POST" role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;"><?=$title?></h3>

                    <?php if ( $msg = $this->session->flashdata('error_msg') ): ?>
                        <div class="alert alert-danger">
                            <strong>متاسفانه</strong> <?=$msg?>
                        </div>
                    <?php endif ?>
                    
    				<div class="form-group">
						<input value="<?=$factor->name?>" type="text" class="form-control" id="name" name="name" placeholder="به نام" required>
					</div>
					<div class="form-group">
						<input value="<?=$factor->email?>" type="text" class="form-control" id="email" name="email" placeholder="ایمیل">
					</div>
					<div class="form-group">
						<input value="<?=$factor->phone?>" type="text" class="form-control" id="phone" name="phone" placeholder="شماره تماس" required>
					</div>
                    <div class="form-group">
                    <textarea name="description" class="form-control" type="textarea" id="message" placeholder="توضیحات کوچک" maxlength="140" rows="7"><?=$factor->description?></textarea>
                    </div>
            

                    <div class="row clearfix">
                <div class="col-md-12 column">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr >
                                <th class="text-center"> # </th>
                                <th class="text-center">نام </th>
                                <th class="text-center">قیمت (تومان)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total=0; $i=1; foreach($items as $row) { ?>
                                <tr id='addr<?=$i?>'>
                                    <td> <?=$i?> </td>
                                    <td> <input value="<?=$row->title?>" type="text" name='name<?=$i?>'  placeholder='نمونه : صفحه تماس با ما' class="form-control"/> </td>
                                    <td> <input onkeyup="javascript:this.value=seprate(this.value);" value="<?=$row->price?>" type="text" name='pric<?=$i?>' placeholder='مثال : 12,000' class="form-control"/> </td>
                                </tr>
                            <?php $total+=$row->price; $i++; } ?>
                            <tr id='addr2'></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-default pull-left">اضافه کردن یک فیلد جدید</a><a id='delete_row' class="pull-right btn btn-default">حذف فیلد</a>
            <br>
            <div class="row clearfix">
                <div class="col-md-12">
                <p>جمع کل: <?=$total?></p>
                <input value="<?=$factor->id?>" name="id" type="hidden">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">ارسال فاکتور</button>
                <p id="totalPrice"></p>
                </div>
             </div>
        </form>
    </div>
</div>
</div>

<script>
$(document).ready(function() {
      var i = <?=$i++?>;
     $("#add_row").click(function() {
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='مثال : قالب' class='form-control input-md'  /> </td><td><input onkeyup='javascript:this.value=seprate(this.value);' name='price"+i+"' type='text' placeholder='مثال : 100,00'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function() {
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

function seprate(Number) {
	Number+= '';
	Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
	Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
	x = Number.split('.');
	y = x[0];
	z= x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(y))
		y= y.replace(rgx, '$1' + ',' + '$2');
	return y+ z;
}
</script>
</body>
</html>