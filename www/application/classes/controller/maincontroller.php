<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Maincontroller extends Controller_Template {
 
    public $template = 'mainview';
 
    public function before()
    {
		parent::before();
    }
 
} 