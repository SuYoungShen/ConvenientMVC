<body>
  <?php require_once 'nav.php';?>
<!-- Page Content -->
  <div class="container">
    <!-- <form class="form-horizontal" action="todaymenu/insertconvenient.php" method="post"> -->
    <?php echo $form["form"]; ?>
      <!-- 店家名 -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><?php echo $form["TodayStoreName"]; ?><!-- 店家名 -->

            <?php echo $form["IHTodayID"] ?><!-- IH=input hidden -->
            <small><?php echo $form["TodayStorePhone"]; ?></small>
          </h1>
        </div>
      </div>
      <!-- 店家名 -->

      <!-- 便當資訊-->
      <div class="row">
        <div class="col-md-8">
          <!-- 便當菜單 -->
          <?php echo $form["Img"]; ?>
          <!-- 便當菜單 -->
        </div>

        <div class="col-md-4 col-xs-12">
          <h3>說明</h3>
          <p class="h5"><?php echo $form["Description"]; ?></p>
        <!-- </div> -->
        <br/>

        <!-- <div class="col-md-4"> -->
          <div class="form-group">
            <h3>選擇便當</h3>
            <div class="col-sm-8 col-xs-12">
              <!-- Single button -->
              <?php echo $form["Select"]; ?>
              <!-- <select class="selectpicker" data-style="btn-danger" name="cp" id="cp" title="請選擇"> --><!-- CP = convenient price-->
                <!-- <optgroup label="便當+價位">
                  <option value="a">
                  a
                  </option>
                </optgroup>
              </select> -->
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-xs-12">
              <h3>數量...?</h3>
              <?php echo $form["InputNumber"]; ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8 col-xs-12">
              <h3>我是誰...?</h3>

              <?php
                echo $form["InputName"];

                //$input 在todaymenu/todaymenu.php
                // if (isset($login_member_name) && !empty($login_member_name)) {//當使用者登入時會顯示唯讀,姓名部分就不能更改
                //   $input($login_member_name, $readonly);
                // }else {//反之如果是訪客就得自己輸入姓名
                //   $login_member_name = "";
                //   $input($login_member_name, $required);
                // }
               ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2 col-xs-5">
              <!-- <button type='submit' class='btn btn-success' id='submit_IConvenient' name='submit_IConvenient'>送出</button> -->
              <script type="text/javascript">
                button_status = function(status){
                  input = "<button type='submit' class='btn btn-success'" +status+ "id='submit_IConvenient' name='submit_IConvenient'>送出</button>";
                  document.write(input);
                };

                // if(Balance <= 60){//當餘額少於
                //   status = "disabled='disabled'";
                //   button_status(status);
                // }else{
                  button_status();
                // }
              </script>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr>
    </form>
</body>
