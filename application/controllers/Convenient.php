<?php
class Convenient extends CI_Controller {

      public function __construct()
      {
              parent::__construct();
              $this->load->model('con_mondel');
              // $this->load->model('news_model');
              $this->load->helper(array('html', 'url', 'form', 'date'));
              $this->load->library(array('session'));
      }

      public function SignOut(){//登出
        $this->session->sess_destroy();
        redirect("convenient/login/");//轉到登入頁
      }

      public function login(){//登入

        $data['title'] = '登入';
        $meta = $this->meta();
        $data["meta"] = meta($meta);

        $css = $this->css();//css引入檔案
        foreach ($css as $key => $value) {
          $data["css"][$key] = link_tag($value);
        }

        $js = $this->js();//js引入檔案
        foreach ($js as $key => $value) {
          $data["js"][$key] = script_tag($value);
        }

        $FormLogin = array(
                      "id" => "loginform",
                      "class" => "form-horizontal"
        );
        $data["form"]["FormLogin"] = form_open(base_url('convenient/CheckLogin/'), $FormLogin);

        $account = array(
                        "type" => "text",
                        "class" => "form-control",
                        "name" => "account",
                        "id" => "login-account",
                        "placeholder" => "請輸入帳號"
                        ,"required" => "required"
        );
        $data["form"]["Account"] = form_input($account);//帳號

        $password = array(
                        "type" => "password",
                        "class" => "form-control",
                        "name" => "password",
                        "id" => "password",
                        "placeholder" => "請輸入密碼",
                        "required" => "required"
        );
        $data["form"]["Password"] = form_input($password);//密碼

        $submit = array(
                        "type" => "submit",
                        "class" => "btn btn-success",
                        "id" => "btn-login",
                        "value" => "登入",
                        "required" => "required"
        );
        $data["form"]["submit"] = form_submit($submit);

        $data["form"]["sign"] = anchor(base_url("convenient/login/#"), "註冊會員", array("onClick"=>"$('#loginbox').hide();$('#signupbox').show()"));

        $data["form"]["login"] = anchor(base_url("convenient/login/#"), "返回登入頁面", array("id" => "signinlink","onClick"=>"$('#signupbox').hide(); $('#loginbox').show()"));

        $FormSign = array(
                      "id" => "signupform",
                      "class" => "form-horizontal"
        );
        $data["form"]["FormSign"] = form_open(base_url('convenient/Registered/'), $FormSign);

        $name = array(
                        "type" => "text",
                        "class" => "form-control",
                        "name" => "username",
                        "id" => "username",
                        "placeholder" => "請輸入姓名",
                        "required" => "required"
        );
        $data["form"]["Name"] = form_input($name);//姓名

        $passwords = array(
                        "type" => "password",
                        "class" => "form-control",
                        "name" => "passwords",
                        "id" => "passwords",
                        "placeholder" => "請輸入密碼",
                        "required" => "required"
        );
        $data["form"]["Passwords"] = form_input($passwords);//密碼
        $AgainPassword = array(
                        "type" => "password",
                        "class" => "form-control",
                        "name" => "confirm_password",
                        "id" => "confirm_password",
                        "placeholder" => "請再次輸入密碼",
                        "required" => "required"
        );
        $data["form"]["AgainPassword"] = form_input($AgainPassword);//再次輸入密碼

        $sign = array(
                        "type" => "submit",
                        "class" => "btn btn-info",
                        "id" => "btn-signup",
                        "value" => "註冊",
                        "required" => "required"
        );
        $data["form"]["SubmitSign"] = form_submit($sign);

        $this->load->view('convenient/header', $data);
        $this->load->view('convenient/login');
      }

      public function CheckLogin(){//檢查登入
        $account = $this->input->post('account');//使用者輸入的姓名
        $password = $this->input->post('password');//使用者輸入的密碼
        $level = $this->con_mondel->CheckLogin($account, $password);//檢查等入狀態
        if ($level == "member") {
          redirect("convenient/Order/");//轉到訂購頁面
        }
      }

      public function Registered(){
        $name = $this->input->post('name');//使用者輸入的帳號
        $account = $this->input->post('account');//使用者輸入的帳號
        $password = $this->input->post('password');//使用者輸入的密碼

        if (!empty($name) || !empty($account) || !empty($password)) {
          date_default_timezone_set("Asia/Taipei");//設定時區
          $now = time();//抓取現在系統時間
          $datetime = unix_to_human($now, TRUE, 'en'); // 美規時間秒數顯示
          $How = $this->con_mondel->Registered($name, $account, $password, $datetime);//檢查等入狀態

          if ($How == true) {
            echo "<script>alert('註冊成功');</script>";
            $this->output->set_header("refresh: 0.1;url='../login'");//轉到登入頁面
          }else {
            echo "<script>alert('註冊失敗');</script>";
            $this->output->set_header("refresh: 0.1;url='../login'");//轉到登入頁面
          }
        }else {
          echo "string";
        }
      }

