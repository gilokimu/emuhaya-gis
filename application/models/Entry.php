<?php

/**
 * Description of Location
 *
 * @author John Kiragu
 */
class Entry extends CI_Model {
 
    private $table="entries";
    public function __construct() {
        
        parent::__construct();
        $this->load->model('Database');
    }

}
