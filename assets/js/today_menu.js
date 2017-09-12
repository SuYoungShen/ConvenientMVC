$(document).ready(function() {
  var today_storeName = $("#today_storeName").val();//抓取本日菜單店家名
  aj(today_storeName);//將資料以ajax方式傳送

  $("#today_storeName").change(function(event) {//當店家名有做選擇時,會啟動
    var today_storeName = $("#today_storeName").val();//抓取本日菜單店家名
    aj(today_storeName);
  });

  function aj(today_storeName){
    $.ajax({
      url: './TodayMenu/',
      type: 'POST',
      data: {today_storeName: today_storeName},
      dataType: "json",
      success:function(response){//response是object型態,可以用each來顯示
        $.each(response,function(index, values){
          if(index == "StoreDescription"){
            $("#StoreDescription").text(values);//更改id = StoreDescription的值
          }else if(index == "StorePic"){
            $("#StorePic").attr("src", values);//更改id = StorePic 的照片
          }
        });
      }
    });
  }
});