      public function Order()//訂購頁面
      {
        if (!empty($this->session->tempdata())) {//判斷SESSION如果不等於空的話就跳到訂購頁面

          $data["PB"] = $this->con_mondel->Personal_Balance();//會員餘額PB = Personal_Balance

          $data['title'] = '便當系統';
          $data["home"] = anchor(base_url('convenient/'), "C", "class='navbar-brand'");
          $data["footer"] = "<p>By: &copy; Your Website 2014</p>";

          $meta = $this->meta();
          $data["meta"] = meta($meta);

          $data["member_center"] = anchor(base_url('convenient/center/'), "會員中心");

          $css = $this->css();//css引入檔案
          foreach ($css as $key => $value) {
            $data["css"][$key] = link_tag($value);
          }

          $js = $this->js();//js引入檔案
          foreach ($js as $key => $value) {
            $data["js"][$key] = script_tag($value);
          }

          $form = array(
                        "class" => "form-horizontal"
          );
          $data["form"]["TodayStoreName"] = "C";//店家名
          $data["form"]["form"] = form_open(base_url('convenient/insert/'), $form);

          $data["form"]["IHTodayID"] = form_hidden("TodayID");//input type="hidden" 店家ID
          $data["form"]["TodayStorePhone"] = "123";//店家電話

          $img = array(
                        "class" => "img-responsive",
                        "src" => "http://www.fanchuan.com.tw/templates/cache/946/images/products/photooriginal-946-9448.JPG"
                      );

          $data["form"]["Img"] = img($img);

          $data["form"]["Description"] = "123木頭人";//說明

          $select = array(
                          "a+60" => "a+60",
                          "b+50" => "b+50"
          );
          $data["form"]["Select"] = form_dropdown("cp",$select,'',"class='selectpicker' id='cp' title='便當+價位' data-style='btn-warning'");//便當的下拉

          $number = array(
                          "type" => "number",
                          "class" => "form-control",
                          "name" => "number",
                          "id" => "number",
                          "placeholder" => "請輸入數量",
                          "required" => "required"
          );
          $data["form"]["InputNumber"] = form_input($number);//數量

          $name = array(
                          "type" => "text",
                          "class" => "form-control",
                          "name" => "name",
                          "id" => "name",
                          "placeholder" => "(抓取會員名)",
                          "required" => "required"
          );

          $data["form"]["InputName"] = form_input($name);//姓名

          $this->load->view('convenient/header', $data);
          $this->load->view('convenient/body');
          $this->load->view('convenient/footer');

        }else{
          redirect("convenient/login/");//轉到登入頁面
        }
      }

      protected function meta(){
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

      //css引入檔案
      protected function css(){
        $css = array(
                array(
                  "href" => "assets/css/bootstrap.min.css",
                  "rel" => "stylesheet"
                ),
                array(
                  "href" => "assets/css/portfolio-item.css",
                  "rel" => "stylesheet"
                ),
                array(
                  "href" => "assets/css/bootstrap-select.min.css",
                  "rel" => "stylesheet"
                ),
                array(
                  "href" => "assets/css/font-awesome.min.css",
                  "rel" => "stylesheet"
                )
        );
        return $css;
      }//end css
      //css引入檔案

      //js引入檔案
      protected function js(){
        $js = array(
                array(
                  "src" => "assets/js/jquery.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/bootstrap.min.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/jquery.validate.min.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/form.validate.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/messages_zh.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/bootstrap-select.min.js",
                  "type" => "text/javascript"
                )
        );
        return $js;
      }//end js
      //js引入檔案

      public function center(){
        $data['title'] = '會員中心';
        $data["home"] = anchor(base_url('convenient/'), "首頁","class='navbar-brand'");
        $data["footer"] = "<p>By: &copy; Your Website 2014</p>";
        $meta = $this->meta();
        $data["meta"] = meta($meta);

        $data["member_center"] = anchor(base_url('convenient/change'), "更改密碼");

        $css = $this->css();//css引入檔案
        foreach ($css as $key => $value) {
          $data["css"][$key] = link_tag($value);
        }

        $js = $this->js();//js引入檔案
        foreach ($js as $key => $value) {
          $data["js"][$key] = script_tag($value);
        }

        $this->load->view('convenient/header', $data);
        $this->load->view('convenient/center');
        $this->load->view('convenient/footer',$data);
      }

}
 ?>
