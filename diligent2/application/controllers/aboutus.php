<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/5/14
 * Time: 1:52 PM
 */
include 'main.php' ;
class aboutus extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
    }

    public function about($page){
        main::$left = true ;
        main::$right = true ;
        main:: $middle_class = "" ;
        main::$view_source = "aboutus/".$page ;
        main::index() ;
    }

    public function community($page){
        main::$left = true;
        main::$right = true ;
        main::$middle_class = "" ;
        main::$view_source = "community/".$page;
        main::index() ;
    }
} 