<?php defined('SYSPATH') or die('No direct script access.');

class Parentclass
{	
	private $username;
	private $mot_full_name;
	private $fat_full_name;
	private $role_name;
	private $mot_addres;
	private $fat_addres;
	private $mot_job;
	private $fat_job;
	private $mot_date_of_birth;
	private $fat_date_of_birth;
	private $child_id;
	private $class_numb;
	private $class_let;
	
	
	public function __construct()
	{
	}
	
	public function setUsername($uname)
	{
		$this->username = $uname;
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
	
	public function getMotFullname()
	{
		return $this->mot_full_name;
	}
	
	public function setMotFullname($mfname)
	{
		$this->mot_full_name = $mfname;
	}
	public function getFatFullname()
	{
		return $this->fat_full_name;
	}
	
	public function setFatFullname($ffname)
	{
		$this->fat_full_name = $ffname;
	}
	public function getRolename()
	{
		return $this->role_name;
	}
	
	public function setRolename($rname)
	{
		$this->role_name = $rname;
	}
	public function getMotAddress()
	{
		return $this->mot_address;
	}
	
	public function setMotAddress($maddress)
	{
		$this->mot_address = $maddress;
	}
	public function getFatAddress()
	{
		return $this->fat_address;
	}
	
	public function setFatAddress($faddress)
	{
		$this->fat_address = $faddress;
	}
	public function getMotJob()
	{
		return $this->mot_job;
	}
	
	public function setMotJob($mjob)
	{
		$this->mot_job = $mjob;
	}
	public function getFatJob()
	{
		return $this->fat_job;
	}
	
	public function setFatJob($fjob)
	{
		$this->fat_job = $fjob;
	}
	public function getMotDateOfBirth()
	{
		return $this->mot_date_of_birth;
	}
	
	public function setMotDateOfBirth($m_date_of_birth)
	{
		$this->mot_date_of_birth = $m_date_of_birth;
	}
	public function getFatDateOfBirth()
	{
		return $this->fat_date_of_birth;
	}
	
	public function setFatDateOfBirth($f_date_of_birth)
	{
		$this->fat_date_of_birth = $f_date_of_birth;
	}
	public function getChild()
	{
		return $this->child_id;
	}
	public function setChild($child)
	{
		$this->child_id = $child;
	}
	public function getClassNumb()
	{
		return $this->class_numb;
	}
	public function setClassNumb($class_numb)
	{
		$this->class_numb = $class_numb;
	}
	public function getClassLet()
	{
		return $this->class_let;
	}
	public function setClassLet($class_let)
	{
		$this->class_let = $class_let;
	}
	
	
	
}