<body>
  <?php require_once 'nav.php'; ?>
<!-- Page Content -->
<div class="container">
  <!-- 店家名 -->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">會員資訊
      </h1>
    </div>
  </div>
  <div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"  class="active"><a href="#deposit" aria-controls="home" role="tab" data-toggle="tab">存款明細</a></li>
      <li role="presentation"><a href="#balance" aria-controls="profile" role="tab" data-toggle="tab">餘額明細</a></li>
      <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">日期</a></li> -->
      <li role="presentation"><a href="#before_convenient" aria-controls="settings" role="tab" data-toggle="tab">曾經訂購便當</a></li>
    </ul>

    <div class="tab-content">
<!-- 存款 -->
      <div role="tabpanel" class="tab-pane active" id="deposit"></br>
        <table class="table table-hover ">
          <thead>
            <tr>
              <th>姓名</th>
              <th>存款</th>
              <th>日期</th>
            </tr>
          </thead>
          <tbody>
            <?php
              //include 'center/Deposit.php';//存款頁面
             ?>
          </tbody>
        </table>
      </div>
<!-- 存款 -->

<!-- 餘額 -->
      <div role="tabpanel" class="tab-pane" id="balance"></br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>姓名</th>
              <th>餘額</th>
              <th>日期</th>
            </tr>
          </thead>
          <tbody>
            <?php
              //include 'center/Balance.php';
             ?>
          </tbody>
        </table>
      </div>
<!-- 餘額 -->

<!-- 曾經訂購過的便當 -->
      <div role="tabpanel" class="tab-pane" id="before_convenient"> </br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>姓名</th>
              <th>店家名</th>
              <th>便當+價位</th>
              <th>數量</th>
              <th>總價</th>
              <th>日期</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //  include 'center/BeforeConvenient.php';
             ?>
          </tbody>
        </table>
      </div>
<!-- 曾經訂購過的便當 -->
    </div><!-- tab-content -->
  </div>

      <!-- 便當菜單 -->
      <!-- <img class="img-responsive" src="http://placehold.it/750x500" alt=""> -->
      <!-- 便當菜單 -->
    <!-- </div> -->

    <!-- <div class="col-md-4">
      <h3>說明</h3>
      <p>....</p>
    </div>
    <br/>

    <div class="col-md-4">
      <form class="form-horizontal">
        <div class="form-group">
          <h3>選擇便當</h3>
          <div class="col-sm-8"> -->
            <!-- Single button -->
            <!-- <select class="selectpicker" data-style="btn-primary">
              <option>便當名1+價位1</option>
              <option>便當名2+價位2</option>
              <option>便當名3+價位3</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <h3>我是誰...?</h3>
            <input type="text" class="form-control" id="pwd" placeholder="(抓取會員名)">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="btn btn-primary">送出</button>
          </div>
        </div>
      </form>
    </div>
  </div> -->
  <!-- /.row -->

  <hr>
  <!-- 更改密碼的彈跳視窗 -->
  <div class="modal fade" id="ChangePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">更改密碼</h4>
        </div>
        <div class="modal-body">
          <form action="https://tw.yahoo.com/" method="post">
            <div class="form-group">
              <label for="new_password" class="control-label">新密碼:</label>
              <input type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="form-group">
              <label for="agin_new_password" class="control-label">再輸入一次密碼:</label>
              <input type="password" class="form-control" id="agin_new_password" name="agin_new_password">
            </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
            <button type="submit" class="btn btn-danger" name="submit_change_password">更改</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 更改密碼的彈跳視窗 -->
</body>
