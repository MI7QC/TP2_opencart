<?php
class ModelReportTopfifteen extends Model {
	public function getTopFifteen() {
	
		$query = $this->db->query("SELECT *, count(title) AS nb_visite, title
        from " . DB_PREFIX . "visited
       group by url
       order by count(title) desc
	   limit 15");
		return $query->rows;
	}
}
