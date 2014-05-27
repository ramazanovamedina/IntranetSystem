<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Schedule extends Controller_Template{

	public $template = 'templateview';

	public function action_create_schedule()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		
		$test = View::factory('scheduleheader')
						->bind('classes', $classes)
						->bind('cl', $cl);
		$class = new Classes();
		$classes = $class->getAll();	

		$content = "";
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_rdrct_cr()
	{
		$this->auto_render = FALSE;
		$class = Arr::get($_POST, 'cl', '');
		$link = "/schedule/create/".$class;
		echo $link;
	}
	public function action_create()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		
		$test = View::factory('scheduleheader')
						->bind('classes', $classes)
						->bind('cl', $cl);
		$class = new Classes();
		$classes = $class->getAll();	
		
		$content = View::factory('createschedule')
						->bind('cl', $cl)
						->bind('array', $array)
						->bind('subjects', $subjects);
			
		$subjects = ORM::factory('subject')->getAll();
		$cl = $this->request->param('id');
		
		$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
		$array = array();

		for($i = 0; $i<6; $i++)
		{
			for($j = 1; $j<=7; $j++)
			{
				$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($week[$i], $j, $cl);
				$teacher_id = ORM::factory('schedule')->getTeacherByDayAndOrder($week[$i], $j, $cl);
				$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
				$teacher_name = ORM::factory('us')->getFullNameById($teacher_id);
				$array[$week[$i]][$j] = array($subject_name, $teacher_name);
			}
		}
		
		if(isset($_POST['btnsubmit']))
		{
			$content = View::factory('createschedule')
						->bind('cl', $cl)
						->bind('array', $array)
						->bind('ok', $ok)
						->bind('subjects', $subjects);
						
			$subjects = ORM::factory('subject')->getAll();	
			$cl = Arr::get($_POST, 'secret', '');
			
			$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			for($i = 0; $i<6; $i++)
			{
				for($j = 1; $j<=7; $j++)
				{
					$sub = "sub".$week[$i].$j;
					$teach = "teach".$week[$i].$j;
					$subject_id = ORM::factory('subject')->getSubjectIdByName(Arr::get($_POST, $sub, ''));
					$teacher_id = ORM::factory('us')->getUserIdByFullName(Arr::get($_POST, $teach, ''));
					if($subject_id!=""&&$teacher_id!="")
					{
						$schedule = array($week[$i], $j, $subject_id, $teacher_id, $cl);
						$query = ORM::factory('schedule')->create_record($schedule);
						$ok = "";
					}
					else
					{
						$schedule = array($week[$i], $j, $subject_id, $teacher_id, $cl);
						$query = ORM::factory('schedule')->delete_record($schedule);
					}
				}
			}
		}
		
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	
	}
	
	public function action_teacher_schedule()
	{
		$auth = Auth::instance();
		if($auth->logged_in('teacher')){
			$teacher = "";
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
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}	
		else if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$test = View::factory('teacherscheduleheader')
					->bind('subjects', $subjects);	
		$subjects = ORM::factory('subject')->getAll();
		$content = View::factory('viewteacherschedule')
					->bind('array', $array)
					->bind('usname', $usname)
					->bind('me', $me);
		
		$id = $this->request->param('id');
		if(isset($_GET['user']))
			$user = $_GET['user'];
		if(isset($teacher)&&isset($id)||(isset($user)))
		{
			$test= "";
			if(isset($teacher)&&!isset($user))
			{
				$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
				$me = "";
			}
			else
			{
				$teacher_id = $user;
				$usname = ORM::factory('us')->getFullNameById($teacher_id);
			}
		
			$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			$array = array();
			for($i = 0; $i<6; $i++)
			{
				for($j = 1; $j<=7; $j++)
				{
					$subject_id = ORM::factory('schedule')->getSubjectByUserId($week[$i], $j, $teacher_id);
					$class_id = ORM::factory('schedule')->getClassByTeacherId($week[$i], $j, $teacher_id);
					$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
					$array[$week[$i]][$j] = array($subject_name, $class_id);
				}
			}
			
		}
		
		else
		{
			$content = "";
		}
		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_rdrct_teach()
	{
		$this->auto_render = FALSE;
		$username = Arr::get($_POST, 'name', '');
		$user_id = ORM::factory('us')->getUserIdByFullName($username);
		$link = "/schedule/teacher/".$user_id;
		echo $link;
	}
	
	public function action_teacher()
	{
		$auth = Auth::instance();
		if($auth->logged_in('teacher')){
			$teacher = "";
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
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}	
		else if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$test = View::factory('teacherscheduleheader')
					->bind('subjects', $subjects);	
		$subjects = ORM::factory('subject')->getAll();
		$content = View::factory('viewteacherschedule')
					->bind('array', $array)
					->bind('usname', $usname)
					->bind('me', $me);
	
		$teacher_id = $this->request->param('id');
		$usname = ORM::factory('us')->getFullNameById($teacher_id);
		$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
		$array = array();
		for($i = 0; $i<6; $i++)
		{
			for($j = 1; $j<=7; $j++)
			{
				$subject_id = ORM::factory('schedule')->getSubjectByUserId($week[$i], $j, $teacher_id);
				$class_id = ORM::factory('schedule')->getClassByTeacherId($week[$i], $j, $teacher_id);
				$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
				$array[$week[$i]][$j] = array($subject_name, $class_id);
			}
		}
	
		
		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_student_schedule()
	{
		$auth = Auth::instance();

		if($auth->logged_in('student')){
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
		else if($auth->logged_in('teacher')){
			$teacher = "";
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
	
		$test = View::factory('studentscheduleheader')
						->bind('classes', $classes);	
		$class = new Classes();
		$classes = $class->getAll();
		
		$content = View::factory('viewstudentschedule')
					->bind('array', $array)
					->bind('classname', $class)
					->bind('me', $me);
		
		$id = $this->request->param('id');
		if((isset($student)||isset($parent))&&isset($id))
		{
			$me = "";
			$test= "";
			if(isset($student))
				$student_id = ORM::factory('us')->getUserId($_SESSION['login']);
			else if(isset($parent))
			{
				$parent_id = ORM::factory('us')->getUserId($_SESSION['login']);
				$student_id = ORM::factory('userinfo')->getChildIdByParentId($parent_id);
			}
			$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
			$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
			$class = $class_numb.$class_let;
			$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			$array = array();
			for($i = 0; $i<6; $i++)
			{
				for($j = 1; $j<=7; $j++)
				{
					$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($week[$i], $j, $class);
					$teacher_id = ORM::factory('schedule')->getTeacherByDayAndOrder($week[$i], $j, $class);
					$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
					$teacher_name = ORM::factory('us')->getFullNameById($teacher_id);
					$array[$week[$i]][$j] = array($subject_name, $teacher_name);
				}
			}
		}
		else
		{
			$content = "";
		}
		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_rdrct_cl()
	{
		$this->auto_render = FALSE;
		$class = Arr::get($_POST, 'cl', '');
		$link = "/schedule/class/".$class;
		echo $link;
	}
	public function action_class()
	{
		$auth = Auth::instance();

		if($auth->logged_in('student')){
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
		else if($auth->logged_in('teacher')){
			$teacher = "";
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
	
		$test = View::factory('studentscheduleheader')
						->bind('classes', $classes);	
		$class = new Classes();
		$classes = $class->getAll();
		
		$content = View::factory('viewstudentschedule')
					->bind('array', $array)
					->bind('classname', $class)
					->bind('me', $me);
					
		$class = $this->request->param('id');
		$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
		$array = array();
		for($i = 0; $i<6; $i++)
		{
			for($j = 1; $j<=7; $j++)
			{
				$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($week[$i], $j, $class);
				$teacher_id = ORM::factory('schedule')->getTeacherByDayAndOrder($week[$i], $j, $class);
				$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
				$teacher_name = ORM::factory('us')->getFullNameById($teacher_id);
				$array[$week[$i]][$j] = array($subject_name, $teacher_name);
			}
		}
		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
}
	
		
