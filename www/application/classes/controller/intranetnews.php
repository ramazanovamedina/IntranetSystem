<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Intranetnews extends Controller_Template{

	public $template = 'templateview';
	public function action_add()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');	
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
			
		$content = View::factory('intranetnews')
						->bind('subjects', $subjects)
						->bind('classes', $classes)
						->bind('cont', $cont)
						->bind('empty_content', $empty_content)
						->bind('title', $title)
						->bind('empty_title', $empty_title)
						->bind('empty_recievers', $empty_recievers)
						->bind('ok', $ok);
		
		$subjects = ORM::factory('subject')->getAll();
		$cl = new Classes();
		$classes = $cl->getAll();
		
		if(isset($_POST['btnsubmit']))
		{
			$auth = Auth::instance();
			$author_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$title = Arr::get($_POST, 'title', '');
			$cont = Arr::get($_POST, 'text', '');
			$date = date("Y-m-d H:i:s");
			$content_short = substr($cont, 0, 500);
			$reciever = array();
			
			$all = Arr::get($_POST, 'all', '');
			if($all!="")
				$reciever[] = "all";
			$director = Arr::get($_POST, 'director', '');
			if($director!="")
				$reciever[] = "director";
			$or = Arr::get($_POST, 'or', '');
			if($or!="")
				$reciever[] = "or";
			$teacher_all = Arr::get($_POST, 'teacher_all', '');
			if($teacher_all!="")
				$reciever[] = "teacher_all";
			$teacher_subjects = Arr::get($_POST, 'subject', '');
			if($teacher_subjects!="")
				foreach($_POST['subject'] as $t_s)
					$reciever[] = $t_s;
			$student_all = Arr::get($_POST, 'student_all', '');
			if($student_all!="")
				$reciever[] = "student_all";
			$student_classes = Arr::get($_POST, 'classes', '');
			if($student_classes!="")
				foreach($student_classes as $s_c)
					$reciever[] = $s_c;	
			$parent_all = Arr::get($_POST, 'parent_all', '');
			if($parent_all!="")
				$reciever[] = "parent_all";
			$parent_classes = Arr::get($_POST, 'classes2', '');
			if($parent_classes!="")
				foreach($parent_classes as $p_c)
					$reciever[] = $p_c;	
			if(empty($title))
				$empty_title="";
			if(empty($cont))
				$empty_content="";
			if(empty($reciever))
				$empty_recievers = "";
			if(!empty($title)&!empty($cont)&!empty($reciever))
			{
				foreach($reciever as $res)
					ORM::factory('intranetnews')->addnews($author_id, $title, $cont, $content_short, $date, $res);
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
	//	else if($auth->logged_in('zavuch'))
	//		$header = View::factory('/zavuch/zavuchheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');	
		else if($auth->logged_in('student')){
			$header = View::factory('/student/studentheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}

		$content = View::factory('viewintranetnews')
									->bind('news', $news);
		$auth = Auth::instance();
		$news = array();
		if($auth->logged_in('student'))
		{
			$student_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
			$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
			$class = $class_numb.$class_let;
			$news[] = ORM::factory('intranetnews')->getnews('all');
			$news[] = ORM::factory('intranetnews')->getnews('student_all');
			$news[] = ORM::factory('intranetnews')->getnews($class);
		}
		else if($auth->logged_in('teacher'))
		{
			$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$subjects = ORM::factory('userinfo')->getTeacherSubjectsById($teacher_id);
			$news[] = ORM::factory('intranetnews')->getnews('all');
			$news[] = ORM::factory('intranetnews')->getnews('teacher_all');
			foreach($subjects as $subject)
			{
				$check = "false";
				$temp = ORM::factory('intranetnews')->getnews($subject);
				foreach($temp as $t)
				{
					$author = $t->author_id;
					$date = $t->post_date;
				}
				if(isset($author)){
					foreach($news as $n)
						foreach($n as $new)
							if($author == $new->author_id && $date == $new->post_date)
								$check = "true";
				}
				if($check == "false")
					$news[] = $temp;
			}
		}
		
		else if($auth->logged_in('parent'))
		{
			$parent_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($parent_id);
			$class_numb = ORM::factory('userinfo')->getClassNumbById($student_id);
			$class_let = ORM::factory('userinfo')->getClassLetById($student_id);
			$class = $class_numb.$class_let;
			$news[] = ORM::factory('intranetnews')->getnews('all');
			$news[] = ORM::factory('intranetnews')->getnews('parent_all');
			$news[] = ORM::factory('intranetnews')->getnews($class);
		}
		else if($auth->logged_in('director'))
		{
			$director_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$news[] = ORM::factory('intranetnews')->getnews('all');
			$news[] = ORM::factory('intranetnews')->getnews('director');
		}
		else if($auth->logged_in('or'))
		{
			$or_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$news[] = ORM::factory('intranetnews')->getnews('all');
			$news[] = ORM::factory('intranetnews')->getnews('or');
		}
		else if($auth->logged_in('admin'))
		{
			$admin_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$news[] = ORM::factory('intranetnews')->getAllNews();
		}
		
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
	//	else if($auth->logged_in('zavuch'))
	//		$header = View::factory('/zavuch/zavuchheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
							->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');	
		else if($auth->logged_in('student'))
		{
			$header = View::factory('/student/studentheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
		}	
		$content = View::factory('intranetnewsdetails')
						->bind('article', $article)
						->bind('username', $username)
						->bind('show', $show);
	 
		$id = $this->request->param('id');
		$article = ORM::factory('intranetnews', $id);
		$author_id = $article->getAuthorIdByNewsId();
		$username = ORM::factory('us')->getFullNameById($author_id);
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
		
	}
	public function action_mynews()
	{
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
	//	else if($auth->logged_in('zavuch'))
	//		$header = View::factory('/zavuch/zavuchheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');	
			
		$content = View::factory('myintranetnews')
				->bind('mynews', $mynews);
		
		$auth = Auth::instance();
		$login = $_SESSION['login'];
		$author_id = ORM::factory('us')->getUserId($login);
		$mynews = ORM::factory('intranetnews')->getMyNews($author_id);
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
	}
	public function action_delete()
    {
        $id = $this->request->query('id');
		$article = ORM::factory('intranetnews', $id);
		$article->deleteById();
		$this->request->redirect('intranetnews/mynews');
    }
	public function action_update()
    {
		$auth = Auth::instance();
		if($auth->logged_in('admin'))
			$header = View::factory('/admin/adminheader');
		else if($auth->logged_in('or'))
			$header = View::factory('/or/orheader');
	//	else if($auth->logged_in('zavuch'))
	//		$header = View::factory('/zavuch/zavuchheader');
		else if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
		}
		else if($auth->logged_in('director'))
			$header = View::factory('/director/directorheader');
			
        $id = $this->request->query('id');
		$content = View::factory('editintranetnews')
					->bind('empty_title', $empty_title)
					->bind('empty_content', $empty_content)
					->bind('title', $title)
					->bind('cont', $cont);
		$title = ORM::factory('intranetnews', $id)->getTitleById();
		$cont = ORM::factory('intranetnews', $id)->getTextById();
		
		if(isset($_POST['btnsubmit']))
		{
			$title = $_POST['title'];
			$cont = $_POST['text'];
			$content_short = substr($cont, 0, 500);	
			$author_id = ORM::factory('intranetnews', $id)->getAuthorIdByNewsId();
			$post_date = ORM::factory('intranetnews', $id)->getPostDateByNewsId();
			if(empty($title))
				$empty_title="";
			if(empty($content))
				$empty_content="";
			if(!empty($title)&!empty($cont))
			{
				$article = ORM::factory('intranetnews')->updateNews($id, $title, $cont, $content_short, $author_id, $post_date);
				$this->request->redirect('intranetnews/mynews');
			}
		}
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = "";
		$this->template->content = $content;
    } 	
}
