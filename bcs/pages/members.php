<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- 下拉式選單的css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
          include 'left.php';
         ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">存款</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <form class="form-horizontal" action="/action_page.php">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="deposit_member">存款人</label>
                              <select class="selectpicker col-sm-2" id="deposit_member" name="deposit_member">
                                <optgroup label="Picnic">
                                  <option value="a">Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping">
                                  <option>Tent</option>
                                  <option>Flashlight</option>
                                  <option>Toilet Paper</option>
                                </optgroup>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="deposit_money">存款金額:</label>
                              <div class="col-sm-3">
                                <input type="number" class="form-control" id="deposit_money" placeholder="請輸入存款金額" name="deposit_money">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger" name="submit_deposit">存款</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <hr/>
            <!-- 餘額 -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">餘額</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- 餘額 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-balance">
                            <thead>
                              <tr>
                                <th>會員名</th>
                                <th>便當+價位</th>
                                <th>餘額</th>
                                <th>日期</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                              </tr>
                              <tr class="even gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                              </tr>
                              <tr class="odd gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                              </tr>
                              <tr class="even gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                              </tr>
                              <tr class="odd gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                              </tr>

                            </tbody>
                          </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- 餘額 -->
            <hr/>
            <!-- 會員 -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">會員</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- 會員 -->
            <!-- 會員 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-members">
                            <thead>
                              <tr>
                                <th>帳號</th>
                                <th>密碼(加密)</th>
                                <th>姓名</th>
                                <th>存款金額</th>
                                <th>存款日期</th>
                                <th>餘額</th>
                                <th>餘額日期</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td class="center">4</td>
                                <td class="center">X</td>
                                <td class="center">X</td>
                                <td class="center">X</td>
                                <td class="center">
                                  <span
                                    class="fa fa-pencil-square-o" aria-hidden="true"
                                    data-toggle="modal"
                                    data-target="#Edit" style="color:#0044BB">
                                  </span>
                                  <span
                                    class="glyphicon glyphicon-remove" aria-hidden="true"
                                    data-toggle="modal"
                                    data-target="#Delete" style="color:red">
                                  </span>
                                </td>
                              </tr>
                              <tr class="even gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td class="center">5</td>
                                <td class="center">C</td>
                                <td class="center">C</td>
                                <td class="center">C</td>
                                <td class="center">C</td>
                              </tr>
                              <tr class="odd gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td class="center">5.5</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                              </tr>
                              <tr class="even gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td class="center">6</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                              </tr>
                              <tr class="odd gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td class="center">7</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                                <td class="center">A</td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- 會員 -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Edit -->
    <div id="Edit" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">會員更新</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="/action_page.php" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="MemberAccount">帳號</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="MemberAccount" placeholder="請輸入帳號" name="MemberAccount">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MemberPassword">密碼</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="StorePhone" placeholder="請輸入密碼" name="StorePhone">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MemberName">姓名</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="MemberName" placeholder="請輸入姓名" name="MemberName">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MDMoney">存款金額</label>
                <div class="col-sm-10">
                  <p class="h5" name="MDMoney" id="MDMoney">(存款金額)</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MDDatetime">存款日期</label>
                <div class="col-sm-10">
                  <p class="h5" name="MDDatetime" id="MDDatetime">(存款日期)</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MBalance">餘額</label>
                <div class="col-sm-10">
                  <p class="h5" name="MBalance" id="MBalance">(餘額)</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MDatetime">餘額日期</label>
                <div class="col-sm-10">
                  <p class="h5" name="MDatetime" id="MDatetime">(餘額日期)</p>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger pull-left" name="submit_up_convenient">更新黑~~~</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">關閉</button>
          </div><!-- modal-header -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- #Edit -->
    <!-- Delete -->
    <div id="Delete" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">確定要刪除(會員名)帳號嗎？</h4>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="submit_de_member">刪除</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">關閉</button>
          </div><!-- modal-header -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- #Delete -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- 下拉式選單的js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- 下拉式選單的js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-zh_TW.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-balance').DataTable({
            responsive: true
        });
        $('#dataTables-members').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
