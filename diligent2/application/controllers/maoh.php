<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 11:04 AM
 */
include 'main.php' ;
class maoh extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register');
    }

    public function index(){
        main::$sector = 5 ;
        main::$right_source = "sector/maoh/right" ;
        main::$school_full = "Meme Association of Orphanages and Homes" ;
        main::index() ;
    }
} 