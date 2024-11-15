<?php
class ModelFaqCategory extends Model {
    public function getCategories() {
        $sql = "SELECT * FROM " . DB_PREFIX . "faq_category WHERE parent_id = '0'";

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getCategoryById($category_id) {
        $sql = "SELECT * FROM " . DB_PREFIX . "faq_category WHERE faq_category_id = '".$category_id."'";

        $query = $this->db->query($sql);

        return $query->row;
    }
    public function getSubCategoriesById($category_id) {
        $sql = "SELECT * FROM " . DB_PREFIX . "faq_category WHERE parent_id = '".$category_id."'";

        $query = $this->db->query($sql);

        return $query->rows;
    }
    public function getFaqByCategory($category_id) {

        $sql = "SELECT * FROM " . DB_PREFIX . "faq WHERE faq_category_id = '" . (int)$category_id . "'";
        
        $query = $this->db->query($sql);
        return $query->rows;
}
    
}