<?php
class ModelCommonBroker extends Model {
	public function addbroker($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "broker SET title = '" . $this->db->escape($data['title']) . "', description = '" . $this->db->escape($data['description']) . "', url = '" . $this->db->escape($data['url']) . "',image = '" . $this->db->escape($data['image']) . "', type = '" . $this->db->escape($data['type']) . "', location = '" . $this->db->escape($data['location']) . "', status = '" . $this->db->escape($data['status']) . "'");
	}
	

    public function editbroker($broker_id, $data) {
		$sql = "UPDATE `" . DB_PREFIX . "broker` SET title = '" . $this->db->escape($data['title']) . "', description = '" . $this->db->escape($data['description']) . "', url = '" . $this->db->escape($data['url']) . "', type = '" . $this->db->escape($data['type']) . "', location = '" . $this->db->escape($data['location']) . "', status = '" . $this->db->escape($data['status']) . "'";

		if (isset($data['image'])) {
			$sql .= ", image = '" . $this->db->escape($data['image']) . "'";
		}
	
		$sql .= " WHERE broker_id = '" . (int)$broker_id . "'";
		
		$this->db->query($sql);
	
	}
	public function deletebroker($broker_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "broker WHERE broker_id = '" . (int)$broker_id . "'");
	}	
	public function getTotalBrokers() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "broker");

		return $query->row['total'];
	}

    public function getBroker($broker_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "broker` WHERE broker_id = '" . (int)$broker_id . "'");
        return $query->row;
    }
    public function getBrokers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "broker";

		if (!empty($data['filter_title'])) {
			$sql .= " WHERE title LIKE '" . $this->db->escape($data['filter_title']) . "%'";
		}

		$sort_data = array(
			'broker_id',
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


}
