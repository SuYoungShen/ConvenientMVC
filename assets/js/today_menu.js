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

  var select_store_name = $("#select_store_name").val();//抓取本日菜單店家名
  $("tbody tr").remove();
  TotalMenuAjax(select_store_name);//將資料以ajax方式傳送

  $("#select_store_name").change(function(event) {//當店家名有做選擇時,會啟動
    var select_store_name = $(this).val();//抓取本日菜單店家名
    $("tbody tr").remove();
    TotalMenuAjax(select_store_name);
  });

  Convenient = [];
  Price = [];
  Datetime = [];
  keys = [];

  function TotalMenuAjax(select_store_name){

    $.ajax({
      url: './TotalMenu/',
      type: 'POST',
      data: {select_store_names: select_store_name},
      dataType: "json",
      success:function(response){//response是object型態,可以用each來顯示
        // document.write(JSON.stringify(response));
        $("#phone").text("電話:"+response[0].Phone);
      // document.write(response);

      $.each(response, function( key, val ) {

        items = [];
        items.push(val);
        // keys.push(key);
        keys[key] = key;
        c=Convenient[key] = items[0].Convenient;
        Price[key] = items[0].Price;
        Datetime[key] = items[0].Datetime;

        Edit = "<span class='fa fa-pencil-square-o' aria-hidden='true' data-toggle='modal' data-target='#Edit' style='color:#0044BB'></span>";//編輯按鈕
        Delete = "<span class='glyphicon glyphicon-remove' aria-hidden='true' data-toggle='modal' data-target='#Delete' style='color:red'></span>";//刪除按鈕
        //
        $("#dataTables-example").append("<tr><td></td><td id='con'>"+Convenient[key]+"</td><td>"+Price[key]+"</td><td>"+Datetime[key]+"</td><td class='center'>"+Edit+Delete+"</td></tr>").addClass('odd gradeX');

       });
      }
    });
  }

});
$("span [class='fa fa-pencil-square-o']").click(function(event) {
  $("input [name='StoreConvenint']").val('s');
});

function Edits(Con){
  alert(Con);
  // alert(keys);
  // $("#StoreConvenint").val(Con);
}
