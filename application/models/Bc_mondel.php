<?php
class Bc_mondel extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function AllStores()//全部店家名
  {
      return $Se = $this->db->select('StoreName')->get($this->db->protect_identifiers("stores"));
  }

  protected function SeStores($StoreName)//特定
  {
      return $Se = $this->db->select('StoreName')->get_where($this->db->protect_identifiers("stores"), array("StoreName" => $StoreName));
  }

  public function InNewStore($StoreName, $StorePhone, $Description, $Pic, $datetime)
  {
    $Se = $this->SeStores($StoreName);//先查詢店家名
    $How = $Se->row();//取值

    if ($How == NULL) {//等於null的話表示無此店家

      $data = array(
           'StoreName' => $StoreName,
           'StorePhone' => $StorePhone,
           'StoreDescription' => $Description,
           'StorePic' => $Pic,
           'StoreDatetime' => $datetime
         );

       $How = $this->db->insert("stores", $data);


     if ($How == true) {//判斷是否新增成功
       return $How;
     }else {
       return $How;
     }
    }else {
      return False;
    }

  }

  public function Personal_Balance(){//查詢個人餘額
    $SB = $this->db->select("Balance")
    ->get_where(
      $this->db->protect_identifiers("balance"),
      array("MemberID"=> $this->session->tempdata('id')));//查詢table然後以MemberID下條件="SELECT Balance FROM balance WHERE MemberID='1'"
      return  $SB->last_row('array');//回傳最後一筆資料,傳回陣列
    }




}

?>
