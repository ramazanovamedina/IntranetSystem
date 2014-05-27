<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Mymarks extends Controller_Template{

	public $template = 'templateview';
	public function action_marks()
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
		$content = View::factory('mymarks')
						->bind('subjects', $subjects)
						->bind('array', $array)
						->bind('marks', $marks)
						->bind('overall_marks', $overall_marks)
						->bind('attend', $attend)
						->bind('q', $q);
		
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
		
		$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
		$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
		$class = $class_numb.$class_let;
		$subjects_id = ORM::factory('schedule')->getSubjectsByClass($class);
		$subjects = array();
		foreach($subjects_id as $subject)
			$subjects[] = ORM::factory('subject')->getSubjectNameById($subject);
		
		$array = array();
		$marks = array();
		$overall_marks = array();
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
					$marks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$subject_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
				for($j = 0; $j < count($quarter2); $j++)
					$marks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$subject_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
				for($j = 0; $j < count($quarter3); $j++)
					$marks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$subject_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
				for($j = 0; $j < count($quarter4); $j++)
					$marks[] = array($quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$subject_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
				$overall_marks[] = array('quarter1/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter1', date('Y-m-d', strtotime($endDate1))));
				$overall_marks[] = array('quarter2/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter2', date('Y-m-d', strtotime($endDate2))));
				$overall_marks[] = array('quarter3/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter3', date('Y-m-d', strtotime($endDate3))));
				$overall_marks[] = array('quarter4/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter4', date('Y-m-d', strtotime($endDate4))));
				$overall_marks[] = array('exam/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'exam', date('Y-m-d', strtotime($endDate4))));
				$overall_marks[] = array('overall/'.$subject_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'overall', date('Y-m-d', strtotime($endDate4))));
			}
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
}
