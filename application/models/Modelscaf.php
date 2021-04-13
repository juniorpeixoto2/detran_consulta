<?php

/**
 * Model that represents Areceber at database
 * */
class Modelscaf extends CI_Model {

    /**
     * Model Fields	
     * */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Persist object
     * */
    public function teste($db1) {

    
        $db2 = $this->load->database($db, TRUE);
        $tables = $db2->list_tables();
        $tabelas = array();

        foreach ($tables as $table) {
            //echo $table;
            $tabelas[] = $table;
        }

        return $tabelas;
    }

}
