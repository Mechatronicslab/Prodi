<?php
/**
 * Created by PhpStorm.
 * User: mr-lvs
 * Date: 26/12/18
 * Time: 14:07
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Query');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function flsh_msg($title,$type,$msg)
	{
		$color = '';

		switch ($type) {
			case 'ok':
				$color = 'alert-success';
				break;
			case 'warning':
				$color = 'alert-warning';
				break;
			case 'danger':
				$color = 'alert-danger';
				break;
			default:
				$color = 'alert-info';
				break;
		}

		$flash_message = array( 'title' => $title,
			'color' => $color,
			'msg'   => $msg
		);
		$this->session->set_flashdata('message',$flash_message);
	}


	public function index(){
		$this->load->view('login');
	}


	public function do_login()
	{

		$u = $this -> input -> post('nidn');
		$p = md5($this -> input -> post('password'));
		$verif = $this -> Query -> getData(array('username'=>$u,'password'=>$p, 'aktif'=>'1', 'id_level'=>'7'),'groupuser') -> row();
		if($verif):
			$session = array(
				'nmlengkap'    		=> $verif -> nmlengkap,
				'username'	  		=> $verif -> username,
				'user_is_login'   	=> TRUE,
				'id_level'			=> $verif -> id_level,
				'kdprodi_user'		=> $verif -> kdprodi_user
			);
			$this -> session -> set_userdata($session);
			$this -> flsh_msg('Welcome','ok','Selamat datang '.$verif->nmlengkap);
			redirect(base_url());
		else:
			$this -> flsh_msg('Gagal login','warning','username / password salah.');
			redirect(base_url('login'));
		endif;
	}

	public function do_logout()
	{
		session_destroy();
		redirect(base_url('login'));
	}
}
