<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Or_Main extends Controller_Trycontroller {

	public $template = 'templateview';
	
   public function action_index()
    {
		$auth = Auth::instance();
		
		$header = View::factory('/or/orheader');
		$content = 	View::factory('/or/orview')
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