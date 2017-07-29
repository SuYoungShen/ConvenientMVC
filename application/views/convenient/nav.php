<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#"> -->
        <?php
        // if ($_SERVER["PHP_SELF"] == "/convenient/center.php") {
        //   echo "<a class='navbar-brand' href='./''>".$TodayStoreName="首頁";
        //
        // }else{
        //   echo "<a class='navbar-brand' href='#''>".$TodayStoreName;
        // }
        ?>
        <a class='navbar-brand' href='#'><?php echo $home; ?>
        </a>
      </div>

      <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <button class="btn btn-danger">
              <h4>
                所剩餘額：<?php echo $PB["Balance"];?>元

                <?php
                // echo "所剩餘額：".$ShowBalance[$BalanceCount-1]["Balance"]."元";
                // echo "<script>Balance = '".$ShowBalance[$BalanceCount-1]["Balance"]."';</script>";
                // if ($ShowBalance[$BalanceCount-1]["Balance"] <= 60) {
                //   echo "
                //     <script>
                //       alert('餘額已經少於60，該儲值了黑~~~');
                //     </script>
                //   ";
                // }
                ?>
              </h4>
            </button>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h4>
                  <?php
                  if (isset($_SESSION["login_name"]) && !empty($_SESSION["login_name"])) {//當會員有登入時,抓取會員名,判斷此session是否有存在與不等於空
                    echo $_SESSION["login_name"];
                  }else {
                    echo $_SESSION["login_name"] = "(會員名)";
                  }
                  ?>
                  ~你好
                  <span class="glyphicon glyphicon-user"></span><span class="caret"></span></h4>
                </button>
                <ul class="dropdown-menu dropdown-menu-left" role="menu" aria-labelledby="dLabel">
                  <?php
                  // if ($_SERVER["PHP_SELF"] == "/convenient/center.php") {
                  //   echo "
                  //     <li><a href='#' data-toggle='modal' data-target='#ChangePassword' data-whatever='@getbootstrap'>更改密碼</a></li>
                  //     <li role='separator' class='divider'></li>
                  //     <li><a href='login.html'>登出</a></li>
                  //   ";
                  // }else {
                  //   echo "
                  //     <li><a href='center.php'>會員中心</a></li>
                  //     <li role='separator' class='divider'></li>
                  //     <li><a href='login.html'>登出</a></li>
                  //   ";
                  // }
                  ?>
                  <li><?php echo $member_center;//會員中心網址?></li>
                  <li role='separator' class='divider'></li>
                  <li><a href='../login/TRUE'>登出</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
