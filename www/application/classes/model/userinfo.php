<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Userinfo extends ORM
{
    protected $_table_name = 'user_info';
	protected $_primary_key = 'id';
	


	public function create_student_info($student)
	{	
		$user_id = ORM::factory('us')->getUserId($student->getUsername());
		$query = DB::insert('user_info', array('user_id', 'key', 'value'));
		$data = array();
		$data[] = array($user_id, 'class_number', $student->getClassNumber());
		$data[] = array($user_id, 'class_letter', $student->getClassLetter());
		foreach($data as $d) 
			$query->values($d);
		$result = $query->execute();		
	}

	public function create_parent_info($parent)
	{
		
		$user_id = Model::factory('us')->getUserId($parent->getUsername());
		$query = DB::insert('user_info', array('user_id', 'key', 'value'));
		$data = array();
		$data[] = array($user_id, 'mother_name', $parent->getMotFullname());
		$data[] = array($user_id, 'mother_birthday', $parent->getMotDateOfBirth());
		$data[] = array($user_id, 'mother_address', $parent->getMotAddress());
		$data[] = array($user_id, 'mother_job', $parent->getMotJob());
		$data[] = array($user_id, 'father_name', $parent->getFatFullname());
		$data[] = array($user_id, 'father_birthday', $parent->getFatDateOfBirth());
		$data[] = array($user_id, 'father_address', $parent->getFatAddress());
		$data[] = array($user_id, 'father_job', $parent->getFatJob());
		$data[] = array($user_id, 'child_id', $parent->getChild());
		$data[] = array($user_id, 'child_class_number', $parent->getClassNumb());
		$data[] = array($user_id, 'child_class_letter', $parent->getClassLet());
		foreach($data as $d) 
			$query->values($d);
		$result = $query->execute();
	}
	
	public function getStudentIdByClass($class_numb, $class_let)
	{
		$students = DB::select('user_id')->from('user_info')->where('key', '=', 'class_number')->and_where('value', '=', $class_numb)
										->execute()->as_array();
		$students2 = array();
		
		for($i=0;$i<count($students);$i++)
		{
			$query = DB::select('user_id')->from('user_info')->where('user_id', '=', $students[$i])
							->and_where('key', '=', 'class_letter')
							->and_where('value', '=', $class_let)->execute()->as_array();
			if($query)
				$students2[] = $query;
		}
		return $students2;								
	}
	public function getParentIdByClass($class_numb, $class_let)
	{
		$parents = DB::select('user_id')->from('user_info')->where('key', '=', 'child_class_number')->and_where('value', '=', $class_numb)
										->execute()->as_array();
		$parents2 = array();
		
		for($i=0;$i<count($parents);$i++)
		{
			$query = DB::select('user_id')->from('user_info')->where('user_id', '=', $parents[$i])
							->and_where('key', '=', 'child_class_letter')
							->and_where('value', '=', $class_let)
							->execute()->as_array();
			if($query)
				$parents2[] = $query;
		}
	
		return $parents2;								
	}

	public function deleteUser($user_id)
	{
		$results = $this->where('user_id', '=', $user_id)->find_all();
		foreach($results as $result)
			$result->delete();
	}
	
	
	public function getParentIdbyStudentId($student_id)
	{
		return $this->where('key', '=', 'child_id')->and_where('value', '=', $student_id)->find()->user_id;
	}
	
	public function getClassNumbById($student_id)
	{
		return $this->where('user_id', '=', $student_id)->and_where('key', '=', 'class_number')->find()->value;
	}
	public function getClassLetById($student_id)
	{
		return $this->where('user_id', '=', $student_id)->and_where('key', '=', 'class_letter')->find()->value;
	}
	public function update_student($student, $student_id)
	{
		$class_numb = $student->getClassNumber();
		$class_let = $student->getClassLetter();
		
		$query = DB::update('user_info')
				->set(array('value'=>$class_numb))
				->where('user_id', '=', $student_id)->and_where('key', '=', 'class_number')
				->execute();
		$query2 = DB::update('user_info')
				->set(array('value'=>$class_let))
				->where('user_id', '=', $student_id)->and_where('key', '=', 'class_letter')
				->execute();
		$parent_id = $this->getParentIdbyStudentId($student_id);
		$query3 = DB::update('user_info')
				->set(array('value'=>$class_numb))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'child_class_number')
				->execute();
		$query4 = DB::update('user_info')
				->set(array('value'=>$class_let))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'child_class_letter')
				->execute();
		
	}
	
	public function getChildIdByParentId($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'child_id')->find()->value;
	}
	
	public function getMotFullNameById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_name')->find()->value;
	}
	public function getFatFullNameById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_name')->find()->value;
	}
	public function getMotAddressById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_address')->find()->value;
	}
	public function getFatAddressById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_address')->find()->value;
	}
	public function getMotJobById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_job')->find()->value;
	}
	public function getFatJobById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_job')->find()->value;
	}
	public function getMotDateOfBirthById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_birthday')->find()->value;
	}
	public function getFatDateOfBirthById($parent_id)
	{
		return $this->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_birthday')->find()->value;
	}
	public function update_parent($parent, $parent_id)
	{
		$mot_full_name = $parent->getMotFullname();
		$mot_address = $parent->getMotAddress();
		$mot_job = $parent->getMotJob();
		$mot_date_of_birth = $parent->getMotDateOfBirth();
		$fat_full_name = $parent->getFatFullname();
		$fat_address = $parent->getFatAddress();
		$fat_job = $parent->getFatJob();
		$fat_date_of_birth = $parent->getFatDateOfBirth();
		
		$query = DB::update('user_info')
				->set(array('value'=>$mot_full_name))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_name')
				->execute();
		$query2 = DB::update('user_info')
				->set(array('value'=>$mot_address))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_address')
				->execute();
		$query3 = DB::update('user_info')
				->set(array('value'=>$mot_job))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_job')
				->execute();
		$query4 = DB::update('user_info')
				->set(array('value'=>$mot_date_of_birth))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'mother_birthday')
				->execute();
		$query5 = DB::update('user_info')
				->set(array('value'=>$fat_full_name))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_name')
				->execute();
		$query6 = DB::update('user_info')
				->set(array('value'=>$fat_address))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_address')
				->execute();
		$query7 = DB::update('user_info')
				->set(array('value'=>$fat_job))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_job')
				->execute();
		$query8 = DB::update('user_info')
				->set(array('value'=>$fat_date_of_birth))
				->where('user_id', '=', $parent_id)->and_where('key', '=', 'father_birthday')
				->execute();
		
	}
	public function create_teacher_info($teacher, $subject_id)
	{
		$this->user_id = ORM::factory('us')->getUserId($teacher->getUsername());
		$this->key = "teacher_subject";
		$this->value = $subject_id;
		$this->create();
	}
	public function getTeachersBySubject($subject_id)
	{
		return $this->where('key', '=', 'teacher_subject')->and_where('value', '=', $subject_id)->group_by('user_id')->find_all();
	}
	
	public function getTeacherSubjectsById($teacher_id)
	{
		$result = DB::select('value')->from('user_info')->where('user_id', '=', $teacher_id)->and_where('key', '=', 'teacher_subject')
										->execute()->as_array();
		$res = array();
		foreach($result as $r){
			$res[] = ORM::factory('subject')->getSubjectNameById($r["value"]);
		}
		return $res;
	}
	public function update_teacher($teacher_id)
	{
		$result = $this->where('user_id', '=', $teacher_id)->and_where('key', '=', 'teacher_subject')->find_all();
		foreach($result as $res)
			$res->delete();
	}
}