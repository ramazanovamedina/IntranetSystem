<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Studentprof extends Controller_User implements Userinterface{

	public function action_create_user()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$content = View::factory('createstudent')
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_class', $empty_class)
						->bind('empty_gender', $empty_gender)
						->bind('username', $username)
						->bind('name', $name)
				//		->bind('role_name', $role_name)
						->bind('address', $address)
						->bind('documents', $documents)
						->bind('classes', $classes)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('year', $year)
						->bind('month', $month)
						->bind('day', $day)
						->bind('cl', $cl)
						->bind('gender', $gender)
						->bind('ok', $ok);
						
		$bdate = new Birthdate();
		$years = $bdate->getYears();
		$months = $bdate->getMonths();
		$days = $bdate->getDays();
		
		
		$class = new Classes();
		$classes = $class->getAll();
		
		if(isset($_POST['btnsubmit']))
		{
			$student = new Studentclass();
			$username = Arr::get($_POST, 'username', '');
			$student->setUsername($username);
			$name = Arr::get($_POST, 'full_name', '');
			$student->setFullname($name);
			$role_name = 'student';
			$student->setRolename($role_name);
			$address = Arr::get($_POST, 'address', '');
			$student->setAddress($address);
			$documents = Arr::get($_POST, 'docs', '');
			$student->setDocuments($documents);
			$gender = Arr::get($_POST, 'gender', '');
			$student->setGender($gender);
			$year = Arr::get($_POST, 'year', '');
			$month = Arr::get($_POST, 'month', '');
			$day = Arr::get($_POST, 'day', '');
			if(!empty($year)&!empty($month)&!empty($day))
			{
				$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
				$student->setDateOfBirth($date_of_birth);
			}
			
			$cl = Arr::get($_POST, 'class', '');
			if(!empty($cl))
			{
				$student->setClassNumber($class->getClassNumber($cl));
				$student->setClassLetter($class->getClassLetter($cl));
			}

			if(empty($username))
				$empty_login="";
			if(empty($name))
				$empty_full_name="";
	//		if(empty($role_name))
	//			$empty_role="";
			if(empty($address))
				$empty_address="";
			if(empty($documents))
				$empty_docs="";
			if(empty($date_of_birth))
				$empty_date_of_birth="";
			if(empty($cl))
				$empty_class="";	
			if(empty($gender))
				$empty_gender = "";
			if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($role_name)&!empty($cl)&!empty($gender))		
			{
				$create_user = ORM::factory('us')->create_user($student);
				$create_user_role = ORM::factory('roleuser')->create_user_role($username, $role_name);
				$create_user_info = ORM::factory('userinfo')->create_student_info($student);
				$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $cl = ""; $year = ""; $month = ""; $day = ""; $gender = "";
			}
		}
		$this->template->header = $header;
		$this->template->roles = View::factory('creatediv');
		$this->template->test= '';
		$this->template->content = $content;
	}
		public function action_update_user()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$test = View::factory('update_student')
						->bind('classes', $classes);
						
			$class = new Classes();
			$classes = $class->getAll();
			
			$content = "";
			
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		
		}
		public function action_rdrct_stu_up()
		{
			$this->auto_render = FALSE;
			$username = Arr::get($_POST, 'name');
			$user_id = ORM::factory('us')->getUserIdByFullName($username);
			$link = "/studentprof/update_student/".$user_id;
			echo $link;
		}
		public function action_update_student()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$test = View::factory('update_student')
						->bind('classes', $classes);
			$class = new Classes();
			$classes = $class->getAll();
			
			$content = View::factory('updatestudent')
						->bind('qid', $student_id)
						->bind('name',$name)
						->bind('username',$username)
						->bind('address',$address)
						->bind('documents',$documents)
						->bind('classes', $classes)
						->bind('year', $year)
						->bind('month', $month)
						->bind('day', $day)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('gender', $gender)
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_class', $empty_class)
						->bind('empty_gender', $empty_gender)
						->bind('c', $c);	

			$bdate = new Birthdate();
			$years = $bdate->getYears();
			$months = $bdate->getMonths();
			$days = $bdate->getDays();
		
			$student_id = $this->request->param('id');
			
			$name = ORM::factory('us')->getFullNameById($student_id);
			$username = ORM::factory('us')->getUsernameById($student_id);
			$address = ORM::factory('us')->getUserAddressById($student_id);
			$documents = ORM::factory('us')->getUserDocsById($student_id);	
			$date_of_birth = ORM::factory('us')->getDateOfBirthById($student_id);
			$gender = ORM::factory('us')->getGenderById($student_id);
			$year = intval(substr($date_of_birth, 0, 4));
			$month = intval(substr($date_of_birth, 5, 2));
			$day = intval(substr($date_of_birth, 8, 2));
			$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
			$class_let = ORM::factory('userinfo')->getClassLetById($student_id);				
			$c = $class_numb.$class_let;
			
			if(isset($_POST['btnupdate']))
			{
				$content = View::factory('updatestudent')
						->bind('qid', $student_id)
						->bind('name',$name)
						->bind('username',$username)
						->bind('address',$address)
						->bind('documents',$documents)
						->bind('classes', $classes)
						->bind('year', $year)
						->bind('month', $month)
						->bind('day', $day)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('gender', $gender)
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_class', $empty_class)
						->bind('empty_gender', $empty_gender)
						->bind('c', $c)
						->bind('ok', $ok);	

				$bdate = new Birthdate();
				$years = $bdate->getYears();
				$months = $bdate->getMonths();
				$days = $bdate->getDays();
			
				$student_id = Arr::get($_POST, 'secret', '');
				$student = new Studentclass();
				$username = Arr::get($_POST, 'username', '');
				$student->setUsername($username);
				$name = Arr::get($_POST, 'full_name', '');
				$student->setFullname($name);
				$role_name = 'student';
				$student->setRolename($role_name);
				$address = Arr::get($_POST, 'address', '');
				$student->setAddress($address);
				$documents = Arr::get($_POST, 'docs', '');
				$student->setDocuments($documents);
				$gender = Arr::get($_POST, 'gender', '');
				$student->setGender($gender);
				
				$year = Arr::get($_POST, 'year', '');
				$month = Arr::get($_POST, 'month', '');
				$day = Arr::get($_POST, 'day', '');
				if(!empty($year)&!empty($month)&!empty($day))
				{
					$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
					$student->setDateOfBirth($date_of_birth);
				}
				
				$c = Arr::get($_POST, 'class', '');
				if(!empty($c))
				{
					$student->setClassNumber($class->getClassNumber($c));
					$student->setClassLetter($class->getClassLetter($c));
				}

				if(empty($username))
					$empty_login="";
				if(empty($name))
					$empty_full_name="";
				if(empty($role_name))
					$empty_role="";
				if(empty($address))
					$empty_address="";
				if(empty($documents))
					$empty_docs="";
				if(empty($date_of_birth))
					$empty_date_of_birth="";
				if(empty($c))
					$empty_class="";
				if(empty($gender))
					$empty_gender="";
					
				if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($c)&!empty($gender))	
				{
					$update_user = ORM::factory('us')->update_user($student, $student_id);
					$update_user2 = ORM::factory('userinfo')->update_student($student, $student_id);
					$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $day = ""; $month = ""; $year = ""; $c = ""; $gender = "";
				}	
				
			}
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		}
		
}	