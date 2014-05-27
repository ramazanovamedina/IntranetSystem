<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Schedule extends ORM
{
    protected $_table_name = 'schedule';
	protected $_primary_key = 'id';
    
	public function create_record($array)
	{	
		$data = array('week_day' => $array[0], 'lesson_order' => $array[1], 'subject_id' => $array[2], 'teacher_id' => $array[3], 'class_id' => $array[4]);
		$this->where('week_day', '=', $array[0])
				->and_where('lesson_order', '=', $array[1])
				->and_where('class_id', '=', $array[4])->find()
				->values($data)
				->save();
	}
	public function delete_record($array)
	{	
	//	$data = array('week_day' => $array[0], 'lesson_order' => $array[1], 'subject_id' => $array[2], 'teacher_id' => $array[3], 'class_id' => $array[4]);
		$query = $this->where('week_day', '=', $array[0])
				->and_where('lesson_order', '=', $array[1])
				->and_where('class_id', '=', $array[4])->find();
		if($query->loaded())
			$query->delete();
	}
	public function getSubjectByDayAndOrder($week_day, $lesson_order, $class)
	{
		return $this->where('lesson_order', '=', $lesson_order)->and_where('week_day', '=', $week_day)->and_where('class_id', '=', $class)
					->find()->subject_id;
	}
	
	public function getTeacherByDayAndOrder($week_day, $lesson_order, $class)
	{
		return $this->where('lesson_order', '=', $lesson_order)->and_where('week_day', '=', $week_day)->and_where('class_id', '=', $class)
					->find()->teacher_id;
	}
	
	public function getSubjectByUserId($week_day, $lesson_order, $user_id)
	{
		return $this->where('lesson_order', '=', $lesson_order)->and_where('week_day', '=', $week_day)->and_where('teacher_id', '=', $user_id)
					->find()->subject_id;
	}
	
	public function getClassByTeacherId($week_day, $lesson_order, $teacher_id)
	{
		return $this->where('lesson_order', '=', $lesson_order)->and_where('week_day', '=', $week_day)->and_where('teacher_id', '=', $teacher_id)
					->find()->class_id;
	}
	
	public function getClassByTeacherAndSubject($teacher_id, $subject_id)
	{
		$result = DB::select('class_id')->from('schedule')->where('teacher_id', '=', $teacher_id)->and_where('subject_id', '=', $subject_id)->group_by('class_id')->execute()->as_array();
		return $result;
	
	}
	public function getWeekDays($subject_id, $teacher_id, $class)
	{
		return DB::select('week_day', 'lesson_order')->from('schedule')->where('teacher_id', '=', $teacher_id)->and_where('subject_id', '=', $subject_id)->and_where('class_id', '=', $class)->execute()->as_array();
	}
	public function getSubjectsByClass($class_id)
	{
		$result = DB::select('subject_id')->from('schedule')->where('class_id', '=', $class_id)->group_by('subject_id')->execute()->as_array();
		return $result;
	}
	public function getTeacherByClassAndSubject($class_id, $subject_id)
	{
		return $this->where('class_id', '=', $class_id)->and_where('subject_id', '=', $subject_id)->group_by('teacher_id')->find()->teacher_id;
	}
	
	
}