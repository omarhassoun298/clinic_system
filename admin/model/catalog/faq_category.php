<?php
class ModelCatalogFaqCategory extends Model {
	public function addFaqCategory($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "faq_category SET title = '" . $this->db->escape($data['title']) . "', subtitle = '" . $this->db->escape($data['subtitle']) . "', image = '" . $this->db->escape($data['image']) . "', parent_id = '" . (int)$data['parent_id'] . "'");
	}
	

    public function editFaqCategory($faq_category_id, $data) {
		// Prepare update query for all fields including image
		$sql = "UPDATE " . DB_PREFIX . "faq_category SET 
				title = '" . $this->db->escape($data['title']) . "', 
				subtitle = '" . $this->db->escape($data['subtitle']) . "', 
				parent_id = '" . (int)$data['parent_id'] . "'";
	
		if (isset($data['image'])) {
			$sql .= ", image = '" . $this->db->escape($data['image']) . "'";
		}
	
		$sql .= " WHERE faq_category_id = '" . (int)$faq_category_id . "'";
		
		$this->db->query($sql);
	
		$this->cache->delete('faq_category');
	}
	
	public function getTotalFaqss($faq_category_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq WHERE faq_category_id = '" . (int)$faq_category_id . "'");

		return $query->row['total'];
	}
	public function deleteFaqCategory($faq_category_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq_category WHERE faq_category_id = '" . (int)$faq_category_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq WHERE faq_category_id = '" . (int)$faq_category_id . "'");
		$this->cache->delete('faq_category');
	}
	

    public function getFaqCategory($faq_category_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq_category WHERE faq_category_id = '" . (int)$faq_category_id . "'");
        return $query->row;
    }
    public function getFaqCategories($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "faq_category";

		if (!empty($data['filter_title'])) {
			$sql .= " WHERE title LIKE '" . $this->db->escape($data['filter_title']) . "%'";
		}

		$sort_data = array(
			'faq_category_id',
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
    
    public function getTotalFaqCategories() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq_category");
        return $query->row['total'];
    }
}
