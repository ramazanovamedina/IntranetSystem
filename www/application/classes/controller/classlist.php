<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Classlist extends Controller_Template{
	public $template = 'templateview';
	public function action_list()
	{	
	
		$auth = Auth::instance();
		
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
			$student = "";
			$header = View::factory('/student/studentheader')
							->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('parent')){
			$parent = "";
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$test = View::factory('classlistheader')
					->bind('classes', $classes);
		$cl = new Classes();
		$classes = $cl->getAll();
		
		$content = "";
		
		if(isset($student)||isset($parent))
		{
			$content = View::factory('classlist')
						->bind('students', $students);
			
			$test = "";
			if(isset($student))
			{
				$student_id = ORM::factory('us')->getUserId($_SESSION['login']);
			}
			else if (isset($parent))
			{
				$parent_id = ORM::factory('us')->getUserId($_SESSION['login']);
				$student_id = ORM::factory('userinfo')->getChildIdByParentId($parent_id);
			}
				$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
				$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
				$students_id = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
				$students = array();
				foreach ($students_id as $student)
					$students[] = array("name" => ORM::factory('us')->getFullNameById($student), "bday" => date('Y-m-d', strtotime(ORM::factory('us')->getDateOfBirthById($student))));
				sort($students);
		}
			
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_rdrct()
	{
		$this->auto_render = FALSE;
		$cl = Arr::get($_POST, 'cl', '');
		$link = "/classlist/classlist/".$cl;
		echo $link;
	}
	public function action_classlist()
	{
		$auth = Auth::instance();
		
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
								->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$test = View::factory('classlistheader')
					->bind('classes', $classes);
		$cl = new Classes();
		$classes = $cl->getAll();
		
		$content = View::factory('classlist')
					->bind('students', $students);
					
		$class_id = $this->request->param('id');	
		$class_numb = $cl->getClassNumber($class_id);
		$class_let = $cl->getClassLetter($class_id);
		$students_id = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
		$students = array();
		foreach ($students_id as $student)
			$students[] = array("name" => ORM::factory('us')->getFullNameById($student), "bday" => date('Y-m-d', strtotime(ORM::factory('us')->getDateOfBirthById($student))));
		sort($students);
	
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
}
