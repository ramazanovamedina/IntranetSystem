<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Roleuser extends ORM
{
    protected $_table_name = 'roles_users';
	protected $_primary_key = 'user_id';
    
	public function getUserRoleId($user_id)
	{
		return $this->where('user_id', '=', $user_id)
					 ->where('role_id', '!=', 1)
					 ->find()->role_id;
	}
	
	
	public function create_user_role($username, $role)
	{
		$rol = new Role();	
		$user_id = Model::factory('us')->getUserId($username);
		$query = DB::insert('roles_users', array('user_id', 'role_id'));
		$data = array();
		$data[] = array($user_id, 1);
		$data[] = array($user_id, array_search($role, $rol->getRolesArray()));
		foreach($data as $d)
			$query->values($d);
		$result = $query->execute();
	
	}
	
	public function getUsersIdByRoleId($role_id)
	{
		return $this->where('role_id', '=', $role_id)->find();
	}
	
	
	public function getAllUsersByRoleId($role_id)
	{
		return $this->where('role_id', '=', $role_id)
				->find_all();
	
		
		
	}
	
	
}