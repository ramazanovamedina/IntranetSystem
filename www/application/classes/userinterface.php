<?php defined('SYSPATH') or die('No direct script access.');

interface Userinterface
{
	public function action_create_user();
	public function action_delete_user();
	public function action_update_user();
}