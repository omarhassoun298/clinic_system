<?php
class ModelCatalogFaq extends Model {
	public function addFaq($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "faq SET title = '" . $this->db->escape($data['title']) . "', text = '" . $this->db->escape($data['text']) . "', faq_category_id = '" . (int)$data['faq_category_id'] . "'");
	}
	
    
    
    public function editFaq($faq_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "faq SET title = '" . $this->db->escape($data['title']) . "', text = '" . $this->db->escape($data['text']) . "', faq_category_id = '" . (int)$data['faq_category_id'] . "' WHERE faq_id = '" . (int)$faq_id . "'");
    }

	public function deleteFaq($faq_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq WHERE faq_id = '" . (int)$faq_id . "'");
		$this->cache->delete('faq');
	}
	// ModelFaq.php

public function getTitleFaqCategory($faq_category_id) {
    $query = $this->db->query("SELECT title FROM " . DB_PREFIX . "faq_category WHERE faq_category_id = '" . (int)$faq_category_id . "'");

    if ($query->num_rows) {
        return $query->row['title'];
    } else {
        return '';
    }
}


    public function getFaq($faq_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq WHERE faq_id = '" . (int)$faq_id . "'");
        return $query->row;
    }

    public function getFaqs($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "faq";

        $sort_data = array(
            'title',
            'text',
            'faq_category_id'
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

    public function getTotalFaqs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq");
        return $query->row['total'];
    }
}
