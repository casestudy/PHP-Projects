<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 11:03 AM
 */
include 'main.php' ;
class dba extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register');
    }

    public function index(){
        main::$sector = 2 ;
        main::$right_source = "sector/dba/right" ;
        main::$school_full = "Diligent Bilingual Academy" ;
        main::index() ;
    }


}