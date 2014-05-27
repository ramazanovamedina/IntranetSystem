<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Student_Main extends Controller_Trycontroller {

	public $template = 'templateview';
	
   public function action_index()
    {	
		$auth = Auth::instance();
		$header = View::factory('/student/studentheader')
						->bind('user_id', $user_id);
		$content = 	View::factory('/student/studentview')
						->bind('username', $username)
						->bind('gender', $gender)
						->bind('c', $c)
						->bind('bd', $bd);
						
		$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$username = ORM::factory('us')->getFullNameByUsername($_SESSION['login']);				
		$gender = ORM::factory('us')->getGenderById($user_id);
		$class_numb = ORM::factory('userinfo')->getClassNumbById($user_id);
		$class_let = ORM::factory('userinfo')->getClassLetById($user_id);				
		$c = $class_numb.$class_let;
		$bd = ORM::factory('us')->getBirthdays();
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
		
		
	}
	
		
} 