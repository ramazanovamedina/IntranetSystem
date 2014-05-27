<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Parentprof extends Controller_User implements Userinterface{
		
	public function action_create_user()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$content = View::factory('createparent')
					//	->bind('roles', $roles)
						->bind('empty_login', $empty_login)
						->bind('empty_mot_full_name', $empty_mot_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_mot_address', $empty_mot_address)
						->bind('empty_mot_job', $empty_mot_job)
						->bind('empty_mot_date_of_birth', $empty_mot_date_of_birth)
						->bind('empty_fat_full_name', $empty_fat_full_name)
						->bind('empty_fat_address', $empty_fat_address)
						->bind('empty_fat_job', $empty_fat_job)
						->bind('empty_fat_date_of_birth', $empty_fat_date_of_birth)
						->bind('empty_child_name', $empty_child_name)
						->bind('username', $username)
						->bind('fat_full_name', $fat_full_name)
						->bind('role_name', $role_name)
						->bind('fat_address', $fat_address)
						->bind('fat_job', $fat_job)
						->bind('fat_date_of_birth', $fat_date_of_birth)
						->bind('mot_full_name', $mot_full_name)
						->bind('mot_address', $mot_address)
						->bind('mot_job', $mot_job)
						->bind('mot_date_of_birth', $mot_date_of_birth)
						->bind('classes', $classes)
						->bind('child_name', $child_name)
						->bind('child_class', $child_class)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('mot_year', $mot_year)
						->bind('mot_month', $mot_month)
						->bind('mot_day', $mot_day)
						->bind('fat_year', $fat_year)
						->bind('fat_month', $fat_month)
						->bind('fat_day', $fat_day)
						->bind('ok', $ok);
						
		$bdate = new Birthdate();
		$years = $bdate->getYears();
		$months = $bdate->getMonths();
		$days = $bdate->getDays();
		
/*		$role = new Role();
		$roles = $role->getAll();
*/
		$class = new Classes();
		$classes = $class->getAll();
			
		if(isset($_POST['btnsubmit']))
		{
			$parent = new Parentclass();
			$username = Arr::get($_POST, 'username', '');
			$parent->setUsername($username);
			$mot_full_name = Arr::get($_POST, 'mot_full_name', '');
			$parent->setMotFullname($mot_full_name);
			$fat_full_name = Arr::get($_POST, 'fat_full_name', '');
			$parent->setFatFullname($fat_full_name);
			$role_name = 'parent';
			$parent->setRolename($role_name);
			$mot_address = Arr::get($_POST, 'mot_address', '');
			$parent->setMotAddress($mot_address);
			$fat_address = Arr::get($_POST, 'fat_address', '');
			$parent->setFatAddress($fat_address);
			$mot_job = Arr::get($_POST, 'mot_job', '');
			$parent->setMotJob($mot_job);
			$fat_job = Arr::get($_POST, 'fat_job', '');
			$parent->setFatJob($fat_job);
			$mot_year = Arr::get($_POST, 'mot_year', '');
			$mot_month = Arr::get($_POST, 'mot_month', '');
			$mot_day = Arr::get($_POST, 'mot_day', '');
			if(!empty($mot_year)&!empty($mot_month)&!empty($mot_day))
			{
				$mot_date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $mot_month, $mot_day, $mot_year));
				$parent->setMotDateOfBirth($mot_date_of_birth);
			}
			$fat_year = Arr::get($_POST, 'fat_year', '');
			$fat_month = Arr::get($_POST, 'fat_month', '');
			$fat_day = Arr::get($_POST, 'fat_day', '');
			if(!empty($fat_year)&!empty($fat_month)&!empty($fat_day))
			{
				$fat_date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $fat_month, $fat_day, $fat_year));
				$parent->setFatDateOfBirth($fat_date_of_birth);
			}
			//$child_name = Arr::get($_POST, 'chil', '');
			$child_id = Arr::get($_POST, 'userid', '');
			$parent->setChild($child_id);
			$child_class = Arr::get($_POST, 'classes','');
			$class = new Classes();
			if(!empty($child_class))
			{
				$parent->setClassNumb($class_numb = $class->getClassNumber($child_class));
				$parent->setClassLet($class_let = $class->getClassLetter($child_class));
			}
			
			if(empty($username))
				$empty_login="";
			if(empty($mot_full_name))
				$empty_mot_full_name="";
			if(empty($fat_full_name))
				$empty_fat_full_name="";
	//		if(empty($role_name))
	//			$empty_role="";
			if(empty($mot_address))
				$empty_mot_address="";
			if(empty($fat_address))
				$empty_fat_address="";
			if(empty($mot_job))
				$empty_mot_job="";
			if(empty($fat_job))
				$empty_fat_job="";
			if(empty($mot_date_of_birth))
				$empty_mot_date_of_birth="";
			if(empty($fat_date_of_birth))
				$empty_fat_date_of_birth="";
			
				
			if(!empty($username)&!(empty($child_id))&!empty($mot_full_name)&!empty($fat_full_name)&!empty($mot_address)&!empty($fat_address)&!empty($mot_job)&!empty($fat_job)&!empty($mot_date_of_birth)&!empty($fat_date_of_birth))		
			{
				$create_user = ORM::factory('us')->create_user_parent($parent);
				$create_user_role = ORM::factory('roleuser')->create_user_role($username, $role_name);
				$create_user_info = ORM::factory('userinfo')->create_parent_info($parent);
				$ok = ""; $username = ""; $mot_full_name = ""; $fat_full_name = ""; $mot_address = "";
				$fat_address = ""; $mot_job = ""; $fat_job = ""; $mot_year = ""; $mot_month= ""; $mot_day = "";
				$fat_year = ""; $fat_month = ""; $fat_day = ""; $child_class = "";
	
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
			$test = View::factory('update_parent')
						->bind('classes', $classes);
						
			$class = new Classes();
			$classes = $class->getAll();
			
			$content = "";
						
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		}
		public function action_rdrct_par_up()
		{
			$this->auto_render = FALSE;
			$username = Arr::get($_POST, 'name');
			$user_id = ORM::factory('us')->getUserIdByFullName($username);
			$link = "/parentprof/update_parent/".$user_id;
			echo $link;
		}
		public function action_update_parent()
		{
			$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
			$test = View::factory('update_parent')
						->bind('classes', $classes);
						
			$class = new Classes();
			$classes = $class->getAll();
			
			$content = View::factory('updateparent')
					->bind('qid', $parent_id)
					->bind('empty_login', $empty_login)
					->bind('empty_mot_full_name', $empty_mot_full_name)
					->bind('empty_role', $empty_role)
					->bind('empty_mot_address', $empty_mot_address)
					->bind('empty_mot_job', $empty_mot_job)
					->bind('empty_mot_date_of_birth', $empty_mot_date_of_birth)
					->bind('empty_fat_full_name', $empty_fat_full_name)
					->bind('empty_fat_address', $empty_fat_address)
					->bind('empty_fat_job', $empty_fat_job)
					->bind('empty_fat_date_of_birth', $empty_fat_date_of_birth)
				//	->bind('empty_child_name', $empty_child_name)
					->bind('username', $username)
					->bind('fat_full_name', $fat_full_name)
					->bind('role_name', $role_name)
					->bind('fat_address', $fat_address)
					->bind('fat_job', $fat_job)
				//	->bind('fat_date_of_birth', $fat_date_of_birth)
					->bind('mot_full_name', $mot_full_name)
					->bind('mot_address', $mot_address)
					->bind('mot_job', $mot_job)
				//	->bind('mot_date_of_birth', $mot_date_of_birth)
				//	->bind('classes', $classes)
				//	->bind('child_name', $child_name)
				//	->bind('child_class', $child_class)
					->bind('years', $years)
					->bind('months', $months)
					->bind('days', $days)
					->bind('mot_year', $mot_year)
					->bind('mot_month', $mot_month)
					->bind('mot_day', $mot_day)
					->bind('fat_year', $fat_year)
					->bind('fat_month', $fat_month)
					->bind('fat_day', $fat_day);
		
			$bdate = new Birthdate();
			$years = $bdate->getYears();
			$months = $bdate->getMonths();
			$days = $bdate->getDays();
			
			$student_id = $this->request->param('id');
		
			$parent_id = ORM::factory('userinfo')->getParentIdbyStudentId($student_id);
			$username = ORM::factory('us')->getUsernameById($parent_id);
			$mot_full_name = ORM::factory('userinfo')->getMotFullNameById($parent_id);
			$mot_address = ORM::factory('userinfo')->getMotAddressById($parent_id);
			$mot_job = ORM::factory('userinfo')->getMotJobById($parent_id);
			$mot_date_of_birth = ORM::factory('userinfo')->getMotDateOfBirthById($parent_id);
			$mot_year = intval(substr($mot_date_of_birth, 0, 4));
			$mot_month = intval(substr($mot_date_of_birth, 5, 2));
			$mot_day = intval(substr($mot_date_of_birth, 8, 2));
			$fat_full_name = ORM::factory('userinfo')->getFatFullNameById($parent_id);
			$fat_address = ORM::factory('userinfo')->getFatAddressById($parent_id);
			$fat_job = ORM::factory('userinfo')->getFatJobById($parent_id);
			$fat_date_of_birth = ORM::factory('userinfo')->getFatDateOfBirthById($parent_id);
			$fat_year = intval(substr($fat_date_of_birth, 0, 4));
			$fat_month = intval(substr($fat_date_of_birth, 5, 2));
			$fat_day = intval(substr($fat_date_of_birth, 8, 2));
				
			
			if(isset($_POST['btnupdate']))
			{
			
				$content = View::factory('updateparent')
						->bind('qid', $parent_id)
						->bind('empty_login', $empty_login)
						->bind('empty_mot_full_name', $empty_mot_full_name)
						->bind('empty_role', $empty_role)
						->bind('empty_mot_address', $empty_mot_address)
						->bind('empty_mot_job', $empty_mot_job)
						->bind('empty_mot_date_of_birth', $empty_mot_date_of_birth)
						->bind('empty_fat_full_name', $empty_fat_full_name)
						->bind('empty_fat_address', $empty_fat_address)
						->bind('empty_fat_job', $empty_fat_job)
						->bind('empty_fat_date_of_birth', $empty_fat_date_of_birth)
					//	->bind('empty_child_name', $empty_child_name)
						->bind('username', $username)
						->bind('fat_full_name', $fat_full_name)
						->bind('role_name', $role_name)
						->bind('fat_address', $fat_address)
						->bind('fat_job', $fat_job)
					//	->bind('fat_date_of_birth', $fat_date_of_birth)
						->bind('mot_full_name', $mot_full_name)
						->bind('mot_address', $mot_address)
						->bind('mot_job', $mot_job)
					//	->bind('mot_date_of_birth', $mot_date_of_birth)
					//	->bind('classes', $classes)
					//	->bind('child_name', $child_name)
					//	->bind('child_class', $child_class)
						->bind('years', $years)
						->bind('months', $months)
						->bind('days', $days)
						->bind('mot_year', $mot_year)
						->bind('mot_month', $mot_month)
						->bind('mot_day', $mot_day)
						->bind('fat_year', $fat_year)
						->bind('fat_month', $fat_month)
						->bind('fat_day', $fat_day)
						->bind('ok', $ok);
			
				$bdate = new Birthdate();
				$years = $bdate->getYears();
				$months = $bdate->getMonths();
				$days = $bdate->getDays();
				
				$parent_id = Arr::get($_POST, 'secret', '');
				$parent = new Parentclass();
				$username = Arr::get($_POST, 'username', '');
				$parent->setUsername($username);
				$mot_full_name = Arr::get($_POST, 'mot_full_name', '');
				$parent->setMotFullname($mot_full_name);
				$fat_full_name = Arr::get($_POST, 'fat_full_name', '');
				$parent->setFatFullname($fat_full_name);
				$role_name = 'parent';
				$parent->setRolename($role_name);
				$mot_address = Arr::get($_POST, 'mot_address', '');
				$parent->setMotAddress($mot_address);
				$fat_address = Arr::get($_POST, 'fat_address', '');
				$parent->setFatAddress($fat_address);
				$mot_job = Arr::get($_POST, 'mot_job', '');
				$parent->setMotJob($mot_job);
				$fat_job = Arr::get($_POST, 'fat_job', '');
				$parent->setFatJob($fat_job);
				$mot_year = Arr::get($_POST, 'mot_year', '');
				$mot_month = Arr::get($_POST, 'mot_month', '');
				$mot_day = Arr::get($_POST, 'mot_day', '');
				if(!empty($mot_year)&!empty($mot_month)&!empty($mot_day))
				{
					$mot_date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $mot_month, $mot_day, $mot_year));
					$parent->setMotDateOfBirth($mot_date_of_birth);
				}
				$fat_year = Arr::get($_POST, 'fat_year', '');
				$fat_month = Arr::get($_POST, 'fat_month', '');
				$fat_day = Arr::get($_POST, 'fat_day', '');
				if(!empty($fat_year)&!empty($fat_month)&!empty($fat_day))
				{
					$fat_date_of_birth = date('Y-m-d H:i:s', mktime(0, 0, 0, $fat_month, $fat_day, $fat_year));
					$parent->setFatDateOfBirth($fat_date_of_birth);
				}
				
				if(empty($username))
					$empty_login="";
				if(empty($mot_full_name))
					$empty_mot_full_name="";
				if(empty($fat_full_name))
					$empty_fat_full_name="";
		//		if(empty($role_name))
		//			$empty_role="";
				if(empty($mot_address))
					$empty_mot_address="";
				if(empty($fat_address))
					$empty_fat_address="";
				if(empty($mot_job))
					$empty_mot_job="";
				if(empty($fat_job))
					$empty_fat_job="";
				if(empty($mot_date_of_birth))
					$empty_mot_date_of_birth="";
				if(empty($fat_date_of_birth))
					$empty_fat_date_of_birth="";
				
				if(!empty($username)&!empty($mot_full_name)&!empty($fat_full_name)&!empty($mot_address)&!empty($fat_address)&!empty($mot_job)&!empty($fat_job)&!empty($mot_date_of_birth)&!empty($fat_date_of_birth))		
				{
					$update_user = ORM::factory('us')->update_parent($parent, $parent_id);
					$update_user2 = ORM::factory('userinfo')->update_parent($parent, $parent_id);
					$ok = ""; $username = ""; $mot_full_name = ""; $fat_full_name = ""; $mot_address = "";
					$fat_address = ""; $mot_job = ""; $fat_job = ""; $mot_year = ""; $mot_month= ""; $mot_day = "";
					$fat_year = ""; $fat_month = ""; $fat_day = "";
				}
				
			}
			
			$this->template->header = $header;
			$this->template->roles = View::factory('updatediv');
			$this->template->test = $test;
			$this->template->content = $content;
		}
		
}	