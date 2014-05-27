<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Homework extends ORM
{
    protected $_table_name = 'homework';
	protected $_primary_key = 'id';
	
	
	public function getData($subject_id, $teacher_id, $class_id, $date, $order_id)
	{
		return $this->where('subject_id', '=', $subject_id)->and_where('teacher_id', '=', $teacher_id)->and_where('class_id', '=', $class_id)->and_where('date', '=', $date)->and_where('order_id', '=', $order_id)->find()->homework;
	}
	public function getHomework($subject_id, $class_id, $date, $order_id)
	{
		return $this->where('subject_id', '=', $subject_id)->and_where('class_id', '=', $class_id)->and_where('date', '=', $date)->and_where('order_id', '=', $order_id)->find()->homework;
	}
	public function create_record($subject_id, $teacher_id, $class_id, $date, $order_id, $homework)
	{
		$data = array('subject_id' => $subject_id, 'teacher_id' => $teacher_id, 'class_id' => $class_id, 'date' => $date, 'order_id' => $order_id, 'homework' => $homework);
		$this->where('subject_id', '=', $subject_id)
				->and_where('teacher_id', '=', $teacher_id)
				->and_where('class_id', '=', $class_id)
				->and_where('date', '=', $date)
				->and_where('order_id', '=', $order_id)->find()
				->values($data)
				->save();
	}
	public function delete_record($subject_id, $teacher_id, $class_id, $date, $order_id)
	{
		$query = $this->where('subject_id', '=', $subject_id)
				->and_where('teacher_id', '=', $teacher_id)
				->and_where('class_id', '=', $class_id)
				->and_where('date', '=', $date)
				->and_where('order_id', '=', $order_id)->find();
		if($query->loaded())
				$query->delete();
	}
}