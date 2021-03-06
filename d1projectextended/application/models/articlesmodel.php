<?php
class Articlesmodel extends CI_Model{
	public function articles_list(){

		$user_id = $this->session->userdata('user_id');
		$query = $this->db
					  ->select(['title','id'])
					  ->from('articles')
					  ->where('user_id',$user_id)
					  ->get();

						
						return ($query->result());
	}
	public function add_articles($array){
		return ($this->db->insert('articles',$array));
	}
	public function find_articles($article_id){
		$q=  $this->db
			->select(['id','title','body'])
			->where('id',$article_id)
			->get('articles');
		return ( $q->row() );
	}
	public function update_articles($article_id,Array $article){
		return ($this->db
			->where('id',$article_id)
			->update('articles',$article));


	}
	public function delete_articles($article_id){
		return ($this->db->delete('articles',['id'=>$article_id]));
	}
}