<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 11:03 AM
 */
include 'main.php' ;
class dbs extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register');
    }

    public function index(){
        main::$sector = 3 ;
        main::$right_source = "sector/dbs/right";
        main::$school_full = "Diligent Bilingual School" ;
        main::index() ;
    }
} 