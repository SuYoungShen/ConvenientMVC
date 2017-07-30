$(document).ready(function() {
  $("#loginform").click(function() {
    $(this).validate({
      rules:{
        account:{
          required : true
        },
        password:{
          required : true
        }
      },
      messages:{
        account : "必填",
        password : {
          required : "必填"
        }
      }
    });
  });

  $("#signupform").click(function() {
    $(this).validate({
      rules:{
        username : {
          required : true
        },
        account:{
          required : true,
          minlength : 4
        },
        passwords:{
          required : true,
          minlength : 5
        },
        confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#passwords"
        }
      },
      messages:{
        username : "必填",
        account :{
          required : "必填" ,
          minlength : "最少輸入4碼"
        },
        passwords :{
          required : "必填" ,
          minlength : "最少輸入5碼"
        },
        confirm_password: {
         required: "请输入密码",
         minlength: "密码长度不能小于 5 个字母",
         equalTo: "两次密码输入不一致"
       }
      }
    });
  });
});
