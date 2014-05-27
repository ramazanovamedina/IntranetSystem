<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Dnevnik extends Controller_Template{

	public $template = 'templateview';
	public function action_dnevnik()
	{
		$auth = Auth::instance();
		if($auth->logged_in('student'))
		{
			$header = View::factory('/student/studentheader')
						->bind('user_id', $student_id);
			$student_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
							->bind('student_id', $student_id);
			$parent_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($parent_id);
		}
		$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
		$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
		$class = $class_numb.$class_let;
		$test = View::factory('dnevnikheader')
					->bind('week_days', $week_days);
		$content = View::factory('dnevnik')
					->bind('student_id', $student_id)
					->bind('week_days', $week_days)
					->bind('week_array', $week_array)
					->bind('days', $days);
		
		$week_days = $this->action_calc(time());	
		$week_array = array();
		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
		for($i = 0; $i < count($days); $i++)
			for($j = 1; $j <= 7; $j++)
			{	
				$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($days[$i], $j, $class);
				$week_array[$i][$j][0] = $subject_id;
				$week_array[$i][$j][1] = ORM::factory('homework')->getHomework($subject_id, $class, date('Y-m-d', strtotime($week_days[$i+1])), $j);
				$week_array[$i][$j][2] = ORM::factory('mark')->getMarks($student_id, $subject_id, date('Y-m-d', strtotime($week_days[$i+1])), $j);
			}
		
		
		if(isset($_POST['prev']))
		{
			$a = strtotime(Arr::get($_POST, 'mon', ''));
			$week_days = $this->action_calc(strtotime('-7 day', $a));
			for($i = 0; $i < count($days); $i++)
				for($j = 1; $j <= 7; $j++)
				{	
					$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($days[$i], $j, $class);
					$week_array[$i][$j][1] = ORM::factory('homework')->getHomework($subject_id, $class, date('Y-m-d', strtotime($week_days[$i+1])), $j);
					$week_array[$i][$j][2] = ORM::factory('mark')->getMarks($student_id, $subject_id, date('Y-m-d', strtotime($week_days[$i+1])), $j);
				}
			
		}
		if(isset($_POST['next']))
		{
			$a = strtotime(Arr::get($_POST, 'mon', ''));
			$week_days = $this->action_calc(strtotime('+7 day', $a));
			for($i = 0; $i < count($days); $i++)
				for($j = 1; $j <= 7; $j++)
				{	
					$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($days[$i], $j, $class);
					$week_array[$i][$j][1] = ORM::factory('homework')->getHomework($subject_id, $class, date('Y-m-d', strtotime($week_days[$i+1])), $j);
					$week_array[$i][$j][2] = ORM::factory('mark')->getMarks($student_id, $subject_id, date('Y-m-d', strtotime($week_days[$i+1])), $j);
				}
		}
		if(isset($_POST['btn']))
		{
			$a = Arr::get($_POST, 'cal', '');
			if($a == "")
				$a = date('d.m.Y');
			$week_days = $this->action_calc(strtotime($a));
			for($i = 0; $i < count($days); $i++)
				for($j = 1; $j <= 7; $j++)
				{	
					$subject_id = ORM::factory('schedule')->getSubjectByDayAndOrder($days[$i], $j, $class);
					$week_array[$i][$j][1] = ORM::factory('homework')->getHomework($subject_id, $class, date('Y-m-d', strtotime($week_days[$i+1])), $j);
					$week_array[$i][$j][2] = ORM::factory('mark')->getMarks($student_id, $subject_id, date('Y-m-d', strtotime($week_days[$i+1])), $j);
				}
		}
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	public function action_calc($date)
	{
		$array = array();
		$dow = date('w', $date);
		$offset = $dow - 1;
		if ($offset < 0) 
			$offset = 6;
		$mon = $date - ($offset * 86400);
		$array[1] = date("d.m.Y", $mon);
		for($i = 2; $i <= 6; $i++)
			$array[$i] = date("d.m.Y", $mon + (($i-1) * 86400));
		return $array;
		
	}
	
}
