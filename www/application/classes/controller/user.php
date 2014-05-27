<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template{
	public $template = 'templateview';
	public function action_create_user()
	{	
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$this->template->header = $header;	
		$this->template->roles = View::factory('creatediv');
		$this->template->test= '';
		$this->template->content = '';
	}	
	public function action_change_cr()
	{
		$this->auto_render = FALSE;
		$sel = Arr::get($_POST, 's', '');
		if($sel == 'student')
			echo "/studentprof/create_user";
		else if ($sel == 'teacher')
			echo "/teacherprof/create_user";
		else if ($sel == 'parent')
			echo "/parentprof/create_user";
		else if ($sel == 'or')
			echo "/orprof/create_user";
		else if ($sel == 'admin')
			echo "/adminprof/create_user";
		else if ($sel == 'director')
			echo "/directorprof/create_user";
		else
			echo "/";
	}	
	public function action_delete_user()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))	
			$header = View::factory('/admin/adminheader');
		$this->template->header = $header;
		$this->template->roles = View::factory('deletediv');
		$this->template->test= '';
		$this->template->content = '';
	}
	public function action_change_dl()
	{
		$this->auto_render = FALSE;
		$sel = Arr::get($_POST, 's', '');
		if($sel == 'student')
			echo "/studentprof/delete_user";
		else if ($sel == 'teacher')
			echo "/teacherprof/delete_user";
		else if ($sel == 'parent')
			echo "/parentprof/delete_user";
		else if ($sel == 'or')
			echo "/orprof/delete_user";
		else if ($sel == 'admin')
			echo "/adminprof/delete_user";
		else if ($sel == 'director')
			echo "/directorprof/delete_user";
		else
			echo "/";
	
	}
	public function action_update_user()
	{
		$auth = Auth::instance();
			if($auth->logged_in('admin'))	
				$header = View::factory('/admin/adminheader');
		$this->template->header = $header;
		$this->template->roles = View::factory('updatediv');
		$this->template->test = '';
		$this->template->content = '';
	}
	public function action_change_up()
	{
		$this->auto_render = FALSE;
		$sel = Arr::get($_POST, 's', '');
		if($sel == 'student')
			echo "/studentprof/update_user";
		else if ($sel == 'teacher')
			echo "/teacherprof/update_user";
		else if ($sel == 'parent')
			echo "/parentprof/update_user";
		else if ($sel == 'or')
			echo "/orprof/update_user";
		else if ($sel == 'admin')
			echo "/adminprof/update_user";
		else if ($sel == 'director')
			echo "/directorprof/update_user";
		else
			echo "/";
	}	
}
	
		
