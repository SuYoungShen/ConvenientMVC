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

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- 左邊那排 -->
        <?php include 'left.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">已點菜人員</h1>
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

                            <a download="somedata.xls" href="#" class="btn btn-info"
                              onclick="return ExcellentExport.excel(this, 'dataTables-example', 'Sheet Name Here');">
                              匯出excel
                            </a>
                            <br/>
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                              <tr>
                                <th>便當</th>
                                <th>價位</th>
                                <th>我是誰...?</th>
                                <th>日期</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td class="center">4</td>
                                <td class="center">
                                  <span class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="modal" data-target="#Edit" style="color:#0044BB">
                                  </span>
                                  <span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="modal" data-target="#Delete" style="color:red">
                                  </span>
                                </td>
                              </tr>
                              <tr class="even gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td class="center">5</td>
                                <td class="center">C</td>
                              </tr>
                              <tr class="odd gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td class="center">5.5</td>
                                <td class="center">A</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
            <h4 class="modal-title">更新便當</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="/action_page.php" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="SelectConvenient">便當</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="SelectConvenient" placeholder="請輸入便當" name="SelectConvenient">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="SelectPrice">價位</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="SelectPrice" placeholder="請輸入價位" name="SelectPrice">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="MemberName">姓名</label>
                <div class="col-sm-10">
                  <p class="h5">(會員名)</p>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success pull-left" name="submit_up_select">更新黑~~~</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">關閉</button>
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
            <h4 class="modal-title">確定要刪除嗎</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="submit_de">刪除</button>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript" src="../js/excellentexport.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
