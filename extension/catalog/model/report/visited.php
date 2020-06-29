<?php
class ModelReportVisited extends Model {
/**
 * Ajoute une entrées dans la table 'visited'
 *
 * @param  string $title valeur du title de la page
 * @param  string $url Requeste URI de la page
 * @param  int $user_id Id du visiteur (0 si anonyme)
 * @param  string $ip_adresse Adresse IP du visiteur
 * @return void
 */
public function addVisited($title, $url ,$user_id, $ip_adresse) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "visited ( url,title,ip_address,user_id) VALUE ('$url', '$title', '$ip_adresse','$user_id');");   
    }
}