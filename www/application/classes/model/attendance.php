<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Attendance extends ORM
{
    protected $_table_name = 'attendance';
	protected $_primary_key = 'id';
	
	
	public function getAttend($user_id, $subject_id, $date, $order_id)
	{
		return $this->where('user_id', '=', $user_id)->and_where('subject_id', '=', $subject_id)->and_where('date', '=', $date)->and_where('order_id', '=', $order_id)->find()->status;
	}
	
	public function create_record($user_id, $subject_id, $date, $order_id, $status)
	{
		$data = array('user_id' => $user_id, 'subject_id' => $subject_id, 'date' => $date, 'order_id' => $order_id, 'status' => $status);
		$this->where('user_id', '=', $user_id)
				->and_where('subject_id', '=', $subject_id)
				->and_where('date', '=', $date)
				->and_where('order_id', '=', $order_id)->find()
				->values($data)
				->save();
	}
	public function delete_record($user_id, $subject_id, $date, $order_id)
	{
		$query = $this->where('user_id', '=', $user_id)
				->and_where('subject_id', '=', $subject_id)
				->and_where('date', '=', $date)
				->and_where('order_id', '=', $order_id)->find();
		if($query->loaded())
				$query->delete();
	}
}