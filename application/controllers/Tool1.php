<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool1 extends Core {

	public function index(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool1',$data);
		
	}
}	