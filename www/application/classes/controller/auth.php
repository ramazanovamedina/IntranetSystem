<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Auth extends Controller_MainController {
	public function action_index()
	{
		
		$data = array();
		$auth = Auth::instance();
		
		if($auth->logged_in())
		{
			//пересылает на страницу с которой перекинуло на авторизацию
			$session = Session::instance();
			$auth_redirect = $session->get('auth_redirect', '');
			$session->delete('auth_redirect');
			Request::initial()->redirect($auth_redirect);
			
		}
		else
		{
			if(isset($_POST['btnsubmit']))
			{
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				
				if($auth->login($login, $password))
				{
					$_SESSION['login'] = $login;
					
					if($auth->logged_in('student'))
						Request::initial()->redirect('student');
					if($auth->logged_in('teacher'))
						Request::initial()->redirect('teacher');
					if($auth->logged_in('or'))
						Request::initial()->redirect('or');
					if($auth->logged_in('parent'))
						Request::initial()->redirect('parent');
					if($auth->logged_in('admin'))
						Request::initial()->redirect('admin');
					if($auth->logged_in('director'))
						Request::initial()->redirect('director');
					
				}
				else
				{
					$data["error"] = "";
				}
			}
		}
		$content = View::factory('authview', $data);
		$this->template->content = $content;
	}

	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		session_destroy();	
		Request::initial()->redirect('auth');
	}
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('qwerty');
	}
}