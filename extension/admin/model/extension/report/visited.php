<?php
class ModelExtensionReportVisited extends Model
{
    //creation de la table visited
    public function createTable()
    {
        $this->db->query(`CREATE TABLE IF NOT EXISTS ${DB_PREFIX}visited ( 
            'visited_id' int(11) NOT NULL,
            'url' varchar(150) DEFAULT NULL,
            'title' varchar(35) DEFAULT NULL,
            'date' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            'ip_address' varchar(15) DEFAULT NULL,
            'user_id' int(11) DEFAULT NULL,
            PRIMARY KEY (store_id))
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;`);
    }


    //Desinstalation de la table visited
    public function dropTable()
    {
        $this->db->query(`DROP TABLE ${DB_NAME}.${DB_PREFIX}visited`);
    }
}
