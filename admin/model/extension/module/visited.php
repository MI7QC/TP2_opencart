<?php
class ModelExtensionModuleVisited extends Model
{
    //creation de la table visited
    public function createTable() 
    { 
    $this->db->query("CREATE TABLE IF NOT EXISTS ".DB_PREFIX."visited ( visited_id INT NOT NULL AUTO_INCREMENT, url VARCHAR(150), title VARCHAR(35), date TIMESTAMP, ip_address VARCHAR(15), user_id INT, PRIMARY KEY (visited_id))");}

    
    //Desinstalation de la table visited
    public function dropTable()
    {$this->db->query("DROP TABLE ".DB_PREFIX."visited");} 
}