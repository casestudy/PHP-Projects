<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 2:52 PM
 */

class dba_model extends CI_Model{
    function __construct(){
        parent::__construct() ;
    }

    public function getPost(){
        $this->db->order_by("date" , "desc") ;
        $this->db->limit(1) ;
        $query = $this->db->get('dba_post') ;

        return $query ;
    }
} 