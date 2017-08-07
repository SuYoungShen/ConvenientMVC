<?php
  class Bc extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->helper(array('html', 'url', 'form', 'date'));
      $this->load->model("bc_mondel");
    }

    public function index(){
      $data["title"] = "便當系統後台";
      $meta = $this->bcmeta();
      $data["meta"] = meta($meta);

      $css = $this->css();//css引入檔案
      foreach ($css as $key => $value) {
        $data["css"][$key] = link_tag($value);
      }

      $js = $this->js();//js引入檔案
      foreach ($js as $key => $value) {
        $data["js"][$key] = script_tag($value);
      }

      $this->load->view('convenient/header', $data);
      $this->load->view('convenient/bcs/body');
    }

    public function InNewMenu(){//新增新菜單

      $StoreName = $this->input->post("new_store_name");//店家名
      $StorePhone = $this->input->post("new_phone_number");//電話
      $Description = $this->input->post("new_description");//說明
      $Pic = $this->input->post("new_pices_file");//照片以網址方式

      if (!empty($StoreName) && !empty($StorePhone) &&!empty($Description) && !empty($Pic)){

          date_default_timezone_set("Asia/Taipei");//設定時區
          $now = time();//抓取現在系統時間
          $datetime = unix_to_human($now, TRUE, 'en'); // 美規時間秒數顯示

          $How = $this->bc_mondel->InNewStore($StoreName, $StorePhone, $Description, $Pic, $datetime);//把資料丟到model做資料庫處理
          if ($How == true) {
            echo "<script>alert('新增成功');</script>";
            $this->output->set_header("refresh: 0.1;url='../../bc'");//轉到登入頁面
          }
      }
    }

    protected function bcmeta(){
      $meta = array(
        array(
          "content"=>"charset=utf-8"
        ),
        array(
          "name" => "X-UA-Compatible",
          "content"=>"IE=edge",
          "type" => "equiv"
        ),
        array(
          "name" => "viewport",
          "content" => "width=device-width, initial-scale=1"
        ),
        array(
          "name" => "description"
        ),
        array(
          "name" => "author"
        )
      );
      return $meta;
    }

    //css後台引入檔案
    protected function css(){
      $css = array(
                  array(
                    "href" => "bcs/vendor/bootstrap/css/bootstrap.min.css",
                    "rel" => "stylesheet"
                  ),
                  array(
                    "href" => "bcs/vendor/metisMenu/metisMenu.min.css",
                    "rel" => "stylesheet"
                  ),
                  array(
                    "href" => "bcs/vendor/datatables-plugins/dataTables.bootstrap.css",
                    "rel" => "stylesheet"
                  ),
                  array(
                    "href" => "bcs/vendor/datatables-responsive/dataTables.responsive.css",
                    "rel" => "stylesheet"
                  ),
                  array(
                    "href" => "bcs/dist/css/sb-admin-2.css",
                    "rel" => "stylesheet"
                  ),
                  array(
                    "href" => "bcs/vendor/font-awesome/css/font-awesome.min.css",
                    "rel" => "stylesheet"
                    ),
                    array(
                    "href" => "assets/css/bootstrap-select.min.css",
                    "rel" => "stylesheet"
                    )
                  );
          return $css;
        }//end css
        //css後台引入檔案

        //js引入檔案
        protected function js(){
          $js = array(
                      array(
                            "src" => "bcs/vendor/jquery/jquery.min.js",
                            "type" => "text/javascript"
                            ),
                      array(
                          "src" => "bcs/vendor/bootstrap/js/bootstrap.min.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "bcs/vendor/metisMenu/metisMenu.min.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "bcs/vendor/datatables/js/jquery.dataTables.min.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "bcs/vendor/datatables-plugins/dataTables.bootstrap.min.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "bcs/vendor/datatables-responsive/dataTables.responsive.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "bcs/dist/js/sb-admin-2.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "assets/js/bootstrap-select.min.js",
                          "type" => "text/javascript"
                          ),
                      array(
                          "src" => "assets/js/defaults-zh_TW.min.js",
                          "type" => "text/javascript"
                        ),
                        array(
                          "src" => "assets/js/add_field_button.js",
                          "type" => "text/javascript"
                        )
                      );
          return $js;
        }//end js
        //js引入檔案

}




 ?>
