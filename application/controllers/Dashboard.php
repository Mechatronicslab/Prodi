<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Query');
		$this->load->library('form_validation');
		$this -> namalengkap  	= $_SESSION['nmlengkap'];
		$this -> username 		= $_SESSION['username'];
		$this -> idlevel    	= $_SESSION['id_level'];
		$this -> kdprodi_user	= $_SESSION['kdprodi_user'];

		#cek login
		if(isset($_SESSION['user_is_login']) and $_SESSION['user_is_login']== true):
			$this -> namalengkap 	    = $_SESSION['nmlengkap'];
			$this -> username 			= $_SESSION['username'];
			$this -> idlevel    		= $_SESSION['id_level'];
			$this -> kdprodi_user	    = $_SESSION['kdprodi_user'];
		else:
			$this -> flsh_msg('Perhatian!','warning','anda harus login untuk mengakses halaman tersebut');
			redirect(base_url('login'));
		endif;
	}

	public function flsh_msg($title,$type,$msg)
	{
		$color = '';

		switch ($type) {
			case 'ok':
				$color = 'callout-success';
				break;
			case 'warning':
				$color = 'callout-warning';
				break;
			case 'danger':
				$color = 'callout-danger';
				break;
			default:
				$color = 'callout-info';
				break;
		}

		$flash_message = array( 'title' => $title,
			'color' => $color,
			'msg'   => $msg
		);
		$this->session->set_flashdata('message',$flash_message);
	}


	public function index()
	{
		$data['web'] 	= array(
			'page'		  => 'home.php'
		);

		$data['user']	= array(
			'name' 	  => $this -> username,
			'level'	  => $this -> idlevel,
			'nmlengkap' => $this -> namalengkap
		);
		//echo $this->username;
		$this->load->view('Dashboard/template', $data);
	}
}
