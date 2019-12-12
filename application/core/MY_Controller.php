<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class MY_Controller extends CI_Controller{
	Public Function __construct(){
		parent::__construct();
		define('PUB','public');
		define('MODULE','admin');
		define('C',$this->uri->segment(2,'main'));
		define('M',$this->uri->segment(3,'index'));
	}

	protected function _captcha(){
		$this->load->helper('captcha');

		$config = array(
		    'word' => '123456',
		    'img_path' => './'. PUB . '/captcha/',
		    'img_url' => base_url('/public/captcha/'),
		    'font_path' => './system/fonts/texb.ttf',
		    'img_width' => '150',
		    'img_height' => 30,
		    'expiration' => 7200
		 );

		$captcha = create_captcha($config);
		print_r($captcha);
	}
}