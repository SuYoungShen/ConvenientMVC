<?php
class Project extends CI_Controller {

  public function index()
  {
    $this->load->helper(array('html','url'));
    $data["title"] = "高雄景點";

    //css
    $css = array(
                  'css/bootstrap.min.css',
                  'css/prettyPhoto.css',
                  'css/font-awesome.min.css',
                  'css/animate.css',
                  'css/main.css',
                  'css/responsive.css'
                );
    //css

    //icon
    $icon = array(
                 array(
                      'href' => 'images/ico/favicon.png',
                      'rel' => 'apple-touch-icon-precomposed'
                    ),
                 array(
                      'href' => 'images/ico/apple-touch-icon-57-precomposed.png',
                      'rel'=>'apple-touch-icon-precomposed'
                    ),
                 array(
                      'href' => 'images/ico/apple-touch-icon-144-precomposed.png',
                      'rel' => 'apple-touch-icon-precomposed',
                      'sizes' => '144x144'
                    ),
                 array(
                      'href' => 'images/ico/apple-touch-icon-114-precomposed.png',
                      'rel' => 'apple-touch-icon-precomposed',
                      'sizes' => '114x114'
                    ),
                 array(
                      'href' => 'images/ico/apple-touch-icon-72-precomposed.png',
                      'rel' => 'apple-touch-icon-precomposed',
                      'sizes' => '72x72'
                    )
                );
    //icon

    //js檔案
    $js = array(
                'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
                'js/datatables.min.js',
                'favorite/js/insert.js'
              );
    //js檔案

    $fjs = array(
                  "js/bootstrap.min.js",
                  'js/smoothscroll.js',
                  'js/jquery.isotope.min.js',
                  'js/jquery.prettyPhoto.js',
                  'js/jquery.parallax.js',
                  'js/main.js'
                );

    foreach ($css as $key => $value) {//css
      $data["css"][$key] = link_tag($value, "stylesheet");
    }
    foreach ($icon as $key => $value) {//icon
      $data["icon"][$key] = link_tag($value);
    }
    foreach ($js as $key => $value) {
      $data["js"][$key] = script_tag($value);
    }
    foreach ($fjs as $key => $value) {
      $fdata["fjs"][$key] = script_tag($value);
    }
    $this->load->view("project/header.php",$data);
    $this->load->view("project/body.php");
    $this->load->view("project/footer.php",$fdata);
  }

}


 ?>
