<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Filljurnal extends Controller_Template{

	public $template = 'templateview';
	public function action_fill_jurnal()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin')){
			$admin = "";
			$header = View::factory('/admin/adminheader');
		}
		else if($auth->logged_in('or')){
			$or = "";
			$header = View::factory('/or/orheader');
		}
	
		else if($auth->logged_in('teacher')){
			$teacher = "";
			$header = View::factory('/teacher/teacherheader')
							->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director')){
			$director = "";
			$header = View::factory('/director/directorheader');
		}
		if(isset($admin)||isset($or)||isset($director))
		{
			$test = View::factory('jurnalheader2')
					->bind('classes', $classes);
			$cl = new Classes();
			$classes = $cl->getAll();
			
		}
		else if(isset($teacher))
		{
			$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$test = View::factory('jurnalheader')
					->bind('subjects', $subjects);
			$subjects = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);
			
		}
		$content = "";
	
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
	public function action_rdrct_view()
	{
		$this->auto_render = FALSE;
		$class = Arr::get($_POST, 'cl', '');
		$subject = Arr::get($_POST, 'subject', '');
		$link = "/filljurnal/view?class=".$class."&subject=".$subject;
		echo $link;
	}
	public function action_view()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin')){
			$admin = "";
			$header = View::factory('/admin/adminheader');
		}
		else if($auth->logged_in('or')){
			$or = "";
			$header = View::factory('/or/orheader');
		}
	
		else if($auth->logged_in('teacher')){
			$teacher = "";
			$header = View::factory('/teacher/teacherheader')
							->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director')){
			$director = "";
			$header = View::factory('/director/directorheader');
		}
		
		$test = View::factory('jurnalheader2')
					->bind('classes', $classes);
		$cl = new Classes();
		$classes = $cl->getAll();
	
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
		//$cur_date = strtotime(date('Y-m-d'));
		$cur_date = strtotime('2013-12-05');
		
		if(!(strtotime($startDate1) <= $cur_date && $cur_date <= strtotime($endDate1)))
			$q1 = "true";
		if (!(strtotime($startDate2) <= $cur_date && $cur_date <= strtotime($endDate2)))
			$q2 = "true";
		if (!(strtotime($startDate3) <= $cur_date && $cur_date <= strtotime($endDate3)))
			$q3 = "true";
		if (!(strtotime($startDate4) <= $cur_date && $cur_date <= strtotime($endDate4)))
			$q4 = "true";
		
		$content = View::factory('jurnal2')
			->bind('subject', $subject_id)
			->bind('class', $class)
			->bind('subject_name', $subject_name)
			->bind('teacher_name', $teacher_name)
			->bind('students', $students)
			->bind('quarter1', $quarter1)
			->bind('quarter2', $quarter2)
			->bind('quarter3', $quarter3)
			->bind('quarter4', $quarter4)
			->bind('marks', $marks)
			->bind('overall_marks', $overall_marks)
			->bind('attend', $attend);		
		
		$class = $_GET['class'];
		$subject_name = $_GET['subject'];
		$subject_id = ORM::factory('subject')->getSubjectIdByName($subject_name);
		
		$teacher_id = ORM::factory('schedule')->getTeacherByClassAndSubject($class, $subject_id);
		$teacher_name = ORM::factory('us')->getFullNameById($teacher_id);
	
		$c = new Classes();
		$class_numb = $c->getClassNumber($class);
		$class_let = $c->getClassLetter($class);
		$students_id = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
		$students = array();
		foreach($students_id as $student)
		{
			$rrr = ORM::factory('us')->getFullNameById($student);	
			$students[] = $rrr;
		}
		sort($students);
		
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
		
		$marks = array();
		$overall_marks = array();
		$attend = array();
		for($i = 0; $i < count($students); $i++)
		{
			$student_id = ORM::factory('us')->getUserIdByFullName($students[$i]);	
			for($j = 0; $j < count($quarter1); $j++)
			{
				$marks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
				$attend[] = array('att/'.$quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
			}
			for($j = 0; $j < count($quarter2); $j++)
			{
				$marks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
				$attend[] = array('att/'.$quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
			}
			for($j = 0; $j < count($quarter3); $j++)
			{
				$marks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
				$attend[] = array('att/'.$quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
			}
			for($j = 0; $j < count($quarter4); $j++)
			{	
				$marks[] = array($quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
				$attend[] = array('att/'.$quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
			}
			$overall_marks[] = array('quarter1/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter1', date('Y-m-d', strtotime($endDate1))));
			$overall_marks[] = array('quarter2/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter2', date('Y-m-d', strtotime($endDate2))));
			$overall_marks[] = array('quarter3/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter3', date('Y-m-d', strtotime($endDate3))));
			$overall_marks[] = array('quarter4/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter4', date('Y-m-d', strtotime($endDate4))));
			$overall_marks[] = array('exam/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'exam', date('Y-m-d', strtotime($endDate4))));
			$overall_marks[] = array('overall/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'overall', date('Y-m-d', strtotime($endDate4))));
		}
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
		
	}
	public function action_rdrct_fill()
	{
		$this->auto_render = FALSE;
		$class = Arr::get($_POST, 'cl', '');
		$subject = Arr::get($_POST, 'subject', '');
		$link = "/filljurnal/fill?class=".$class."&subject=".$subject;
		echo $link;
	}
	public function action_fill()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin')){
			$admin = "";
			$header = View::factory('/admin/adminheader');
		}
		else if($auth->logged_in('or')){
			$or = "";
			$header = View::factory('/or/orheader');
		}
		
		else if($auth->logged_in('teacher')){
			$teacher = "";
			$header = View::factory('/teacher/teacherheader')
							->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		
		$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$test = View::factory('jurnalheader')
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
		//$cur_date = strtotime(date('Y-m-d'));
		$cur_date = strtotime('2013-12-05');
		
		if(!(strtotime($startDate1) <= $cur_date && $cur_date <= strtotime($endDate1)))
			$q1 = "true";
		if (!(strtotime($startDate2) <= $cur_date && $cur_date <= strtotime($endDate2)))
			$q2 = "true";
		if (!(strtotime($startDate3) <= $cur_date && $cur_date <= strtotime($endDate3)))
			$q3 = "true";
		if (!(strtotime($startDate4) <= $cur_date && $cur_date <= strtotime($endDate4)))
			$q4 = "true";
			
		$content = View::factory('jurnal')
			->bind('subject', $subject_id)
			->bind('class', $class)
			->bind('subject_name', $subject_name)
			->bind('students', $students)
			->bind('quarter1', $quarter1)
			->bind('quarter2', $quarter2)
			->bind('quarter3', $quarter3)
			->bind('quarter4', $quarter4)
			->bind('marks', $marks)
			->bind('overall_marks', $overall_marks)
			->bind('attend', $attend)
			->bind('q1', $q1)
			->bind('q2', $q2)
			->bind('q3', $q3)
			->bind('q4', $q4);
		
		$class = $_GET['class'];
		$subject_name = $_GET['subject'];
		$subject_id = ORM::factory('subject')->getSubjectIdByName($subject_name);
		$c = new Classes();
		$class_numb = $c->getClassNumber($class);
		$class_let = $c->getClassLetter($class);
		$students_id = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
		$students = array();
		foreach($students_id as $student)
		{
			$rrr = ORM::factory('us')->getFullNameById($student);	
			$students[] = $rrr;
		}
		sort($students);
		
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
		
		$marks = array();
		$overall_marks = array();
		$attend = array();
		for($i = 0; $i < count($students); $i++)
		{
			$student_id = ORM::factory('us')->getUserIdByFullName($students[$i]);	
			for($j = 0; $j < count($quarter1); $j++)
			{
				$marks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
				$attend[] = array('att/'.$quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]));
			}
			for($j = 0; $j < count($quarter2); $j++)
			{
				$marks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
				$attend[] = array('att/'.$quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]));
			}
			for($j = 0; $j < count($quarter3); $j++)
			{
				$marks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
				$attend[] = array('att/'.$quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]));
			}
			for($j = 0; $j < count($quarter4); $j++)
			{	
				$marks[] = array($quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => ORM::factory('mark')->getMarks($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
				$attend[] = array('att/'.$quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => ORM::factory('attendance')->getAttend($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]));
			}
			$overall_marks[] = array('quarter1/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter1', date('Y-m-d', strtotime($endDate1))));
			$overall_marks[] = array('quarter2/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter2', date('Y-m-d', strtotime($endDate2))));
			$overall_marks[] = array('quarter3/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter3', date('Y-m-d', strtotime($endDate3))));
			$overall_marks[] = array('quarter4/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'quarter4', date('Y-m-d', strtotime($endDate4))));
			$overall_marks[] = array('exam/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'exam', date('Y-m-d', strtotime($endDate4))));
			$overall_marks[] = array('overall/'.$student_id => ORM::factory('overallMark')->getMarks($student_id, $subject_id, 'overall', date('Y-m-d', strtotime($endDate4))));
		}
	
	
		if(isset($_POST['btn']))
		{		
		
			$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$test = View::factory('jurnalheader')
					->bind('subjects', $subjects);
			$subjects = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);
			$content = View::factory('jurnal')
						->bind('subject', $subject_id)
						->bind('class', $class)
						->bind('subject_name', $subject_name)
						->bind('students', $students)
						->bind('quarter1', $quarter1)
						->bind('quarter2', $quarter2)
						->bind('quarter3', $quarter3)
						->bind('quarter4', $quarter4)
						->bind('marks', $marks)
						->bind('overall_marks', $overall_marks)
						->bind('attend', $attend)
						->bind('q1', $q1)
						->bind('q2', $q2)
						->bind('q3', $q3)
						->bind('q4', $q4)
						->bind('ok', $ok);

			$subject_id = Arr::get($_POST, 'secret', '');
			$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
			$class = Arr::get($_POST, 'secret2', '');
			$c = new Classes();
			$class_numb = $c->getClassNumber($class);
			$class_let = $c->getClassLetter($class);
			$students_id = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
			$students = array();
			foreach($students_id as $student)
			{
				$rrr = ORM::factory('us')->getFullNameById($student);	
				$students[] = $rrr;
			}
			sort($students);
			
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
			
			$marks = array();
			$overall_marks = array();
			$attend = array();
			for($i = 0; $i < count($students); $i++)
			{
				$student_id = ORM::factory('us')->getUserIdByFullName($students[$i]);
				for($j = 0; $j < count($quarter1); $j++)
				{
					$mark = Arr::get($_POST, $quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id, '');
					$att = Arr::get($_POST, 'att/'.$quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id, '');
					$marks[] = array($quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => $mark);
					$attend[] = array('att/'.$quarter1[$j][0].'/'.$quarter1[$j][1].'/'.$student_id => $att);
					if($mark!="")
						if(!isset($q1))
							ORM::factory('mark')->create_record($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1], $mark);
					if($mark == "")
						if(!isset($q1))
							ORM::factory('mark')->delete_record($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]);
					if($att!="")
						if(!isset($q1))
							ORM::factory('attendance')->create_record($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1], $att);
					if($att == "")
						if(!isset($q1))
							ORM::factory('attendance')->delete_record($student_id, $subject_id, $quarter1[$j][0], $quarter1[$j][1]);
				}
				for($j = 0; $j < count($quarter2); $j++)
				{
					$mark = Arr::get($_POST, $quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id, '');
					$att = Arr::get($_POST, 'att/'.$quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id, '');
					$marks[] = array($quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => $mark);	
					$attend[] = array('att/'.$quarter2[$j][0].'/'.$quarter2[$j][1].'/'.$student_id => $att);
					if($mark!="")
						if(!isset($q2))
							ORM::factory('mark')->create_record($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1], $mark);
					if($mark == "")
						if(!isset($q2))
							ORM::factory('mark')->delete_record($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]);		
					if($att!="")
						if(!isset($q2))
							ORM::factory('attendance')->create_record($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1], $att);
					if($att == "")
						if(!isset($q2))
							ORM::factory('attendance')->delete_record($student_id, $subject_id, $quarter2[$j][0], $quarter2[$j][1]);
				}
				for($j = 0; $j < count($quarter3); $j++)
				{
					$mark = Arr::get($_POST, $quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id, '');
					$att = Arr::get($_POST, 'att/'.$quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id, '');
					$marks[] = array($quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => $mark);	
					$attend[] = array('att/'.$quarter3[$j][0].'/'.$quarter3[$j][1].'/'.$student_id => $att);
					if($mark!="")
						if(!isset($q3))
							ORM::factory('mark')->create_record($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1], $mark);
					if($mark == "")
						if(!isset($q3))
							ORM::factory('mark')->delete_record($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]);
					if($att!="")
						if(!isset($q3))
							ORM::factory('attendance')->create_record($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1], $att);
					if($att == "")
						if(!isset($q3))
							ORM::factory('attendance')->delete_record($student_id, $subject_id, $quarter3[$j][0], $quarter3[$j][1]);
				}
				for($j = 0; $j < count($quarter4); $j++)
				{
					$mark = Arr::get($_POST, $quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id, '');
					$att = Arr::get($_POST, 'att/'.$quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id, '');
					$marks[] = array($quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => $mark);	
					$attend[] = array('att/'.$quarter4[$j][0].'/'.$quarter4[$j][1].'/'.$student_id => $att);
					if($mark!="")
						if(!isset($q4))
							ORM::factory('mark')->create_record($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1], $mark);
					if($mark == "")
						if(!isset($q4))
							ORM::factory('mark')->delete_record($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]);
					if($att!="")
						if(!isset($q4))
							ORM::factory('attendance')->create_record($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1], $att);
					if($att == "")
						if(!isset($q4))
							ORM::factory('attendance')->delete_record($student_id, $subject_id, $quarter4[$j][0], $quarter4[$j][1]);
				}
				$overall_mark1 = Arr::get($_POST, 'quarter1/'.$student_id, '');
				$overall_marks[] = array("quarter1/".$student_id => $overall_mark1);
				if($overall_mark1!="")
					if(!isset($q1))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'quarter1', date('Y-m-d', strtotime($endDate1)), $overall_mark1);
				if($overall_mark1 == "")
					if(!isset($q1))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, date('Y-m-d', strtotime($endDate1)), 'quarter1');
				$overall_mark2 = Arr::get($_POST, 'quarter2/'.$student_id, '');
				$overall_marks[] = array("quarter2/".$student_id => $overall_mark2);
				if($overall_mark2!="")
					if(!isset($q2))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'quarter2', date('Y-m-d', strtotime($endDate2)), $overall_mark2);
				if($overall_mark2 == "")
					if(!isset($q2))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, date('Y-m-d', strtotime($endDate2)), 'quarter2');
				$overall_mark3 = Arr::get($_POST, 'quarter3/'.$student_id, '');
				$overall_marks[] = array("quarter3/".$student_id => $overall_mark3);
				if($overall_mark3!="")
					if(!isset($q3))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'quarter3', date('Y-m-d', strtotime($endDate3)), $overall_mark3);
				if($overall_mark3 == "")
					if(!isset($q3))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, date('Y-m-d', strtotime($endDate3)), 'quarter3');
				$overall_mark4 = Arr::get($_POST, 'quarter4/'.$student_id, '');
				$overall_marks[] = array("quarter4/".$student_id => $overall_mark4);
				if($overall_mark4!="")
					if(!isset($q4))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'quarter4', date('Y-m-d', strtotime($endDate4)), $overall_mark4);
				if($overall_mark4 == "")
					if(!isset($q4))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, date('Y-m-d', strtotime($endDate4)), 'quarter4');
				$overall_mark5 = Arr::get($_POST, 'exam/'.$student_id, '');
				$overall_marks[] = array("exam/".$student_id => $overall_mark5);
				if($overall_mark5!="")
					if(!isset($q4))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'exam', date('Y-m-d', strtotime($endDate4)), $overall_mark5);
				if($overall_mark5 == "")
					if(!isset($q4))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, 'exam', date('Y-m-d', strtotime($endDate4)) );
				$overall_mark6 = Arr::get($_POST, 'overall/'.$student_id, '');
				$overall_marks[] = array("overall/".$student_id => $overall_mark6);
				if($overall_mark6!="")
					if(!isset($q4))
						ORM::factory('overallMark')->create_record($student_id, $subject_id, 'overall', date('Y-m-d', strtotime($endDate4)), $overall_mark6);
				if($overall_mark6 == "")
					if(!isset($q4))
						ORM::factory('overallMark')->delete_record($student_id, $subject_id, date('Y-m-d', strtotime($endDate4)), 'overall');
			
			}
			$ok = "";
			
		}
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
}
