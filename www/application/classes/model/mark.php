<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Mark extends ORM
{
    protected $_table_name = 'marks';
	protected $_primary_key = 'id';
	
	
	public function getMarks($user_id, $subject_id, $date, $order_id)
	{
		return $this->where('user_id', '=', $user_id)->and_where('subject_id', '=', $subject_id)->and_where('date', '=', $date)->and_where('order_id', '=', $order_id)->find()->mark;
	}
	
	public function create_record($user_id, $subject_id, $date, $order_id, $mark)
	{
		$data = array('user_id' => $user_id, 'subject_id' => $subject_id, 'date' => $date, 'order_id' => $order_id, 'mark' => $mark);
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
	public function addComment($user_id, $date, $order, $subject_id, $comment)
	{
		$data = array('user_id' => $user_id, 'subject_id' => $subject_id, 'date' => $date, 'order_id' => $order, 'comment' => $comment);
		$this->where('user_id', '=', $user_id)
				->and_where('subject_id', '=', $subject_id)
				->and_where('order_id', '=', $order)
				->and_where('date', '=', $date)
				->find()
				->values($data)
				->save();
		
	}
	
	public function getComment($user_id, $subject_id, $order, $date)
	{
		return $this->where('user_id', '=', $user_id)
					->and_where('subject_id', '=', $subject_id)
					->and_where('order_id', '=', $order)
					->and_where('date', '=', $date)
					->find()
					->comment;
	}
}