<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Parent_Main extends Controller_Trycontroller {
	public $template = 'templateview';
	
   public function action_index()
    {
		$auth = Auth::instance();
		$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
		$content = View::factory('/parent/parentview')
					->bind('mot', $mot)
					->bind('fat', $fat)
					->bind('student_name', $student_name)
					->bind('gender', $gender)
					->bind('c', $c)
					->bind('bd', $bd);
					
		$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		$gender = ORM::factory('us')->getGenderById($student_id);
		$mot = ORM::factory('userinfo')->getMotFullNameById($user_id);
		$fat = ORM::factory('userinfo')->getFatFullNameById($user_id);
		$student_name = ORM::factory('us')->getFullNameById($student_id);
		$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
		$class_let = ORM::factory('userinfo')->getClassLetById($student_id);				
		$c = $class_numb.$class_let;
		$bd = ORM::factory('us')->getBirthdays();
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
		
} 