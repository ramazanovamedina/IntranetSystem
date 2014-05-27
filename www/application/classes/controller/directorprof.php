<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Directorprof extends Controller_User implements Userinterface{
		
	public function action_create_user()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$content = View::factory('createdirector')
						->bind('empty_login', $empty_login)
						->bind('empty_full_name', $empty_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_address', $empty_address)
						->bind('empty_docs', $empty_docs)
						->bind('empty_date_of_birth', $empty_date_of_birth)
						->bind('empty_gender', $empty_gender)
						->bind('username', $username)
						->bind('name', $name)
						->bind('role_name', $role_name)
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
		
		if(isset($_POST['btnsubmit']))
		{
			$director = new Directorclass();
			$username = Arr::get($_POST, 'username', '');
			$director->setUsername($username);
			$name = Arr::get($_POST, 'full_name', '');
			$director->setFullname($name);
		//	$role_name = Arr::get($_POST, 'role', '');
			$role_name = 'director';
			$director->setRolename($role_name);
			$address = Arr::get($_POST, 'address', '');
			$director->setAddress($address);
			$documents = Arr::get($_POST, 'docs', '');
			$director->setDocuments($documents);
			$gender = Arr::get($_POST, 'gender', '');
			$director->setGender($gender);
	
			$year = Arr::get($_POST, 'year', '');
			$month = Arr::get($_POST, 'month', '');
			$day = Arr::get($_POST, 'day', '');
			if(!empty($year)&!empty($month)&!empty($day))
			{
				$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
				$director->setDateOfBirth($date_of_birth);
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
			if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($role_name)&!empty($gender))	
			{
				$create_user = ORM::factory('us')->create_user($director);
				$create_user_role = ORM::factory('roleuser')->create_user_role($username, $role_name);
				$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $year = ""; $month = ""; $day = ""; $gender = "";
	
			}
		}
		$this->template->header = $header;
		$this->template->roles = View::factory('creatediv');
		$this->template->test= '';
		$this->template->content = $content;
	}
		
		public function action_delete_user()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$content = View::factory('deletedirector')
						->bind('directors', $directors);
			
			$directors_id = ORM::factory('roleuser')->getAllUsersByRoleId(7);
			$directors = array();
			foreach($directors_id as $director_id)
				$directors[] = ORM::factory('us')->getFullNameById($director_id);
	
			$this->template->header = $header;
			$this->template->roles = View::factory('deletediv');
			$this->template->test= '';
			$this->template->content = $content;
		
		}
		public function action_update_user()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$test = View::factory('update_director')
						->bind('users', $directors);
						
			$directors_id = ORM::factory('roleuser')->getAllUsersByRoleId(7);
			$directors = array();
			foreach($directors_id as $directorid)
				$directors[] = ORM::factory('us')->getFullNameById($directorid);		
			
			$content = "";
		
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		
		}
		public function action_rdrct_director_up()
		{
			$this->auto_render = FALSE;
			$username = Arr::get($_POST, 'name');
			$user_id = ORM::factory('us')->getUserIdByFullName($username);
			$link = "/directorprof/update_director/".$user_id;
			echo $link;
		}
		public function action_update_director()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$test = View::factory('update_director')
						->bind('users', $directors);
						
			$directors_id = ORM::factory('roleuser')->getAllUsersByRoleId(7);
			$directors = array();
			foreach($directors_id as $directorid)
				$directors[] = ORM::factory('us')->getFullNameById($directorid);		
			
			
			$content = View::factory('updatedirector')
					->bind('qid', $director_id)
					->bind('name',$name)
					->bind('username',$username)
					->bind('address',$address)
					->bind('documents',$documents)
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
					->bind('empty_gender', $empty_gender);	

			$bdate = new Birthdate();
			$years = $bdate->getYears();
			$months = $bdate->getMonths();
			$days = $bdate->getDays();
			
			$director_id = $this->request->param('id');
			$name = ORM::factory('us')->getFullNameById($director_id);
			$username = ORM::factory('us')->getUsernameById($director_id);
			$address = ORM::factory('us')->getUserAddressById($director_id);
			$documents = ORM::factory('us')->getUserDocsById($director_id);	
			$date_of_birth = (ORM::factory('us')->getDateOfBirthById($director_id));
			$gender = ORM::factory('us')->getGenderById($director_id);
			$year = intval(substr($date_of_birth, 0, 4));
			$month = intval(substr($date_of_birth, 5, 2));
			$day = intval(substr($date_of_birth, 8, 2));
			
			if(isset($_POST['btnupdate']))
			{
			
				$content = View::factory('updatedirector')
						->bind('qid', $director_id)
						->bind('name',$name)
						->bind('username',$username)
						->bind('address',$address)
						->bind('documents',$documents)
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
						->bind('empty_gender', $empty_gender)
						->bind('ok', $ok);	

				$bdate = new Birthdate();
				$years = $bdate->getYears();
				$months = $bdate->getMonths();
				$days = $bdate->getDays();
			
			
				$director_id = Arr::get($_POST, 'secret', '');
				$director = new Directorclass();
				$username = Arr::get($_POST, 'username', '');
				$director->setUsername($username);
				$name = Arr::get($_POST, 'full_name', '');
				$director->setFullname($name);
				$role_name = 'or';
				$director->setRolename($role_name);
				$address = Arr::get($_POST, 'address', '');
				$director->setAddress($address);
				$documents = Arr::get($_POST, 'docs', '');
				$director->setDocuments($documents);
				$gender = Arr::get($_POST, 'gender', '');
				$director->setGender($gender);
				
				$year = Arr::get($_POST, 'year', '');
				$month = Arr::get($_POST, 'month', '');
				$day = Arr::get($_POST, 'day', '');
				if(!empty($year)&!empty($month)&!empty($day))
				{
					$date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $month, $day, $year));
					$director->setDateOfBirth($date_of_birth);
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
					$gender="";
					
				if(!empty($username)&!empty($name)&!empty($address)&!empty($documents)&!empty($date_of_birth)&!empty($gender))	
				{
					$update_user = ORM::factory('us')->update_user($director, $director_id);
					$ok = ""; $username = ""; $name = ""; $address = ""; $documents = ""; $year = ""; $month = ""; $day = ""; $gender = "";
	
				}	
				
			}
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		
		}
}	