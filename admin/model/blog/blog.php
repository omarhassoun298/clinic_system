<?php
class ModelBlogBlog extends Model {
	public function addBlog($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "blog SET title = '" . $this->db->escape($data['title']) . "', content = '" . $this->db->escape($data['content']) . "', image = '" . $this->db->escape($data['image']) . "'");
		$blog_id = $this->db->getLastId();
		foreach ($data['blog_keyword'] as $keyword_id) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_keyword SET blog_id = '".(int)$blog_id."', keyword_id = '".$keyword_id."'");
		}
	}
	

    public function editBlog($blog_id, $data) {
		// Prepare update query for all fields including image
		$sql = "UPDATE `" . DB_PREFIX . "blog` SET title = '" . $this->db->escape($data['title']) . "', content = '" . $this->db->escape($data['content']) . "', status = '" . $this->db->escape($data['status']) . "'";

		if (isset($data['image'])) {
			$sql .= ", image = '" . $this->db->escape($data['image']) . "'";
		}
	
		$sql .= " WHERE blog_id = '" . (int)$blog_id . "'";
		
		$this->db->query($sql);

		$this->db->query("DELETE FROM `".DB_PREFIX."blog_to_keyword` WHERE blog_id = '".(int)$blog_id."'");
		
		foreach ($data['blog_keyword'] as $keyword_id) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_keyword SET blog_id = '".(int)$blog_id."', keyword_id = '".$keyword_id."'");
		}
	
	}
	public function deleteBlog($blog_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "blog WHERE blog_id = '" . (int)$blog_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_keyword WHERE blog_id = '" . (int)$blog_id . "'");
	}	
	public function getTotalBlogs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog");

		return $query->row['total'];
	}

    public function getBlog($blog_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog` WHERE blog_id = '" . (int)$blog_id . "'");
        return $query->row;
    }
    public function getBlogs($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "blog";

		if (!empty($data['filter_title'])) {
			$sql .= " WHERE title LIKE '" . $this->db->escape($data['filter_title']) . "%'";
		}

		$sort_data = array(
			'blog_id',
			'image',
			'title',
			'subtitle',
			'parent_id'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY title";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getBlogToKeywords($blog_id){
		$query = $this->db->query("SELECT `keyword_id`, (SELECT `name` FROM `".DB_PREFIX."keyword` k WHERE k.keyword_id = b2k.keyword_id) AS name FROM `".DB_PREFIX."blog_to_keyword` b2k WHERE b2k.blog_id = '".(int)$blog_id."'");

		return $query->rows;
	}
}
