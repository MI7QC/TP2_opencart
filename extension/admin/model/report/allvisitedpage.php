<?php
class ModelReportAllvisitedpage extends Model {	
	/**
	 * Retourne tout le contenu de la table 'visited'
	 *
	 * @return array 
	 */
	public function getAllVisitedPage() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "visited");

		return $query->rows;
	}
	
}
