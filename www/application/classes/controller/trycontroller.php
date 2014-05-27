<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Trycontroller extends Controller_Template {
	public $template = 'templateview';
	public function before()
	{
		$session = Session::instance();
		$session->set('auth_redirect', $_SERVER['REQUEST_URI']);
		
		$auth = Auth::instance();
		if($auth->logged_in()==0)
		{
			Request::initial()->redirect('auth');
		}
		else
		{	
			$login = $_SESSION['login'];
			$user_id = ORM::factory('us')->getUserId($login);
			$role_id = ORM::factory('roleuser')->getUserRoleId($user_id);			
			$role = new Role();
			$role_name = $role->getNameById($role_id);
			$perm = $role->getPermission($role_id);
			$url2 = substr(parse_url($_SERVER['REQUEST_URI'])["path"],1,4);
			$bool = 'true';
			for($i=0; $i<sizeof($perm); $i++)
			{
				if($url2==substr($perm[$i],0,4))
				{
					$bool = 'false';
				}
			}
			if($bool == 'true')
				Request::initial()->redirect($role_name);
		}
		return parent::before();
	}
}