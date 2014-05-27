<?php defined('SYSPATH') or die('No direct script access.');

class Classes
{	
	public $classes = array("1а" => array(1, "а"), "1б" => array(1, "б"), "1в" => array(1, "в"), "1г" => array(1, "г"), "1д" => array(1, "д"),
							"2а" => array(2, "а"), "2б" => array(2, "б"), "2в" => array(2, "в"), "2г" => array(2, "г"), "2д" => array(2, "д"),
							"3а" => array(3, "а"), "3б" => array(3, "б"), "3в" => array(3, "в"), "3г" => array(3, "г"), "3д" => array(3, "д"),
							"4а" => array(4, "а"), "4б" => array(4, "б"), "4в" => array(4, "в"), "4г" => array(4, "г"), "4д" => array(4, "д"),
							"5а" => array(5, "а"), "5б" => array(5, "б"), "5в" => array(5, "в"), "5г" => array(5, "г"), "5д" => array(5, "д"),
							"6а" => array(6, "а"), "6б" => array(6, "б"), "6в" => array(6, "в"), "6г" => array(6, "г"), "6д" => array(6, "д"),
							"7а" => array(7, "а"), "7б" => array(7, "б"), "7в" => array(7, "в"), "7г" => array(7, "г"), "7д" => array(7, "д"),
							"8а" => array(8, "а"), "8б" => array(8, "б"), "8в" => array(8, "в"), "8г" => array(8, "г"), "8д" => array(8, "д"),
							"9а" => array(9, "а"), "9б" => array(9, "б"), "9в" => array(9, "в"), "9г" => array(9, "г"), "9д" => array(9, "д"),
							"10а" => array(10, "а"), "10б" => array(10, "б"), "10в" => array(10, "в"), "10г" => array(10, "г"), "10д" => array(10, "д"),
							"11а" => array(11, "а"), "11б" => array(11, "б"), "11в" => array(11, "в"), "11г" => array(11, "г"), "11д" => array(11, "д"));
							
	public function _construct()
	{
	}

	public function getAll()
	{
		return array_keys($this->classes);
	}
	
	public function getClassNumber($class)
	{
		return $this->classes[$class][0];
	}
	public function getClassLetter($class)
	{
		return $this->classes[$class][1];
	}
	
}