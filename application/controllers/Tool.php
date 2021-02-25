<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends Core {

	public function Tool1(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool1',$data);
		
	}

	public function Tool2(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool2',$data);
		
	}
}	
