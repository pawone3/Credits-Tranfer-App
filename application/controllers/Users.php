<?php

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}


	public function index() {
		$this->load->view('home');
	}


	public function view_users($id=NULL) {

		$ans['data']=$this->User_model->get_all_users();
		$this->load->view('users_list',$ans);
	}


	public function select_user($user_id) {

	    $this->session->set_userdata('creditor_id',$user_id);
		$ans['data']=$this->User_model->select_user($user_id);
		// echo($data->name);	
		$this->load->view('user_profile',$ans);
	}


	public function select_debtor($creditor_id) {

		$ans['creditor_id']=$creditor_id;
		$ans['data']=$this->User_model->get_all_users();
		$this->load->view('select_debtor',$ans);

	}

	public function transfer() {
        $debtor_id=$this->input->post('debtor_id');
        $this->session->set_userdata('debtor_id',$debtor_id);
	    $amount=$this->input->post('amount');

		if($this->User_model->transfer($amount)) {
		    $this->session->set_flashdata('success','Great! Credits Transferred Successfully');
            $this->load->view('home');
        }
		else {
            $this->load->view('select_debtor');
        }

	}

}