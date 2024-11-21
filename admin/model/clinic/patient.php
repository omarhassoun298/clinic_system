<?php
class ModelClinicPatient extends Model {
	public function addPatient($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "patient SET name = '" . $this->db->escape($data['name']) . "', description = '" . $this->db->escape($data['description']) . "', telephone = '" . $this->db->escape($data['telephone']) . "',email = '" . $this->db->escape($data['email']) . "',gender = '" . $this->db->escape($data['gender']) . "', diagnosis = '" . $this->db->escape($data['diagnosis']) . "', address = '" . $this->db->escape($data['address']) . "', doctor = '" . $this->db->escape($data['doctor']) . "'");
	}
	

    public function editPatient($patient_id, $data) {
		// Prepare update query for all fields including image
		$sql = "UPDATE `" . DB_PREFIX . "patient` SET name = '" . $this->db->escape($data['name']) . "', description = '" . $this->db->escape($data['description']) . "', telephone = '" . $this->db->escape($data['telephone']) . "',email = '" . $this->db->escape($data['email']) . "',gender = '" . $this->db->escape($data['gender']) . "', diagnosis = '" . $this->db->escape($data['diagnosis']) . "', address = '" . $this->db->escape($data['address']) . "', doctor = '" . $this->db->escape($data['doctor']) . "', updated_date = NOW()";
	
		$sql .= " WHERE patient_id = '" . (int)$patient_id . "'";
		$this->db->query($sql);
	}
	public function deletePatient($patient_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "patient WHERE patient_id = '" . (int)$patient_id . "'");
	}	
	public function getTotalPatients($data = array()) {
       $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "patient WHERE 1";

		if (!empty($data['filter_name'])) {
			$sql .= " AND `name` LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		if (!empty($data['filter_telephone'])) {
			$sql .= " AND telephone LIKE '" . $this->db->escape($data['filter_telephone']) . "%'";
		}
		$query = $this->db->query($sql);
		return $query->row['total'];
	}

    public function getPatient($patient_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "patient` WHERE patient_id = '" . (int)$patient_id . "'");
        return $query->row;
    }
    public function getPatients($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "patient WHERE 1";

		if (!empty($data['filter_name'])) {
			$sql .= " AND `name` LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		if (!empty($data['filter_telephone'])) {
			$sql .= " AND telephone LIKE '" . $this->db->escape($data['filter_telephone']) . "%'";
		}


		$sort_data = array(
			'patient_id',
			'image',
			'name',
			'parent_id'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
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
