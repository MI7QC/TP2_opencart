<?php
class ModelReportTopfifteen extends Model {
	public function getStatistics() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "statistics");

		return $query->rows;
	}
}
