<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Mynews extends Controller_Template{

public $template = 'templateview';

	
	public function action_add()
    {		
		$session = Session::instance();
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
		
		$content = View::factory('addnewsview')
								->bind('empty_title', $empty_title)
								->bind('empty_content', $empty_content)
								->bind('title', $title)
								->bind('cont', $cont)
								->bind('ok', $ok);
		
		if(isset($_POST['btnsubmit']))
		{
			$login = $_SESSION['login'];
			$author_id = ORM::factory('us')->getUserId($login);
			$title= Arr::get($_POST, 'title', '');
			$cont = Arr::get($_POST, 'text', '');
			$date = date("Y-m-d H:i:s");
			$content_short = substr($cont, 0, 500);
			if(empty($title))
				$empty_title="";
			if(empty($cont))
				$empty_content="";
			if(!empty($title)&!empty($cont))
			{
				$addnews = ORM::factory('new')->addnews($author_id, $title, $cont, $content_short, $date);
				$ok = ""; $cont = ""; $title = "";
			}
		}
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
	
	 public function action_view()
    {		
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
			
		$mynews = array();
		$session = Session::instance();
		$content = View::factory('mynewsview')
						->bind('mynews', $mynews);
		
		$login = $_SESSION['login'];
		$author_id = ORM::factory('us')->getUserId($login);
		$mynews = ORM::factory('new')->getMyNews($author_id);
	
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
	
	  public function action_details()
    {
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
			
        $id = $this->request->param('id');
		
		$show = "";
		$content = View::factory('article')
						->bind('article', $article)
						->bind('username', $username)
						->bind('show', $show);
	 
		$article = ORM::factory('new', $id);
		$user_id = ORM::factory('new', $id)->getAuthorIdByNewsId();
		$username = ORM::factory('us')->getFullNameById($user_id);
	 
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;	  
    }  
	
	 public function action_delete()
    {
        $id = $this->request->query('id');
		$article = ORM::factory('new', $id);
		$article->deleteById();
		$ref = $_SERVER['HTTP_REFERER'];
		if(strncmp($ref, 'http://intranet/news', 20)==0)
			$this->request->redirect('news');
		else if(strncmp($ref,'http://intranet/mynews', 22)==0)
			$this->request->redirect('mynews/view');
	
		
    }  
	
	
	public function action_update()
    {
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
			
		$content = View::factory('editnews')
						->bind('empty_title', $empty_title)
						->bind('empty_content', $empty_content)
						->bind('title', $title)
						->bind('cont', $cont);
			
        $id = $this->request->query('id');
				
		$title = ORM::factory('new', $id)->getTitleById();
		$cont = ORM::factory('new', $id)->getTextById();
		
		if(isset($_POST['btnsubmit']))
		{
			$title = $_POST['title'];
			$cont = $_POST['text'];
			$content_short = substr($cont, 0, 500);	

			if(empty($title))
				$empty_title="";
			if(empty($cont))
				$empty_content="";
			if(!empty($title)&!empty($cont))
			{
				$article = ORM::factory('new', $id)->updateNews($id, $title, $cont, $content_short);
				if(strncmp($_POST['edit'], 'http://intranet/news', 20)==0)
					$this->request->redirect('news');
				else if(strncmp($_POST['edit'],'http://intranet/mynews', 22)==0)
					$this->request->redirect('mynews/view');
			}
		}
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
    } 
		
}	