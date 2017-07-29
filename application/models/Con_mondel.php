<?php
class Con_mondel extends CI_Model {

        public function __construct()
        {
          $this->load->database();
          $this->load->library('session');
        }

        public function Personal_Balance(){//查詢個人餘額
          $SB = $this->db->select("Balance")->get_where($this->db->protect_identifiers("balance"), array("MemberID"=>'1'));//查詢table然後以MemberID下條件="SELECT Balance FROM balance WHERE MemberID='1'"
          return  $SB->last_row('array');//回傳最後一筆資料,傳回陣列
        }

        public function CheckLogin($account, $password){
          // $SM = $this->db->select("MemberAccount, MemberPassword")->from("members")->where(array("MemberAccount" => $account, "MemberPassword"=>$password))->get_compiled_select();
          $SM =
                $this->db->select("MemberName, MemberAccount, MemberPassword, MemberLevel")->
                get_where($this->db->protect_identifiers("members"), array("MemberAccount" => $account, "MemberPassword" => $password));

          if (!empty($SM)) {
            $data = $SM->row();//會員資料
            $MemberData = array(
                                "login_account_number" => $data->MemberAccount,
                                "login_account_password" => $data->MemberPassword,
                                "login_name"=> $data->MemberName
                              );

            $this->session->set_tempdata($MemberData, NULL, 300);//設定300秒 = 5分鐘就會登出
            $Level = $data->MemberLevel;//會員等級
            redirect("convenient/Order/");//轉道訂購頁面
          }
        }
}

?>
