<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Subject extends ORM
{
    protected $_table_name = 'subjects';
	protected $_primary_key = 'id';
	
	public function getAll()
	{
		$query = DB::select('subject_name')->from('subjects')->execute()->as_array();
		$res = array();
		foreach ($query as $row){
			$res[] = $row["subject_name"];
		}
		return $res;		
	
	}
	public function getSubjectIdByName($subject_name)
	{
		return $this->where('subject_name', '=', $subject_name)->find()->id;
	}
	public function getSubjectNameById($subject_id)
	{
		return $this->where('id', '=', $subject_id)->find()->subject_name;
	}
	
	
}