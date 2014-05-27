<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Maincontroller {

	public function action_index()
	{	
		$this->template->content = View::factory('main/main');
	}
	public function action_history()
	{
		$content = View::factory('main/history');
		$this->template->content = $content;
	}
	public function action_mission()
	{
		$content = View::factory('main/mission');
		$this->template->content = $content;
	}
	public function action_future()
	{
		$content = View::factory('main/future');
		$this->template->content = $content;
	}
	public function action_admission()
	{
		$content = View::factory('main/admission');
		$this->template->content = $content;
	}
	public function action_best_students()
	{
		$content = View::factory('main/best_students');
		$this->template->content = $content;
	}
	public function action_best_teachers()
	{
		$content = View::factory('main/best_teachers');
		$this->template->content = $content;
	}
	public function action_contacts()
	{
		$content = View::factory('main/contacts');
		$this->template->content = $content;
	}
}