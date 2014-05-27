<?php defined('SYSPATH') or die('No direct script access.');

class Birthdate
{	
	public $months = array();
	
	public $years = array();
	
		
	public $days = array();

	public function __construct()
	{
		for($i = 1970; $i <= 2020; $i++)
			$this->years[] = $i;
		for($i = 01; $i <= 31; $i++)
			$this->days[] = $i;
		for($i = 01; $i <= 12; $i++)
			$this->months[] = $i;
	}

	public function getYears()
	{	
		return $this->years;
	}
	public function getMonths()
	{
		return $this->months;
	}
	public function getDays()
	{	
		return $this->days;
	}
	
	
	
}