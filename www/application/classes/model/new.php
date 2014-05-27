<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_New extends ORM
{
    protected $_table_name = 'news';
	protected $_primary_key = 'news_id';
	
	public function addnews($author_id, $title, $content, $content_short, $date)
	{
		$this->title = $title;
		$this->content_full = $content;
		$this->content_short = $content_short;
		$this->author_id = $author_id;		
		$this->post_date = $date;
		$this->create();
	}
	
	public function getMyNews($author_id)
	{
		return $this->where('author_id', '=', $author_id)->order_by('post_date', 'DESC')->find_all();
	}
	
    public function getAuthorIdByNewsId()
	{
		return $this->author_id;
	}
	
	public function deleteById()
	{
		$this->delete();
	}
	
	public function updateNews($id, $title, $content, $content_short)
	{
		$data = array('title'=>$title, 'content_full'=>$content, 'content_short'=>$content_short);
		$this->values($data)->update();	
	
	}
	
	public function getTitleById()
	{
		return $this->title;
	}
	
	public function getTextById()
	{
		return $this->content_full;
	}
	
	
	
}