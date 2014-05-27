<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Ajax extends Controller{


		
	public function action_student()
	{
		$role = Arr::get($_POST, 'role', '');
		$r = new Role();
		$role_id = $r->getRoleId($role);
		$rr = ORM::factory('roleuser')->getAllUsersByRoleId($role_id);
	
		$json = array();
		foreach ($rr as $r)
			$json[] = $r->as_array();
		echo json_encode($json);

	}
	
	public function action_loginunique()
	{
		$login = Arr::get($_POST, 'login', '');
		$res = ORM::factory('us')->loginunique($login);
		echo json_encode(array('result' => $res));
	}
	
	public function action_select_teacher()
	{
	$subject_id = ORM::factory('subject')->getSubjectIdByName(Arr::get($_POST, 'subject', ''));
	$json = array();
	$result = DB::select('user_id')->from('user_info')->where('key', '=', 'teacher_subject')->and_where('value', '=', $subject_id)->group_by('user_id')->execute()->as_array();
	foreach($result as $res)
	{
		$rrr = ORM::factory('us')->getFullNameById($res);	
		$json[] = $rrr;
	}
	echo json_encode($json);
	
	}	
	
	public function action_selectstudent()
	{
		$class = Arr::get($_POST, 'cl', '');
		$cl = new Classes();
		$class_numb = $cl->getClassNumber($class);
		$class_let = $cl->getClassLetter($class);
		$students = ORM::factory('userinfo')->getStudentIdByClass($class_numb, $class_let);
		$json = array();
		foreach($students as $student)
		{
			$rrr = ORM::factory('us')->getFullNameById($student);	
			$json[] = $rrr;
		}
	
		echo json_encode($json);
		
	}
	public function action_selectparent()
	{
		$class = Arr::get($_POST, 'cl', '');
		$cl = new Classes();
		$class_numb = $cl->getClassNumber($class);
		$class_let = $cl->getClassLetter($class);
		$parents = ORM::factory('userinfo')->getParentIdByClass($class_numb, $class_let);
		$json = array();
		foreach($parents as $parent)
		{
			$rrr = ORM::factory('us')->getUsernameById($parent);	
			$json[] = $rrr;
		}
	
		echo json_encode($json);
		
	}
	
	public function action_getUserId()
	{
		$username = Arr::get($_POST, 'name', '');
		$result = ORM::factory('us')->getUserId($username);
		echo json_encode($result);
	}
	public function action_getUserIdByFullName()
	{
		$username = Arr::get($_POST, 'name', '');
		$result = ORM::factory('us')->getUserIdByFullName($username);
		echo json_encode($result);
	}
	public function action_getUserFullName()
	{
		$username = Arr::get($_POST, 'name', '');
		$result = ORM::factory('us')->getFullNameByUsername($username);
		echo json_encode($result);
	}
	public function action_deleteor()
	{
		$or = Arr::get($_POST, 'or', '');
		$or_id = ORM::factory('us')->getUserIdByFullName($or);
		$result = ORM::factory('us')->deleteUser($or_id);
		
	}
	public function action_deleteadmin()
	{
		$admin = Arr::get($_POST, 'admin', '');
		$admin_id = ORM::factory('us')->getUserIdByFullName($admin);
		$result = ORM::factory('us')->deleteUser($admin_id);
		
	}
	public function action_deleteparent()
	{
		$parent = Arr::get($_POST, 'parent', '');
		$parent_id = ORM::factory('us')->getUserId($parent);
		$result = ORM::factory('us')->deleteUser($parent_id);
		$result2 = ORM::factory('userinfo')->deleteUser($parent_id);
	}
		public function action_deleteteacher()
	{
		$teacher = Arr::get($_POST, 'teacher', '');
		$teacher_id = ORM::factory('us')->getUserIdByFullName($teacher);
		$result = ORM::factory('us')->deleteUser($teacher_id);
		$result2 = ORM::factory('userinfo')->deleteUser($teacher_id);
	}
	public function action_deletestudent()
	{
		$student = Arr::get($_POST, 'student', '');
		$student_id = ORM::factory('us')->getUserIdByFullName($student);
		$parent_id = ORM::factory('userinfo')->getParentIdbyStudentId($student_id);
		$result = ORM::factory('us')->deleteUser($student_id);
		$result2 = ORM::factory('userinfo')->deleteUser($student_id);
		$result3 = ORM::factory('us')->deleteUser($parent_id);
		$result4 = ORM::factory('userinfo')->deleteUser($parent_id);
	}
	public function action_checkpass()
	{
		$oldpass= Arr::get($_POST, 'oldpass', '');
		$user_id = Arr::get($_POST, 'user_id', '');
		echo json_encode(ORM::factory('us')->checkPass($user_id, $oldpass));
				
	}
	public function action_select_class()
	{
		$auth = Auth::instance();
		$teacher_id = ORM::factory('us')->getUserId($_SESSION['login']);
		$subject_id = ORM::factory('subject')->getSubjectIdByName(Arr::get($_POST, 'subject', ''));
		$classes = ORM::factory('schedule')->getClassByTeacherAndSubject($teacher_id, $subject_id);
		$json = array();
		foreach ($classes as $class)
			foreach ($class as $key=>$value)
				$json[] = $value;
		echo json_encode($json);
	}
	public function action_select_subjects_by_class()
	{
		$class_id = Arr::get($_POST, 'cl', '');
		$subjects = ORM::factory('schedule')->getSubjectsByClass($class_id);
		$json = array();
		foreach($subjects as $subject)
			$json[] = ORM::factory('subject')->getSubjectNameById($subject);
		 echo json_encode($json);
	}
	public function action_getcomment()
	{
		$date = Arr::get($_POST, 'date', '');
		$order = Arr::get($_POST, 'order', '');
		$user = Arr::get($_POST, 'user', '');
		$subject = Arr::get($_POST, 'subject', '');
		$res = ORM::factory('mark')->getComment($user, $subject, $order, $date);
		echo json_encode($res);

	}
	public function action_setcomment()
	{
		$comment = Arr::get($_POST, 'comm', '');
		$user_id = Arr::get($_POST, 'user', '');
		$date = Arr::get($_POST, 'date', '');
		$order = Arr::get($_POST, 'order', '');
		$subject_id = Arr::get($_POST, 'subject', '');
		if(!empty($comment))
		{
			$res = ORM::factory('mark')->addComment($user_id, $date, $order, $subject_id, $comment);
		}
		echo json_encode("ok");
	}

	public function action_rename_file()
	{
		$dir = Arr::get($_POST, 'dir', '');
		$name = Arr::get($_POST, 'name', '');
		$ext = Arr::get($_POST, 'ext', '');
		$direct = Arr::get($_POST, 'direct', '');
		$status = "false";
		if($name!=""){
			rename($dir, $direct.'/'.$name.'.'.$ext);
			$status = "true";
		}
		echo json_encode($status);
	}
	public function action_rename_dir()
	{
		$dir = Arr::get($_POST, 'dir', '');
		$name = Arr::get($_POST, 'name', '');
		$direct = Arr::get($_POST, 'direct', '');
		$status = "false";
		if($name!=""){
			if(is_dir($direct.'/'.$name)==false)
			{
				rename($dir, $direct.'/'.$name);	
			}
			else
			{
				$updated_name = $this->action_update_dir_name($direct.'/'.$name);
				rename($dir, $updated_name);
			}
			$status = "true";
		}
		echo json_encode($status);
	}
	
	public function action_create_dir()
	{
		$upload_dir = Arr::get($_POST, 'direct', '');
		$dir_name = Arr::get($_POST, 'name', '');
		$dir = $upload_dir.'/'.$dir_name;
		if(is_dir($dir)==false){
			mkdir("$dir", 0700);
		}
		else{
			$updated_name = $this->action_update_dir_name($dir);
			mkdir("$updated_name", 0700);
		}
		echo json_encode($dir);
	}
	public function action_update_dir_name($file)
	{
		$dir = strrpos($file,'/');
		$dr  = substr($file,0,($dir+1)); 
		$arr = explode('/',$file);
		$fName = substr($arr[(count($arr) - 1)], 0);
		
		$exist = FALSE;
		$i = 2;
		
		while(!$exist)
		{
		  $file = $dr.$fName.'_'.$i;
		  
		  if(!is_dir($file))
			$exist = TRUE;
		  
		  $i++;
		}

		return $file;
	}
	
	public function action_delete_file()
	{
		$dir = Arr::get($_POST, 'dir', '');
		if(file_exists($dir))
				 unlink($dir);
		echo json_encode("ok");
	}
	public function action_delete_dir()
	{
		$directory = Arr::get($_POST, 'dir', '');
		$this->action_delete_directory($directory);
	}
	public function action_delete_directory($dir)
	{
		
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") 
					   $this->action_delete_directory($dir."/".$object); 
					else unlink   ($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
		echo json_encode("ok");
	}
	
	
	
	
	

}	