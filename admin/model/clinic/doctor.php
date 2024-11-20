<?php
class ModelClinicDoctor extends Model {
	public function addDoctor($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "doctor SET username = '" . $this->db->escape($data['username']) . "', description = '" . $this->db->escape($data['description']) . "', phone_number = '" . $this->db->escape($data['phone_number']) . "',specialization = '" . $this->db->escape($data['specialization']) . "'");
	}
	

    public function editDoctor($doctor_id, $data) {
		// Prepare update query for all fields including image
		$sql = "UPDATE `" . DB_PREFIX . "doctor` SET username = '" . $this->db->escape($data['username']) . "', description = '" . $this->db->escape($data['description']) . "', phone_number = '" . $this->db->escape($data['phone_number']) . "', specialization = '" . $this->db->escape($data['specialization']) . "'";
	
		$sql .= " WHERE doctor_id = '" . (int)$doctor_id . "'";
		$this->db->query($sql);
	}
	public function deleteDoctor($doctor_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "doctor WHERE doctor_id = '" . (int)$doctor_id . "'");
	}	
	public function getTotalDoctors() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "doctor");

		return $query->row['total'];
	}

    public function getDoctor($doctor_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "doctor` WHERE doctor_id = '" . (int)$doctor_id . "'");
        return $query->row;
    }
    public function getDoctors($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "doctor";

		if (!empty($data['filter_username'])) {
			$sql .= " WHERE username LIKE '" . $this->db->escape($data['filter_username']) . "%'";
		}

		$sort_data = array(
			'doctor_id',
			'image',
			'username',
			'subtitle',
			'parent_id'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY username";
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

	public function getdoctorToKeywords($doctor_id){
		$query = $this->db->query("SELECT `keyword_id`, (SELECT `name` FROM `".DB_PREFIX."keyword` k WHERE k.keyword_id = b2k.keyword_id) AS name FROM `".DB_PREFIX."doctor_to_keyword` b2k WHERE b2k.doctor_id = '".(int)$doctor_id."'");

		return $query->rows;
	}
}
