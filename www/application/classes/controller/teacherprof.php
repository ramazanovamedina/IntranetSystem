<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Teacherprof extends Controller_User implements Userinterface{
		
	public function action_create_user()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$content = View::factory('createteacher')
						->bind('subjects', $subjects)
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_gender', $empty_gender)
						->bind('username', $username)
						->bind('name', $name)
						->bind('address', $address)
						->bind('documents', $documents)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('year', $year)
						->bind('month', $month)
						->bind('day', $day)
						->bind('gender', $gender)
						->bind('ok', $ok);
		
	
		$bdate = new Birthdate();
		$years = $bdate->getYears();
		$months = $bdate->getMonths();
		$days = $bdate->getDays();

		$subjects = ORM::factory('subject')->getAll();
							
		if(isset($_POST['btnsubmit']))
		{
			$teacher = new Teacherclass();
			$username = Arr::get($_POST, 'username', '');
			$teacher->setUsername($username);
			$name = Arr::get($_POST, 'full_name', '');
			$teacher->setFullname($name);
		//	$role_name = Arr::get($_POST, 'role', '');
			$role_name = 'teacher';
			$teacher->setRolename($role_name);
			$address = Arr::get($_POST, 'address', '');
			$teacher->setAddress($address);
			$documents = Arr::get($_POST, 'docs', '');
			$teacher->setDocuments($documents);
			$year = Arr::get($_POST, 'year', '');
			$month = Arr::get($_POST, 'month', '');
			$day = Arr::get($_POST, 'day', '');
			$data = Arr::get($_POST, 's', '');
			$gender = Arr::get($_POST, 'gender', '');
			$teacher->setGender($gender);
			if(!empty($year)&!empty($month)&!empty($day))
			{
				$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
				$teacher->setDateOfBirth($date_of_birth);
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
			if(empty($gender))
				$empty_gender = "";
			if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($data)&!empty($gender))
			{
				$create_user = ORM::factory('us')->create_user($teacher);
				$create_user_role = ORM::factory('roleuser')->create_user_role($username, $role_name);
				foreach($data as $d)
				{
					$subject_id = ORM::factory('subject')->getSubjectIdByName($d);
					$result = ORM::factory('userinfo')->create_teacher_info($teacher, $subject_id);
				}
				$user_id = ORM::factory('us')->getUserId($username);
				$upload_dir = "C:/xampp/htdocs/intranet/www/public/uploads/";
				$dir = $upload_dir.'/'.$user_id;
				if(is_dir($dir)==false)
					mkdir("$dir", 0700);
				$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $year = ""; $month = ""; $day = ""; $gender = "";
			
			
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
			$test = View::factory('update_teacher')
						->bind('subjects', $subjects);
			$subjects = ORM::factory('subject')->getAll();
			
			$content = "";
			
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
			
		}
		public function action_rdrct_teach_up()
		{
			$this->auto_render = FALSE;
			$username = Arr::get($_POST, 'name');
			$user_id = ORM::factory('us')->getUserIdByFullName($username);
			$link = "/teacherprof/update_teacher/".$user_id;
			echo $link;
		}
		public function action_update_teacher()
		{
			$auth = Auth::instance();
				if($auth->logged_in('admin'))	
					$header = View::factory('/admin/adminheader');
			$test = View::factory('update_teacher')
						->bind('subjects', $subjects);
			$subjects = ORM::factory('subject')->getAll();
			
			$content = View::factory('updateteacher')
					->bind('qid', $teacher_id)
					->bind('subjects', $subjects)
					->bind('empty_login', $empty_login)
					->bind('empty_full_name', $empty_full_name)
					->bind('empty_address', $empty_address)
					->bind('empty_docs', $empty_docs)
					->bind('empty_date_of_birth', $empty_date_of_birth)
					->bind('empty_gender', $empty_gender)
					->bind('username', $username)
					->bind('name', $name)
					->bind('address', $address)
					->bind('documents', $documents)
					->bind('years', $years)
					->bind('months', $months)
					->bind('days', $days)
					->bind('year', $year)
					->bind('month', $month)
					->bind('day', $day)
					->bind('subs', $subs)
					->bind('gender', $gender);
	

			$bdate = new Birthdate();
			$years = $bdate->getYears();
			$months = $bdate->getMonths();
			$days = $bdate->getDays();
			
			
			$teacher_id = $this->request->param('id');
			$name = ORM::factory('us')->getFullNameById($teacher_id);
			$username = ORM::factory('us')->getUsernameById($teacher_id);
			$address = ORM::factory('us')->getUserAddressById($teacher_id);
			$documents = ORM::factory('us')->getUserDocsById($teacher_id);	
			$date_of_birth = ORM::factory('us')->getDateOfBirthById($teacher_id);
			$gender = ORM::factory('us')->getGenderById($teacher_id);	
			$year = intval(substr($date_of_birth, 0, 4));
			$month = intval(substr($date_of_birth, 5, 2));
			$day = intval(substr($date_of_birth, 8, 2));
			$subs = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);	
			
			if(isset($_POST['btnupdate']))
			{
			
				$content = View::factory('updateteacher')
						->bind('qid', $teacher_id)
						->bind('subjects', $subjects)
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_gender', $empty_gender)
						->bind('username', $username)
						->bind('name', $name)
						->bind('address', $address)
						->bind('documents', $documents)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('year', $year)
						->bind('month', $month)
						->bind('day', $day)
						->bind('subs', $subs)
						->bind('gender', $gender)
						->bind('ok', $ok);
		
	
				$bdate = new Birthdate();
				$years = $bdate->getYears();
				$months = $bdate->getMonths();
				$days = $bdate->getDays();
				
				$teacher_id = Arr::get($_POST, 'secret', '');
				$teacher = new Teacherclass();
				$username = Arr::get($_POST, 'username', '');
				$teacher->setUsername($username);
				$name = Arr::get($_POST, 'full_name', '');
				$teacher->setFullname($name);
				$role_name = 'teacher';
				$teacher->setRolename($role_name);
				$address = Arr::get($_POST, 'address', '');
				$teacher->setAddress($address);
				$documents = Arr::get($_POST, 'docs', '');
				$teacher->setDocuments($documents);
				$gender = Arr::get($_POST, 'gender', '');
				$teacher->setGender($gender);
				
				$year = Arr::get($_POST, 'year', '');
				$month = Arr::get($_POST, 'month', '');
				$day = Arr::get($_POST, 'day', '');
				$data = Arr::get($_POST, 's', '');
				if(!empty($year)&!empty($month)&!empty($day))
				{
					$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
					$teacher->setDateOfBirth($date_of_birth);
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
				if(empty($data))
					$empty_data="";
				if(empty($gender))
					$empty_gender="";
			
				if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($data)&!empty($gender))	
				{
					$update_user = ORM::factory('us')->update_user($teacher, $teacher_id);
					$update_user2 = ORM::factory('userinfo')->update_teacher($teacher_id);
					foreach($data as $d)
					{
						$subject_id = ORM::factory('subject')->getSubjectIdByName($d);
						$result = ORM::factory('userinfo')->create_teacher_info($teacher, $subject_id);
					}
					$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $day = ""; $month = ""; $year = ""; $subs = ""; $gender = "";
				
				}	
				
			}
			
			
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
			
		}
	
		
}	