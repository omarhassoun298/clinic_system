<?php
class ModelRestBroker extends Model {
	public function getBrokers($data = array()){
        $sql=" SELECT * FROM ".DB_PREFIX."broker WHERE status = 1 ";

		if (isset($data['filter_title']) ) {
			$sql .= " AND title LIKE '%" . $this->db->escape($data['filter_title']) . "%'"	;
		}

		if (isset($data['sort']) ) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY broker_id";
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

    public function getBroker($broker_id){
        $sql=" SELECT * FROM ".DB_PREFIX."broker WHERE broker_id = '".(int)$broker_id."' AND status = 1";
        $query = $this->db->query($sql);

		return $query->row;

    }

	public function getTotalBrokers($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "broker WHERE status = 1";

		if (isset($data['filter_title']) ) {
			$sql .= " AND title LIKE '%" . $this->db->escape($data['filter_title']) . "%'"	;
		}
		$query = $this->db->query($sql);
		return $query->row['total'];
	}
}
