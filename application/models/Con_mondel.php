<?php
class Con_mondel extends CI_Model {

        public function __construct()
        {
          $this->load->database();
        }

        public function Personal_Balance(){//查詢個人餘額

          // $SB = $this->db->select("Balance")->get_where($this->db->protect_identifiers("balance"), array("MemberID"=>'1'));//查詢table然後以MemberID下條件="SELECT Balance FROM balance WHERE MemberID='1'"
          // return  $SB->last_row('array');//回傳最後一筆資料,傳回陣列
          $s = "SELECT * FROM `balance` WHERE MemberID='1'";
          $q = $this->db->query($s);
          $q->data_seek(5);
          $t = $q->unbuffered_row();
          return $t;
        }
}

?>
