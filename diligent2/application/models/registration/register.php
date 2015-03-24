<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/2/14
 * Time: 8:13 PM
 */

//namespace application\models\registration;


class register extends CI_Model{
    function __construct(){
        parent::__construct() ;
    }

    public function login(){
        $where = array(
            'email' => $this->input->post('email' , true),
            'password' => do_hash($_POST['password'] , 'md5')
        );
        $query = $this->db->get_where('accounts' , $where) ;

        if($query->num_rows() > 0)
            return true ;
        return false ;
    }

    public function getCategory(){
        $this->db->select('category') ;
        $query = $this->db->get_where('accounts' , array('email' => $this->input->post('email' , true)))->row_array() ;
        $cat = array_values($query) ;
        return $cat ;
    }

    public function getAccountsID(){
        $this->db->select('id') ;
        $this->db->order_by("id" , "desc") ;
        $this->db->limit(1) ;
        $query = $this->db->get('accounts')->row_array() ;
        $id = array_values($query) ;
        return (int)$id[0] ;
    }

    public function getUserID(){
        $this->db->select('id') ;
        $query = $this->db->get_where('accounts' , array('email' => $this->input->post('email' , true)))->row_array();
        $id = array_values($query) ;
        return $id ;
    }

    public function signup(){
        unset($_POST['submit']) ;

        $_POST['password'] = do_hash($_POST['password']  , 'md5') ;

        $this->db->insert('accounts' , $_POST) ;
        return true ;
    }
} 