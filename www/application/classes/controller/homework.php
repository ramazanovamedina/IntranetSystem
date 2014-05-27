<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Homework extends Controller_Template{
	public $template = 'templateview';
	
	public function action_homework()
	{
		$auth = Auth::instance();
		if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$test = View::factory('homeworkheader')
					->bind('subjects', $subjects);
		$subjects = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);	
	
		$content = "";

		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;	
	}
	public function action_rdrct_hw()
	{
		$this->auto_render = FALSE;
		$class = Arr::get($_POST, 'cl', '');
		$subject = Arr::get($_POST, 'subject', '');
		$link = "/homework/fill?class=".$class."&subject=".$subject;
		echo $link;
	}
	public function action_fill()
	{
		$auth = Auth::instance();
		if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$test = View::factory('homeworkheader')
					->bind('subjects', $subjects);
		$subjects = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);	
	
		$quarter1 = array();
		$quarter2 = array();
		$quarter3 = array();
		$quarter4 = array();
		$startDate1 = '01 September 2013';
		$endDate1 = '25 October 2013';
		$startDate2 = '02 November 2013';
		$endDate2 = '27 December 2013';
		$startDate3 = '10 January 2014';
		$endDate3 = '25 March 2014';
		$startDate4 = '02 April 2014';
		$endDate4 = '25 May 2014';
	//	$cur_date = date('Y-m-d');	
		$cur_date = strtotime('2013-12-05');
		
		if(strtotime($startDate1) <= $cur_date && $cur_date <= strtotime($endDate1))
			$q = 1;
		if (strtotime($startDate2) <= $cur_date && $cur_date <= strtotime($endDate2))
			$q = 2;
		if (strtotime($startDate3) <= $cur_date && $cur_date <= strtotime($endDate3))
			$q = 3;
		if (strtotime($startDate4) <= $cur_date && $cur_date <= strtotime($endDate4))
			$q = 4;
			
		$content = View::factory('homework')
						->bind('quarter1', $quarter1)
						->bind('quarter2', $quarter2)
						->bind('quarter3', $quarter3)
						->bind('quarter4', $quarter4)
						->bind('homeworks', $homeworks)
						->bind('subject', $subject_id)
						->bind('subject_name', $subject_name)
						->bind('class', $class)
						->bind('cur_date', $cur_date)
						->bind('q', $q);
		
		
		$class = $_GET['class'];
		$subject_name = $_GET['subject'];
		$subject_id = ORM::factory('subject')->getSubjectIdByName($subject_name);
	
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
		
		$homeworks = array();
		
		for($j = 0; $j < count($quarter1); $j++)
			$homeworks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1] => ORM::factory('homework')->getData($subject_id, $teacher_id, $class, $quarter1[$j][0], $quarter1[$j][1]));
		for($j = 0; $j < count($quarter2); $j++)
			$homeworks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1] => ORM::factory('homework')->getData($subject_id, $teacher_id, $class, $quarter2[$j][0], $quarter2[$j][1]));
		for($j = 0; $j < count($quarter3); $j++)
			$homeworks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1] => ORM::factory('homework')->getData($subject_id, $teacher_id, $class, $quarter3[$j][0], $quarter3[$j][1]));
		for($j = 0; $j < count($quarter4); $j++)
			$homeworks[] = array($quarter4[$j][0].'/'.$quarter4[$j][1] => ORM::factory('homework')->getData($subject_id, $teacher_id, $class, $quarter4[$j][0], $quarter4[$j][1]));	
		
		if(isset($_POST['btn']))
		{	
			$content = View::factory('homework')
						->bind('quarter1', $quarter1)
						->bind('quarter2', $quarter2)
						->bind('quarter3', $quarter3)
						->bind('quarter4', $quarter4)
						->bind('homeworks', $homeworks)
						->bind('subject', $subject_id)
						->bind('subject_name', $subject_name)
						->bind('class', $class)
						->bind('cur_date', $cur_date)
						->bind('ok', $ok)
						->bind('q', $q);
		
		
			$subject_id = Arr::get($_POST, 'secret', '');
			$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
			$class = Arr::get($_POST, 'secret2', '');
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
			
			
			$homeworks = array();
			
			for($j = 0; $j < count($quarter1); $j++)
			{
				$homework = Arr::get($_POST, $quarter1[$j][0].'/'.$quarter1[$j][1], '');
				$homeworks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1] => $homework);
				if($homework!="")
						ORM::factory('homework')->create_record($subject_id, $teacher_id, $class, $quarter1[$j][0], $quarter1[$j][1], $homework);
				if($homework == "")
						ORM::factory('homework')->delete_record($subject_id, $teacher_id, $class, $quarter1[$j][0], $quarter1[$j][1]);
			}
			for($j = 0; $j < count($quarter2); $j++)
			{
				$homework = Arr::get($_POST, $quarter2[$j][0].'/'.$quarter2[$j][1], '');
				$homeworks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1] => $homework);
				if($homework!="")
						ORM::factory('homework')->create_record($subject_id, $teacher_id, $class, $quarter2[$j][0], $quarter2[$j][1], $homework);
				if($homework == "")
						ORM::factory('homework')->delete_record($subject_id, $teacher_id, $class, $quarter2[$j][0], $quarter2[$j][1]);		
				
			}
			for($j = 0; $j < count($quarter3); $j++)
			{
				$homework = Arr::get($_POST, $quarter3[$j][0].'/'.$quarter3[$j][1], '');
				$homeworks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1] => $homework);
				if($homework!="")
						ORM::factory('homework')->create_record($subject_id, $teacher_id, $class, $quarter3[$j][0], $quarter3[$j][1], $homework);
				if($homework == "")
						ORM::factory('homework')->delete_record($subject_id, $teacher_id, $class, $quarter3[$j][0], $quarter3[$j][1]);
			}
			for($j = 0; $j < count($quarter4); $j++)
			{
				$homework = Arr::get($_POST, $quarter3[$j][0].'/'.$quarter3[$j][1], '');
				$homeworks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1] => $homework);
				if($homework!="")
						ORM::factory('homework')->create_record($subject_id, $teacher_id, $class, $quarter4[$j][0], $quarter4[$j][1], $homework);
				if($homework == "")
						ORM::factory('homework')->delete_record($subject_id, $teacher_id, $class, $quarter4[$j][0], $quarter4[$j][1]);
			
			}
			$ok = "";
				
		}
		
		$this->template->header = $header;
		$this->template->roles= "";
		$this->template->test = $test;
		$this->template->content = $content;	
	}
		
		
	
}
