<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Us extends ORM
{
    protected $_table_name = 'users';
	protected $_primary_key = 'id';
	
	public function getUserId($username)
	{
		return $this->where('username', '=', $username)->find()->id;
	}
    
	public function getUsernameById($id)
	{
		return $this->where('id', '=', $id)->find()->username;
	}
	public function getFullNameById($id)
	{
		return $this->where('id', '=', $id)->find()->full_name;
	}
	public function getFullNameByUsername($username)
	{
		return $this->where('username', '=', $username)->find()->full_name;
	}
	public function getGenderById($id)
	{
		return $this->where('id', '=', $id)->find()->gender;
	}

	public function create_user($user)
	{
		$this->username = $user->getUsername();
		$this->email = $user->getUsername().'@mail.ru';
		$this->full_name = $user->getFullname();
		$this->password= $this->action_hpass($user->getUsername());
		$this->date_of_birth = $user->getDateOfBirth();
		$this->address = $user->getAddress();
		$this->documents = $user->getDocuments();
		$this->gender = $user->getGender();
		$this->create();
	}
	public function create_user_parent($user)
	{
		$this->username = $user->getUsername();
		$this->email = $user->getUsername().'@mail.ru';
		$this->password= $this->action_hpass($user->getUsername());
		$this->create();
	}
	public function action_hpass($pass)
	{
		$auth = Auth::instance();
		return $auth->hash_password($pass);
	}
	
	public function loginunique($login)
	{
		$res = $this->where('username', '=', $login)->find();
		if($res->loaded())
			return false;
		else
			return true;
	}
	public function deleteUser2($username)
	{
		$this->where('username', '=', $username)->find()->delete();
	}
	public function deleteUser($user_id)
	{
		$this->where('id', '=', $user_id)->find()->delete();
	}
	public function getUserIdByFullName($name)
	{
		return $this->where('full_name', '=', $name)->find()->id;
	}
	public function getUserAddressById($user_id)
	{
		return $this->where('id', '=', $user_id)->find()->address;
	}
	public function getUserDocsById($user_id)
	{
		return $this->where('id', '=', $user_id)->find()->documents;
	}
	public function getDateOfBirthById($user_id)
	{
		return $this->where('id', '=', $user_id)->find()->date_of_birth;
	}
	
	public function update_user($user, $user_id)
	{
		$username = $user->getUsername();
		$email = $user->getUsername().'@mail.ru';
		$full_name = $user->getFullname();
		$date_of_birth = $user->getDateOfBirth();
		$address = $user->getAddress();
		$documents = $user->getDocuments();
		$gender = $user->getGender();
		$this->where('id', '=', $user_id)
				->find()
				->set('username', $username)
				->set('full_name', $full_name)
				->set('documents', $documents)
				->set('address', $address)
				->set('date_of_birth', $date_of_birth)
				->set('email', $email)
				->set('gender', $gender)
				->update();
	}
	public function update_parent($user, $user_id)
	{
		$username = $user->getUsername();
		$email = $user->getUsername().'@mail.ru';
		$this->where('id', '=', $user_id)
				->find()
				->set('username', $username)
				->set('email', $email)
				->update();
	}
	public function checkPass($user_id, $pass)
	{
		if($this->action_hpass($pass) == $this->where('id', '=', $user_id)->find()->password)
			return true;
		else
			return false;
	}
	public function changePass($user_id, $newpass)
	{
		$this->where('id', '=', $user_id)->find()->set('password', $this->action_hpass($newpass))->update();
	}
	public function getBirthdays(){
		$all = DB::select()->from('users')->execute()->as_array();
		$res = array();
		foreach ($all as $a){
			if($a["full_name"]!="")
			{
				$b = $a["date_of_birth"];
				if((date('d', strtotime($b))==date('d', strtotime(date('Y-m-d'))))&&(date('m', strtotime($b))==date('m', strtotime(date('Y-m-d')))))
				{
					$role_id = ORM::factory('roleuser')->getUserRoleId($a["id"]);
					$r = new Role();
					$role = $r->getRoleRus($role_id);
					$res[] = array("name" => $a["full_name"], "role" => $role);
				}
			}
		}
		return $res;
	}
}