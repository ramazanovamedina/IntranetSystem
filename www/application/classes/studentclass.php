<?php defined('SYSPATH') or die('No direct script access.');

class Studentclass
{	
	private $username;
	private $full_name;
	private $role_id;
	private $role_name;
	private $addres;
	private $documents;
	private $date_of_birth;
	private $class_number;
	private $class_letter;
	private $gender;
	
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
	
	public function getFullname()
	{
		return $this->full_name;
	}
	
	public function setFullname($fname)
	{
		$this->full_name = $fname;
	}
	public function getRolename()
	{
		return $this->role_name;
	}
	
	public function setRolename($rname)
	{
		$this->role_name = $rname;
	}
	public function getAddress()
	{
		return $this->address;
	}
	
	public function setAddress($address)
	{
		$this->address = $address;
	}
	public function getDocuments()
	{
		return $this->documents;
	}
	
	public function setDocuments($docs)
	{
		$this->documents = $docs;
	}
	public function getClassNumber()
	{
		return $this->class_number;
	}
	
	public function setClassNumber($clnum)
	{
		$this->class_number= $clnum;
	}
	public function getClassLetter()
	{
		return $this->class_letter;
	}
	
	public function setClassLetter($cletter)
	{
		$this->class_letter = $cletter;
	}
	public function getDateOfBirth()
	{
		return $this->date_of_birth;
	}
	
	public function setDateOfBirth($date_of_birth)
	{
		$this->date_of_birth = $date_of_birth;
	}
	public function getGender()
	{
		return $this->gender;
	}
	
	public function setGender($gender)
	{
		$this->gender = $gender;
	}
	
	
}