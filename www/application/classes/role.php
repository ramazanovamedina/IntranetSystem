<?php defined('SYSPATH') or die('No direct script access.');

class Role
{	
	public $a = array(2 => "admin", 3 => "student",  4 => "parent",  5 => "teacher",  6 => "or", 7 => "director");
	public $rus = array(2 => "администратор", 3 => "ученик", 4 => "родитель", 5 => "учитель", 6 => "сотрудник офиса регистратора", 7 => "директор");
	public $p = array(2 => array("admin", "student", "parent", "teacher", "or"),
					  3 => array("student", "parent"),
					  4 => array("parent", "student"),
					  5 => array("teacher", "or"),
					  6 => array("or", "student", "teacher"),
					  7 => array("director", "or", "student", "teacher")
					  );
					  
	public function _construct()
	{
	}
	
	public function getRolesArray()
	{
		return $this->a;
	}
	public function getRoleRus($id)
	{
		return $this->rus[$id];
	}
	
	public function getNameById($id)
	{
		return $this->a[$id];
	}
	
	public function getAll()
	{
		return $this->a;
	}
	
	public function getPermission($id)
	{
		return $this->p[$id];
	}
	
	public function getRoleId($role_name)
	{
		return array_search($role_name, $this->getRolesArray());
	}
	
}