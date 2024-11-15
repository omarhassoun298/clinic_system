<?php
class ModelFaqFaq extends Model {
 
    public function getFaqById($faq_id) {
        $sql = "SELECT q.*, (SELECT title FROM `".DB_PREFIX."faq_category` WHERE faq_category_id = q.faq_category_id) AS parent_title, (SELECT title FROM `".DB_PREFIX."faq_category` WHERE faq_category_id = (SELECT parent_id FROM `".DB_PREFIX."faq_category` WHERE faq_category_id = q.faq_category_id)) AS grand_parent_title,(SELECT parent_id FROM `".DB_PREFIX."faq_category` WHERE faq_category_id = (SELECT faq_category_id FROM `".DB_PREFIX."faq_category` WHERE faq_category_id = q.faq_category_id)) AS grand_parent_id FROM " . DB_PREFIX . "faq q WHERE q.faq_id = '".$faq_id."'";

        $query = $this->db->query($sql);

        return $query->row;
    }
    public function getFaqByCategory($category_id) {

        $sql = "SELECT * FROM " . DB_PREFIX . "faq WHERE faq_category_id = '" . (int)$category_id . "'";
        
        $query = $this->db->query($sql);
        return $query->rows;
}
    
}