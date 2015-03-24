<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/2/14
 * Time: 8:22 PM
 */
include 'main.php' ;
class registration extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('registration/register') ;
        $this->load->model('general/general') ;
    }

    public function signin(){
        if($this->register->login()){
            $email =  $_POST['email'];
            $authentication = array(
                'logged_in' => 'yes',
                'email' => $email,
                'category' => $this->register->getCategory(),
                'userid' => $this->register->getUserID()
            ) ;

            $this->session->set_userdata($authentication) ;

            redirect($this->session->userdata('prev')) ;
        }
        else{
            $this->load->view('templates/error') ;
        }
    }

    public function signout(){
        $this->session->sess_destroy() ;
        redirect($this->session->userdata('prev')."/main") ;
    }

    public function signup(){
        $this->form_validation->set_error_delimiters('<div class="error" style="color: red">', '</div>');

        $this->config->set_item('language', $this->session->userdata('language'));

        if($this->form_validation->run('signup') == TRUE){
            if($this->register->signup()){

                $email = $_POST['email'] ;
                unset($_POST['passconf']) ;
                $authentication = array(
                    'logged_in' => 'yes',
                    'email' => $email,
                    'category' => $this->register->getCategory(),
                    'userid' => $this->register->getUserID()
                );

                $this->session->set_userdata($authentication);

                //main::index();
                redirect('main') ;
            }
            else{
                echo "Model returned false";
            }
        }
        else{
            main::signup() ;
        }
    }
} 