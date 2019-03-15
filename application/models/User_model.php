<?php

class User_model extends CI_Model {

	public function get_all_users() {

		$query=$this->db->get('Users');
		return $query->result();
	}

	public function select_user($user_id) {

		$this->db->where('id',$user_id);	
		$query=$this->db->get('Users');
		// if($query)echo "jj";
		return $query->row();
	}

	public function transfer($amount) {
//	    echo $amount;
	    $debtor_id=$this->session->userdata('debtor_id');
        $creditor_id=$this->session->userdata('creditor_id');

        $this->db->where('id',$creditor_id);
        $query=$this->db->get('Users');
        $row = $query->row();
        echo $row->current_credit;
        $new_credits=$row->current_credit-$amount;
        if($new_credits<0) return false;
        $this->db->where('id',$creditor_id);
        $result['b']=$this->db->update('Users', array('current_credit'=>$new_credits));

        $this->db->where('id',$debtor_id);
        $query=$this->db->get('Users');
        $row = $query->row();
        echo $row->current_credit;
        $new_credits=$row->current_credit+$amount;
        $this->db->where('id',$debtor_id);
        $result['a']=$this->db->update('Users', array('current_credit'=>$new_credits));


        return true;
    }
}