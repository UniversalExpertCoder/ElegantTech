<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $table_category = "tbl_category";
	public $table_child_category = "tbl_child_category";
	public $table_product = "tbl_product";
	public $table_users = "tbl_users";

	public function _construct()
	{

		$this->load->helper(array('url', 'html', 'form'));
		/*if (!$this->isAuthorized()) {
			return redirect('home');
		}*/
	}

	public function print($post)
	{
		echo "<pre>"; print_r($post); exit();
	}
}
