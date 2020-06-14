<?php
class ModelReportVisited extends Model {
public function addVisited($title, $url ,$user_id, $ip_adresse) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "visited ( url,title,ip_address,user_id) VALUE ('$url', '$title', '$ip_adresse','$user_id');");   
    }
}