<?php
class Migration_faqs extends CI_Model {

    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('sb2022', TRUE);
    }
}        

/* End of file */


