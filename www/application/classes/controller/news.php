<?php defined('SYSPATH') or die('No direct script access.'); 
class Controller_News extends Controller_Maincontroller {

   public function action_index()
   {        
		$articles = array();
		$auth = Auth::instance();
		$session = Session::instance();
		if($auth->logged_in())
		{
			$login = $_SESSION['login'];
			$user_id = ORM::factory('us')->getUserId($login);
			$role_id = ORM::factory('roleuser')->getUserRoleId($user_id);
			$role = new Role();
			$role_name = $role->getNameById($role_id);
			if($role_name == 'or'||$role_name == 'admin'||$role_name == 'director')
				$show = "";
		}
		$content = View::factory('news')
                ->bind('articles', $articles)
				->bind('username', $username)
				->bind('show', $show);
        $articles = ORM::factory('new')->order_by('post_date', 'DESC')->find_all();	
		$post = array();
		for($i = 0; $i<sizeof($articles); $i++)
		{
			$username[$i] = ORM::factory('us')->getFullNameById($articles[$i]->author_id);
		}		
        $this->template->content = $content;		
   }
   
   public function action_articles()
    {
        $id = $this->request->param('id');
				
		$auth = Auth::instance();
		$session = Session::instance();
		
		if($auth->logged_in())
		{
			$login = $_SESSION['login'];
			$user_id = ORM::factory('us')->getUserId($login);
			$role_id = ORM::factory('roleuser')->getUserRoleId($user_id);
			$role = new Role();
			$role_name = $role->getNameById($role_id);
			if($role_name == 'or'||$role_name == 'admin'||$role_name == 'director')
				$show = "";
		}	
		$content = View::factory('article')
						->bind('article', $article)
						->bind('username', $username)
						->bind('show', $show);
	  
		$article = ORM::factory('new', $id);
		$user_id = $article->getAuthorIdByNewsId();
		$username = ORM::factory('us')->getFullNameById($user_id);
        $this->template->content = $content;
    }   
} 