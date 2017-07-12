$("#form-contactus").validate({
		rules:{
			name: {
				required: true,
			},
      subject: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      text: {
        required: true,
        maxlength: 300
      }
		},
		messages:{
			name:{
				required: "وارد کردن نام ضروری است"
			},
      subject: {
        required: "عنوان را وارد نکرده اید"
      },
      email: {
        required: "ایمیل را وارد نکرده اید",
        email: "ساختار ایمیل وارد شده اشتباه است"
      },
      text: {
        required: "متن را وارد نکرده اید",
        maxlength: "متن نباید بیشتر از 300 حروف باشد"
      }
		},
	});