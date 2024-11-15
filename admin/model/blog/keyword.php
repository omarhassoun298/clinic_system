<?php
class ModelBlogKeyword extends Model {
	public function addKeyword($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "keyword SET name = '" . $this->db->escape($data['name']) . "'");
	}
	

    public function editKeyword($keyword_id, $data) {

		$sql = "UPDATE " . DB_PREFIX . "keyword SET name = '" . $this->db->escape($data['name']) ."'  WHERE keyword_id = '" . (int)$keyword_id . "'";
			
		$this->db->query($sql);
	
	}
	
	public function getTotalKeywords() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "keyword");

		return $query->row['total'];
	}
	public function deleteKeyword($keyword_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "keyword WHERE keyword_id = '" . (int)$keyword_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_keyword WHERE keyword_id = '" . (int)$keyword_id . "'");

	}
	

    public function getKeyword($keyword_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "keyword` WHERE keyword_id = '" . (int)$keyword_id . "'");
        return $query->row;
    }
    public function getKeywords($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "keyword` WHERE 1";

		if (!empty($data['filter_name'])) {
			$sql .= " AND `name` LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		$sort_data = array(
			'keyword_id',
			'image',
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
