<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/14/14
 * Time: 9:37 PM
 */
include 'main.php' ;
class resource extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register') ;
    }

    public function download(){
        main::$sector = 6 ;
        main::$right_source = "resources/download/right" ;
        main::index() ;
    }

    public function comment(){
        if($this->general->setDownloadsComment())
            redirect($this->session->userdata('prev')) ;
        else
            $this->load->view('templates/error') ;
    }
} 