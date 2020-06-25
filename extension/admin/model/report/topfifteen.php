<?php
class ModelReportTopfifteen extends Model {
	public function getTopFifteen() {
	
		$query = $this->db->query("SELECT `url`, `title`, count(title) AS nb_visite, title
        from " . DB_PREFIX . "visited
       group by url
       order by nb_visite desc
	   limit 15");
		return $query->rows;
	}
}
