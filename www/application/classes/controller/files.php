<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Files extends Controller_Template{

	public $template = 'templateview';
	public function action_view()
	{
		$auth = Auth::instance();
		$directory = $_GET['dir'].'/';
		if(isset($_GET['status']))
			$status = $_GET['status'];
		$teacher_name = ORM::factory('us')->getFullNameById(substr($directory, strpos($directory, "uploads/")+8));
		if($auth->logged_in('teacher')){
			$header = View::factory('/teacher/teacherheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$test = View::factory('filesheader');
			$content = View::factory('files')
							->bind('files', $files);
			if(isset($status))
			{
				$test = "";
				$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
			}
		}
		else if($auth->logged_in('student')){
			$header = View::factory('/student/studentheader')
						->bind('user_id', $user_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$test = "";
			$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
			
		}
		else if($auth->logged_in('parent'))
		{
			$header = View::factory('/parent/parentheader')
						->bind('student_id', $student_id);
			$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			$student_id = ORM::factory('userinfo')->getChildIdByParentId($user_id);
			$test = "";
			$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
		}	
		else if($auth->logged_in('admin'))
		{	
			$header = View::factory('/admin/adminheader');
			$test = "";
			$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
		}
		else if($auth->logged_in('or'))
		{
			$header = View::factory('/or/orheader');
			$test = "";
			$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
		}
		else if($auth->logged_in('director'))
		{
			$header = View::factory('/director/directorheader');
			$test = "";
			$content = View::factory('files2')
							->bind('files', $files)
							->bind('teacher_name', $teacher_name);
		}
		$files = array();			
		$f = glob($directory . "*");
		foreach($f as $file)
		{
			$files[] = array(pathinfo($file, PATHINFO_EXTENSION), pathinfo($file, PATHINFO_FILENAME), $file);
		}
		
		$this->template->header = $header;
		$this->template->roles = "";
		$this->template->test = $test;
		$this->template->content = $content;
	}
		public function action_download()
		{
			$f = $_GET['name'];
			if (file_exists($f)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.basename($f));
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($f));
				ob_clean();
				flush();
				readfile($f);
				exit;
			}		
		}
		public function action_upload_file()
		{
	
			$content = View::factory('upload_file')
						->bind('upload_dir', $upload_dir);
			
			$upload_dir = substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], "dir=")+4)."/";
			$auth = Auth::instance();
			$teacher_id= ORM::factory('us')->getUserId($_SESSION['login']);
			if(isset($_FILES['files']))
			{
				$upload_dir = Arr::get($_POST, 'secret', '');
				foreach($_FILES['files']['tmp_name'] as $key => $tmp_name)
				{
					$file_name = $_FILES['files']['name'][$key];
					$file_size = $_FILES['files']['size'][$key];
					$file_type = $_FILES['files']['type'][$key];
					$file_tmpname = $_FILES['files']['tmp_name'][$key];	
					$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
					$allowed_extensions=explode(',',$ext_str);
					$max_file_size = 10485760;
					$ext = substr($file_name, strrpos($file_name, '.') + 1);
					if (!in_array($ext, $allowed_extensions))
						echo "only".$ext_str." files allowed to upload";
					if($file_size>=$max_file_size)
						echo "only the file less than ".$max_file_size."mb  allowed to upload";
					$path = $upload_dir.$file_name;
					if(file_exists($path))
					{
						$updatedFileName = $this->action_update_file_name($path);
						move_uploaded_file($file_tmpname, $updatedFileName);
						echo "Файл загружен";

					}
					else
					{
						move_uploaded_file($file_tmpname, $path);
						echo "Файл загружен";
					}	
				}
			}
			
			$this->auto_render = FALSE;
			$this->response->body($content);
	
		}
		
		public function action_update_file_name($file)
		{
			$pos = strrpos($file,'.');
			$ext = substr($file,$pos); 
			$dir = strrpos($file,'/');
			$dr  = substr($file,0,($dir+1)); 
			$arr = explode('/',$file);
			$fName = substr($arr[(count($arr) - 1)], 0, -strlen($ext));

			$exist = FALSE;
			$i = 2;
			
			while(!$exist)
			{
			  $file = $dr.$fName.'_'.$i.$ext;
			  
			  if(!file_exists($file))
				$exist = TRUE;
			  
			  $i++;
			}

			return $file;
		}
	
		public function action_files()
		{
			$auth = Auth::instance();
			if($auth->logged_in('teacher')){
				$header = View::factory('/teacher/teacherheader')
							->bind('user_id', $user_id);
				$user_id = ORM::factory('us')->getUserId($_SESSION['login']);
			}
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
			else if($auth->logged_in('admin'))
				$header = View::factory('/admin/adminheader');
			else if($auth->logged_in('or'))
				$header = View::factory('/or/orheader');
			else if($auth->logged_in('director'))
				$header = View::factory('/director/directorheader');

			$subject_id = $_GET['id'];
			$content = View::factory('teacherfiles')
							->bind('array', $array)
							->bind('subject_name', $subject_name);
			$subject_name = ORM::factory('subject')->getSubjectNameById($subject_id);
			$teachers = ORM::factory('userinfo')->getTeachersBySubject($subject_id);
			$array = array();
			foreach($teachers as $t)
				$array[] = array(ORM::factory('us')->getFullNameById($t->user_id),ORM::factory('us')->getUsernameById($t->user_id), $t->user_id);
			$this->template->header = $header;
			$this->template->roles = "";
			$this->template->test = "";
			$this->template->content = $content;
		}
		public function action_a()
		{
			$username = $_GET['uname'];
			$teacher_id = ORM::factory('us')->getUserId($username);
			Request::initial()->redirect('files/view?dir=C:/xampp/htdocs/intranet/www/public/uploads/'.$teacher_id.'&status=false');	
		}	
	
}