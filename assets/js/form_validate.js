$(document).ready(function() {
  $("form").click(function() {
    $("form").validate({
      rules:{
        name: "required",
        number:{
          required:true,
          digits:true
        }
      },
      messages:{
        name:"必填",
        number:"必填"
      }
    });

    //  $("#cp").blur(function(){
    //    //  $("input").css("border-color","red");
    //    if($(this).val() != ""){
    //      $("#cp-error").text("");
    //    }
    //  });
  });
});
