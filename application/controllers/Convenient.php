<?php
class Convenient extends CI_Controller {

      public function __construct()
      {
              parent::__construct();
              $this->load->model('con_mondel');
              // $this->load->model('news_model');
              $this->load->helper(array('html', 'url', 'form'));
              $this->load->library('session');
      }

      public function index()
      {


        $data["PB"] = $this->con_mondel->Personal_Balance();//會員餘額PB = Personal_Balance
        echo "<pre>";
        var_dump($data["PB"]);
        echo "</pre>";
      
        $data['title'] = '便當系統';
        $data["home"] = anchor(base_url('convenient/'), "C","class='navbar-brand'");
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
        $data["form"]["form"] = form_open(base_url('convenient/insert/'), $form);
        $data["form"]["TodayStoreName"] = "C";//店家名

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
                  "src" => "assets/js/messages_zh.js",
                  "type" => "text/javascript"
                ),
                array(
                  "src" => "assets/js/form_validate.js",
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

      public function insert(){
      // echo  $cp = $this->input->post(array("number",'name'));
      // echo  $number = $this->input->post("number");
      // echo  $name = $this->input->input_stream("name", TRUE);


      }

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
