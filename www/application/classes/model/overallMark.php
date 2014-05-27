<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_OverallMark extends ORM
{
    protected $_table_name = 'overall_marks';
	protected $_primary_key = 'id';
	
	
	public function getMarks($user_id, $subject_id, $period, $date)
	{
		return $this->where('user_id', '=', $user_id)->and_where('subject_id', '=', $subject_id)->and_where('period', '=', $period)->and_where('date', '=', $date)->find()->mark;
	}
	
	public function create_record($user_id, $subject_id, $period, $date, $mark)
	{
		$data = array('user_id' => $user_id, 'subject_id' => $subject_id, 'period' => $period, 'date' => $date, 'mark' => $mark);
		$this->where('user_id', '=', $user_id)
				->and_where('subject_id', '=', $subject_id)
				->and_where('period', '=', $period)
				->and_where('date', '=', $date)->find()
				->values($data)
				->save();
	}
	public function delete_record($user_id, $subject_id, $date, $period)
	{
		$query = $this->where('user_id', '=', $user_id)
				->and_where('subject_id', '=', $subject_id)
				->and_where('period', '=', $period)
				->and_where('date', '=', $date)->find();
		if($query->loaded())
				$query->delete();
	}
}