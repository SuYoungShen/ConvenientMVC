<?php
class Con_mondel extends CI_Model {

  public function __construct()
  {
    $this->load->database();
    $this->load->library(array('session'));
  }

  public function Personal_Balance(){//查詢個人餘額
    $SB = $this->db->select("Balance")
    ->get_where(
      $this->db->protect_identifiers("balance"),
      array("MemberID"=> $this->session->tempdata('id')));//查詢table然後以MemberID下條件="SELECT Balance FROM balance WHERE MemberID='1'"
      return  $SB->last_row('array');//回傳最後一筆資料,傳回陣列
    }

    public function CheckLogin($account, $password){

      $SM =
      $this->db->select("MemberID, MemberName, MemberAccount, MemberPassword, MemberLevel")->
      get_where($this->db->protect_identifiers("members"), array("MemberAccount" => $account, "MemberPassword" => $password));

      if (!empty($SM->row())) {
        $data = $SM->row();//會員資料
        $MemberData = array(
          "id" => $data->MemberID,
          "login_account_number" => $data->MemberAccount,
          "login_account_password" => $data->MemberPassword,
          "login_name"=> $data->MemberName
        );

        $this->session->set_tempdata($MemberData, NULL, 300);//設定300秒 = 5分鐘就會登出
        return $Level = $data->MemberLevel;//會員等級

      }else {
        echo "<script>alert('你誰');</script>";
        $this->output->set_header("refresh: 0.1;url='../login'");//轉到登入頁面
      }
    }

    public function Registered($name, $account, $password, $datetime){
      $SM =
      $this->db->select("MemberAccount")->
      get_where($this->db->protect_identifiers("members"), array("MemberAccount" => $account));

      if (empty($SM->row())) {//如果等於空,表示無帳號
        $data = array(
          'MemberName' => $name,
          'MemberAccount' => $account,
          'MemberPassword' => $password,
          'MemberDatetime' => $datetime
        );
        $How = $this->db->insert("members", $data);
        if ($How == true) {//判斷是否新增成功
          return $How;
        }else {
          return $How;
        }
      }
    }

    public function Personal_Deposit_Details()//個人存款明細
    {
      $PDD =
      $this->db->select("Deposit, DDatetime")->
      get_where($this->db->protect_identifiers("deposit"), array("MemberID" => $this->session->tempdata('id')));
      return $PDD->result_array();
    }

    public function Personal_Balance_Details()//個人餘額明細
    {
      $PBD =
      $this->db->select("Balance, BDatetime")->
      get_where($this->db->protect_identifiers("balance"), array("MemberID" => $this->session->tempdata('id')));
      return $PBD->result_array();
    }

    public function Personal_BC_Details()//個人曾經訂購過的便當明細BC = Before Convenient
    {
      $PBCD =
      $this->db->select("STodayStore, SConvenient, SPrice, SQuantity, STotal, SDatetimes")->
      get_where($this->db->protect_identifiers("selectmembers"), array("SM" => $this->session->tempdata('id')));
      return $PBCD->result_array();
    }

}

?>
