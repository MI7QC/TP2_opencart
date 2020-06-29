<?php
class ModelReportTopfifteen extends Model {	
	/**
	 * Retourne l'url, le titre et le nombre de visites des 15 pages les plus visitées.
	 *
	 * @return array
	 */
	public function getTopFifteen() {
	
		$query = $this->db->query("SELECT `url`, `title`, count(title) AS nb_visite, title
        from " . DB_PREFIX . "visited
       group by url
       order by nb_visite desc
	   limit 15");
		return $query->rows;
	}
}
