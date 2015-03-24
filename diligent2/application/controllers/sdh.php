<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 11:03 AM
 */
include 'main.php' ;
class sdh extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register');
    }

    public function index(){
        main::$sector = 4 ;
        main::$right_source = "sector/sdh/right" ;
        main::$school_full = "St.Anthony's Guild Diligent Home" ;
        main::index() ;
    }
} 