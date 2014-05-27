<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Teacher_Main extends Controller_Trycontroller {

	public $template = 'templateview';
	
   public function action_index()
    {
		$auth = Auth::instance();
		$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
		$content = View::factory('/teacher/teacherview')	
						->bind('username', $username)
						->bind('subs', $subs)
						->bind('bd', $bd);
		$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$username = ORM::factory('us')->getFullNameByUsername($_SESSION['login']);
		$bd = ORM::factory('us')->getBirthdays();
		$subs = ORM::factory('userinfo')->getTeacherSubjectsById($user_id);
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
		
} 