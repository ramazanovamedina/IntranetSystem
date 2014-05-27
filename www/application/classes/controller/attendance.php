<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Attendance extends Controller_Template{
	public $template = 'templateview';
	public function action_attendance()
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
		
		$test = View::factory('attendanceheader')
					->bind('classes', $classes);
		$cl = new Classes();
		$classes = $cl->getAll();
		
		
		$content = "";
		
		$startDate1 = '01 September 2013';
		$endDate1 = '25 October 2013';
		$startDate2 = '02 November 2013';
		$endDate2 = '27 December 2013';
		$startDate3 = '10 January 2014';
		$endDate3 = '25 March 2014';
		$startDate4 = '02 April 2014';
		$endDate4 = '25 May 2014';
		$cur_date = strtotime('2013-12-05');
		
		if(strtotime($startDate1) <= $cur_date && $cur_date <= strtotime($endDate1))
			$q = 1;
		if (strtotime($startDate2) <= $cur_date && $cur_date <= strtotime($endDate2))
			$q = 2;
		if (strtotime($startDate3) <= $cur_date && $cur_date <= strtotime($endDate3))
			$q = 3;
		if (strtotime($startDate4) <= $cur_date && $cur_date <= strtotime($endDate4))
			$q = 4;
		
		if(isset($student)||isset($parent))
		{
			$content = View::factory('attendance')
						->bind('subjects', $subjects)
						->bind('array', $array)
						->bind('attend', $attend)
						->bind('me', $me)
						->bind('q', $q);
			$me = "";
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
				$class = $class_numb.$class_let;
				$subjects_id = ORM::factory('schedule')->getSubjectsByClass($class);
				$subjects = array();
				foreach($subjects_id as $subject)
					$subjects[] = ORM::factory('subject')->getSubjectNameById($subject);
				$array = array();
				$attend = array();
				foreach($subjects as $subject)
				{
					$quarter1 = array();
					$quarter2 = array();
					$quarter3 = array();
					$quarter4 = array();
					
					$subject_id = ORM::factory('subject')->getSubjectIdByName($subject);
					$teacher_id = ORM::factory('schedule')->getTeacherByClassAndSubject($class, $subject_id);
					$week_days = ORM::factory('schedule')->getWeekDays($subject_id, $teacher_id, $class);
					$days = array();
					foreach($week_days as $w)	
						foreach($w as $key=>$value)
							$days[] = $value;
			
					for($i = strtotime($startDate1); $i <= strtotime($endDate1); $i = strtotime('+1 day', $i))
						for($j = 0; $j <count($days); $j+=2)
							if (date('l', $i) == $days[$j]) 
								$quarter1[] = array(date('Y-m-d', $i), $days[$j+1]);
					for($i = strtotime($startDate2); $i <= strtotime($endDate2); $i = strtotime('+1 day', $i))
						for($j = 0; $j <count($days); $j+=2)
							if (date('l', $i) == $days[$j]) 
								$quarter2[] = array(date('Y-m-d', $i), $days[$j+1]);
					for($i = strtotime($startDate3); $i <= strtotime($endDate3); $i = strtotime('+1 day', $i))
						for($j = 0; $j <count($days); $j+=2)
							if (date('l', $i) == $days[$j]) 
								$quarter3[] = array(date('Y-m-d', $i), $days[$j+1]);
					for($i = strtotime($startDate4); $i <= strtotime($endDate4); $i = strtotime('+1 day', $i))
						for($j = 0; $j <count($days); $j+=2)
							if (date('l', $i) == $days[$j]) 
								$quarter4[] = array(date('Y-m-d', $i), $days[$j+1]);
					
					$array[] = array($subject_id => array('quarter1'=>$quarter1, 'quarter2'=>$quarter2, 'quarter3'=>$quarter3, 'quarter4'=>$quarter4));
					
					for($j = 0; $j < count($quarter1); $j++)
						$attend[] = array($subject_id.'/'.$quarter1[$j][0].'/'.$quarter1[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
					for($j = 0; $j < count($quarter2); $j++)
						$attend[] = array($subject_id.'/'.$quarter2[$j][0].'/'.$quarter2[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
					for($j = 0; $j < count($quarter3); $j++)
						$attend[] = array($subject_id.'/'.$quarter3[$j][0].'/'.$quarter3[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
					for($j = 0; $j < count($quarter4); $j++)
						$attend[] = array($subject_id.'/'.$quarter4[$j][0].'/'.$quarter4[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
					
				}
			}
			
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	
	public function action_rdrct()
	{
		$this->auto_render = FALSE;
		$username = Arr::get($_POST, 'name', '');
		$user_id = ORM::factory('us')->getUserIdByFullName($username);
		$link = "/attendance/attendance2/".$user_id;
		echo $link;
	}
	public function action_attendance2()
	{
		$auth = Auth::instance();
		
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
	//	else if($auth->logged_in('zavuch'))
	//		$header = View::factory('/zavuch/zavuchheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
								->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$test = View::factory('attendanceheader')
					->bind('classes', $classes);
		$cl = new Classes();
		$classes = $cl->getAll();
		
		$startDate1 = '01 September 2013';
		$endDate1 = '25 October 2013';
		$startDate2 = '02 November 2013';
		$endDate2 = '27 December 2013';
		$startDate3 = '10 January 2014';
		$endDate3 = '25 March 2014';
		$startDate4 = '02 April 2014';
		$endDate4 = '25 May 2014';
		$cur_date = strtotime('2013-12-05');
		
		if(strtotime($startDate1) <= $cur_date && $cur_date <= strtotime($endDate1))
			$q = 1;
		if (strtotime($startDate2) <= $cur_date && $cur_date <= strtotime($endDate2))
			$q = 2;
		if (strtotime($startDate3) <= $cur_date && $cur_date <= strtotime($endDate3))
			$q = 3;
		if (strtotime($startDate4) <= $cur_date && $cur_date <= strtotime($endDate4))
			$q = 4;
		
		$content = View::factory('attendance')
					->bind('subjects', $subjects)
					->bind('array', $array)
					->bind('attend', $attend)
					->bind('classname', $class)
					->bind('studentname', $studentname)
					->bind('q', $q);
					
		$student_id = $this->request->param('id');			
		$studentname = ORM::factory('us')->getFullNameById($student_id);		
		$class = ORM::factory('userinfo')->getClassNumbById($student_id).ORM::factory('userinfo')->getClassLetById($student_id);
		$subjects_id = ORM::factory('schedule')->getSubjectsByClass($class);
		$subjects = array();
		foreach($subjects_id as $subject)
			$subjects[] = ORM::factory('subject')->getSubjectNameById($subject);
		$array = array();
		$attend = array();
		foreach($subjects as $subject)
		{
			$quarter1 = array();
			$quarter2 = array();
			$quarter3 = array();
			$quarter4 = array();
			
			$subject_id = ORM::factory('subject')->getSubjectIdByName($subject);
			$teacher_id = ORM::factory('schedule')->getTeacherByClassAndSubject($class, $subject_id);
			$week_days = ORM::factory('schedule')->getWeekDays($subject_id, $teacher_id, $class);
			$days = array();
			foreach($week_days as $w)	
				foreach($w as $key=>$value)
					$days[] = $value;
	
			for($i = strtotime($startDate1); $i <= strtotime($endDate1); $i = strtotime('+1 day', $i))
				for($j = 0; $j <count($days); $j+=2)
					if (date('l', $i) == $days[$j]) 
						$quarter1[] = array(date('Y-m-d', $i), $days[$j+1]);
			for($i = strtotime($startDate2); $i <= strtotime($endDate2); $i = strtotime('+1 day', $i))
				for($j = 0; $j <count($days); $j+=2)
					if (date('l', $i) == $days[$j]) 
						$quarter2[] = array(date('Y-m-d', $i), $days[$j+1]);
			for($i = strtotime($startDate3); $i <= strtotime($endDate3); $i = strtotime('+1 day', $i))
				for($j = 0; $j <count($days); $j+=2)
					if (date('l', $i) == $days[$j]) 
						$quarter3[] = array(date('Y-m-d', $i), $days[$j+1]);
			for($i = strtotime($startDate4); $i <= strtotime($endDate4); $i = strtotime('+1 day', $i))
				for($j = 0; $j <count($days); $j+=2)
					if (date('l', $i) == $days[$j]) 
						$quarter4[] = array(date('Y-m-d', $i), $days[$j+1]);
			
			$array[] = array($subject_id => array('quarter1'=>$quarter1, 'quarter2'=>$quarter2, 'quarter3'=>$quarter3, 'quarter4'=>$quarter4));
			
			for($j = 0; $j < count($quarter1); $j++)
				$attend[] = array($subject_id.'/'.$quarter1[$j][0].'/'.$quarter1[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
			for($j = 0; $j < count($quarter2); $j++)
				$attend[] = array($subject_id.'/'.$quarter2[$j][0].'/'.$quarter2[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
			for($j = 0; $j < count($quarter3); $j++)
				$attend[] = array($subject_id.'/'.$quarter3[$j][0].'/'.$quarter3[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
			for($j = 0; $j < count($quarter4); $j++)
				$attend[] = array($subject_id.'/'.$quarter4[$j][0].'/'.$quarter4[$j][1] => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
		
		
		}	
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
}
