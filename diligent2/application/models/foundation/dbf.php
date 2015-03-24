<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 11:48 AM
 */

//namespace application\models\foundation;


class dbf extends CI_Model{
    function __construct(){
        parent::__construct() ;
    }

    public function getPost(){
        $this->db->order_by("date" , "desc") ;
        $this->db->limit(1) ;
        $query = $this->db->get('foundation_post') ;

        return $query ;
    }
} 