<body>

<div class="container">
<div class="">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;"><?=$title?></h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="به نام" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="ایمیل" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="شماره تماس" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="توضیحات کوچک" maxlength="140" rows="7"></textarea>
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
                            <tr id='addr0'>
                                <td> 1 </td>
                                <td> <input type="text" name='name0'  placeholder='نمونه : صفحه تماس با ما' class="form-control"/> </td>
                                <td> <input type="text" name='pric0' placeholder='مثال : 12,000' class="form-control"/> </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-default pull-left">اضافه کردن یک فیلد جدید</a><a id='delete_row' class="pull-right btn btn-default">حذف فیلد</a>
            <br>
            <div class="row clearfix">
                <div class="col-md-12">
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">ارسال فاکتور</button>
                <p id="totalPrice"></p>
                </div>
             </div>
        </form>
    </div>
</div>
</div>

<script>
$(document).ready(function() {
      var i=1;
     $("#add_row").click(function() {
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='مثال : قالب' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='مثال : 100,00'  class='form-control input-md'></td>");

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
</script>
</body>
</html>