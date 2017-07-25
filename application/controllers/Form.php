<?php

class Form extends CI_Controller {

        public function index()
        {
          $this->load->database();

					$this->load->helper(array('html','url'));
          // $a = array(
          //             array("src"=>"css/css.css"),
          //             array("src"=>"css/csss.css")
          //           );
          // foreach ($a as $key => $value) {
          //   $data["css_local"][$key] = link_tag($value["src"]);
          // }

          // $q = $this->db->get("news");
          $q = $this->db->get("news")->result_array();
          // $this->db->delete('news', array('id' => '4'));

          $d["a"] = $q;
          $this->load->view("myform.php",$d);
        }


}
