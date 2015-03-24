<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/4/14
 * Time: 8:14 AM
 */

class pagination extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general');
    }

    public function index(){

    }
} 