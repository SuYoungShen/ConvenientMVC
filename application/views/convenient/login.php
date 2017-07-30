<body>
  <!--登入----->
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">登入</div>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">忘記密碼</a></div>
      </div>

      <div style="padding-top:30px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        <?php echo $form["FormLogin"]; ?>

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <?php echo $form["Account"]; ?>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <?php echo $form["Password"]; ?>

          </div>

          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1">記住我
              </label>
            </div>
          </div>

          <div style="margin-top:10px" class="form-group">
            <!-- Button -->
            <div class="col-sm-12 controls">
              <!-- <button id="btn-login" type="submit" class="btn btn-success">點擊登入</button> -->
              <?php echo $form["submit"]; ?>

            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 control">
              <div style="border-top: 1px solid#888; padding-top:20px; font-size:85%" >
                <?php echo $form["sign"]; ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">註冊</div>
        <div style="float:right; font-size: 85%; position: relative; top:-10px">
          <!-- <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">返回登入頁面</a> -->
          <?php echo $form["login"]; ?>
        </div>
      </div>
        <div class="panel-body" >

        <!---註冊----->
          <?php echo $form["FormSign"]; ?>

            <div id="signupalert" style="display:none" class="alert alert-danger">
              <p>Error:</p>
              <span></span>
            </div>

              <div class="form-group">
              <label for="Name" class="col-md-3 control-label">姓名</label>
              <div class="col-md-9">
                <!-- <input type="text" class="form-control" name="Name" placeholder="Name"> -->
                <?php echo $form["Name"]; ?>
              </div>
            </div>

            <div class="form-group">
              <label for="account" class="col-md-3 control-label">帳號</label>
              <div class="col-md-9">
                <!-- <input type="text" class="form-control" name="accountnumber" placeholder="account number"> -->
                <?php echo $form["Account"]; ?>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-md-3 control-label">密碼</label>
              <div class="col-md-9">
                <!-- <input type="password" class="form-control" name="password" placeholder="password"> -->
                <?php echo $form["Passwords"]; ?>
              </div>
            </div>

            <div class="form-group">
              <label for="AgainPassword" class="col-md-3 control-label">再輸入一次密碼</label>
              <div class="col-md-9">
                <?php echo $form["AgainPassword"]; ?>
              </div>
            </div>

            <div class="form-group">
              <!-- Button -->
              <div class="col-md-offset-3 col-md-9">
                <!-- <button id="btn-signup" type="submit" class="btn btn-info">註冊</button> -->
                <?php echo $form["SubmitSign"]; ?>
                <span style="margin-left:7px;"></span>
              </div>
            </div>
            <!-- <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group"> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
