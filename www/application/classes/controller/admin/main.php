<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Trycontroller {

   public function action_index()
    {
		$auth = Auth::instance();
		$header = View::factory('/admin/adminheader');
		$content = 	View::factory('/admin/adminview')
									->bind('username', $username)
									->bind('bd', $bd);								
		$username = ORM::factory('us')->getFullNameByUsername($_SESSION['login']);
		$bd = ORM::factory('us')->getBirthdays();
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
		
} 