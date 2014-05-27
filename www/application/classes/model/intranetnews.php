<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Intranetnews extends ORM
{
    protected $_table_name = 'intranet_news';
	protected $_primary_key = 'news_id';
   
   public function addnews($author_id, $title, $content, $content_short, $date, $res)
   {
		$this->title = $title;
		$this->content_full = $content;
		$this->content_short = $content_short;
		$this->author_id = $author_id;		
		$this->post_date = $date;
		$this->reciever = $res;
		$this->create();
   }
   public function getnews($res)
   {
		return $this->where('reciever', '=', $res)->order_by('post_date', 'DESC')->find_all();
   }
   public function getAllNews()
   {
		return $this->group_by('post_date')->order_by('post_date', 'DESC')->find_all();
   }
   public function getAuthorIdByNewsId()
   {
		return $this->author_id;
   }
   public function getMyNews($author_id)
   {
		return $this->where('author_id', '=', $author_id)->group_by('post_date')->order_by('post_date', 'DESC')->find_all();
   }
   public function deleteById()
	{
		$this->delete();
	}
	
	public function updateNews($id, $title, $cont, $content_short, $author_id, $post_date)
	{
		$data = array('title'=>$title, 'content_full'=>$cont, 'content_short'=>$content_short);
		$results = $this->where('author_id', '=', $author_id)->and_where('post_date', '=', $post_date)->find_all();
		foreach($results as $res)
			$res->values($data)->update();	
	
	}
	public function getTitleById()
	{
		return $this->title;
	}
	
	public function getTextById()
	{
		return $this->content_full;
	}
	public function getPostDateByNewsId()
	{
		return $this->post_date;
	}
	
	
}