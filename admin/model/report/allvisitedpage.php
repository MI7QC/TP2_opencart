<?php
class ModelReportAllvisitedpage extends Model {
	public function getAllVisitedPage() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "visited");

		return $query->rows;
	}
	
}
