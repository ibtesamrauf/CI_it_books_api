<?php

class Books_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	function getData($data)
	{
		$this->db->select('*');
		$this->db->from('check');
		
		$query = $this->db->get();
		if ($query->num_rows()>0) 
		{
			# code...
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}

	function getBooksComments()
	{
		$this->db->select('*');
		$this->db->from('books_store_data_discussion');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows()>0) 
		{
			# code...
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}

	function getSingleBook($data)
	{
		$this->db->select('*');
		$this->db->from('books_store_data');
		$this->db->where($data);
		$query = $this->db->get();
		if ($query->num_rows()>0) 
		{
			# code...
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}

// $this->db->where("$accommodation BETWEEN $minvalue AND $maxvalue");
	function getDataFromKey($data)
	{
		$this->db->select('*');	
		$this->db->from('books_store_data');	
		$this->db->where($data);
		// $this->db->where("idii BETWEEN $start AND $end");
		// $this->db->where("$accommodation BETWEEN $minvalue AND $maxvalue");
		// $this->db->where('keyword', 'android');
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->result();
		}
	}

	function getKeyword1($data)
	{
		$this->db->select('*');	
		$this->db->from('books_store_keywords');	
		$this->db->where($data);
		// $this->db->where('keyword', 'android');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->result();
		}
	}

	function Data_Id_number($data)
	{
		$this->db->select('idii');	
		$this->db->from('books_store_data');	
		$this->db->where($data);
		// $this->db->where('keyword', 'android');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->result();
		}

	}

	function check_book_exist_id($data)
	{
		$this->db->select('*');	
		$this->db->from('books_store_data');	
		$this->db->where_in('ID',$data);
		// $this->db->where('keyword', 'android');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->result();
			return "Data exist";
		}
		else
		{
			// $array = array(
			// "keyword" => "nothing1111"
			// );
			// return 	array((object) $array);
			return "Not exist";
			
		}
	}

	function check_key_pg_books($data)
	{
		$this->db->select('*');	
		$this->db->from('books_store_data');	
		$this->db->where($data);
		// $this->db->where('keyword', 'android');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->result();
			// return "Data exist";
		}
		else
		{
			// $array = array(
			// "keyword" => "nothing1111"
			// );
			// return 	array((object) $array);
			return "Not exist";
			
		}
	}


	function check_keyword_exist($data)
	{
		$this->db->select('*');	
		$this->db->from('books_store_keywords');	
		$this->db->where($data);
		// $this->db->where('keyword', 'android');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->result();
		}
		else
		{
			$array = array(
			"keyword" => "nothing1111"
			);
			return 	array((object) $array);
		}
	}

	function saveKeywordData($data)
	{
		$this->db->insert('books_store_keywords',$data);
	}

	function saveBooksData($data)
	{
		$this->db->insert('books_store_data',$data);

		return ($this->db->affected_rows() != 1) ? false : true;

	}

	function saveBooksDiscussion($data)
	{
		$this->db->insert('books_store_data_discussion',$data);
	}
	
	
}
?>