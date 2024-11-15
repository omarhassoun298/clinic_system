<?php
class ModelBlogBlog extends Model {
	public function getTotalBlogs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog WHERE status = 1");

		return $query->row['total'];
	}

    public function getBlog($blog_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog` WHERE blog_id = '" . (int)$blog_id . "' AND status = 1");
        return $query->row;
    }
    public function getBlogs($data = array()) {
		$sql = "SELECT blog_id, title, `image`,content FROM " . DB_PREFIX . "blog WHERE status = 1";
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
			$sql .= " ORDER BY blog_id";
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

	public function getKeywords($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "keyword` WHERE 1 ";

		if (!empty($data['filter_name'])) {
			$sql .= " AND `name` LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		$sort_data = array(
			'keyword_id',
			'name'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY keyword_id";
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

}