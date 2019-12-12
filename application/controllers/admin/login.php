<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Login extends MY_Controller{
    public function index(){
    	$this->_captcha();
    	exit();
        $this->load->view('admin/user/login');
    }
}
