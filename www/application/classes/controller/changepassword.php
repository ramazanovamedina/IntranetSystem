<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Changepassword extends Controller_Template {

	public $template = 'templateview';
		
	public function action_change_password()
	{
		$auth = Auth::instance();
		$content = View::factory('changepassword')
					->bind('user_id', $user_id)
					->bind('error_new', $error_new)
					->bind('error_old', $error_old)
					->bind('empty', $empty)
					->bind('ok', $ok);
					
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
								->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('student')){
			$header = View::factory('/student/studentheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
							->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
			
		$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		
		if(isset($_POST['btnsubmit']))
		{
			$oldpass = Arr::get($_POST, 'oldpass', '');
			$newpass = Arr::get($_POST, 'newpass', '');
			$newpass2 = Arr::get($_POST, 'newpass2', '');
			if(ORM::factory('us')->checkPass($user_id, $oldpass)&&$newpass==$newpass2&&!empty($oldpass)&&!empty($newpass)&&!empty($newpass2)){
				$result = ORM::factory('us')->changePass($user_id, $newpass);
				$ok = "";
			}
			else if (!ORM::factory('us')->checkPass($user_id, $oldpass))
				$error_old = "";
			else if(empty($newpass)||empty($newpass2))
				$empty = "";
			else if($newpass!=$newpass2)
				$error_new = "";
		}
			
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
			
	}
	
		
	
		
}	