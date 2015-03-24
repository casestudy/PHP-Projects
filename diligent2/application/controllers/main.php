<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 9/28/14
 * Time: 7:05 AM
 */

class main extends CI_Controller{

    public static $language = "english" ;

    public static $head = false;
    public static $header = false;

    public static $view = false;
    public static $view_source = "foundation/index";
    public static $right_source = "foundation/right" ;

    public static $title = "Welcome" ;
    public static $school = "DBF" ;
    public static $school_full = "Diligent Bilingual Foundation" ;

    public static $motto= "Selfless Service to Humanity" ;
    public static $spiritual_theme = "If you do not stand by me, you will not stand at all." ;
    public static $academic_theme = "Social Responsibility in Providing Sustainable Education." ;
    public static $project_name = "St. Anthony's Guild Diligent Foundation" ;

    public static $left = false;
    public static $left_name = "left" ;
    public static $left_class = "col-md-2" ;

    public static $middle = false ;
    public static $middle_name = "middle" ;
    public static $middle_class = "col-md-8" ;

    public static $right = false ;
    public static $right_name = "right" ;
    public static $right_class = "col-md-2" ;

    public static $logged_in = false ;

    public static $sector = 1 ;

    public static $footer = false ;

    public static $per_page = 1 ;
    public static $current = 0 ;

    public static $data  ;
    public static $load_data ;

    public static $css = array(
        'bootstrap-css' => 'resources/libraries/bootstrap-3.1.1/css/bootstrap.min.css' ,
        'bootstrap-theme' => 'resources/libraries/bootstrap-3.1.1/css/bootstrap-theme.min.css' ,
        'font-awesome' => 'resources/font-awesome/css/font-awesome.min.css' ,
        'summernote' => 'resources/summernote-master/dist/summernote.css' ,
        'my-styles' => 'resources/stylesheets/styles.css',
    );

    public static $js = array(
        'jquery' => 'resources/jquery-2.0.3.js' ,
        'jquery-ui' => 'resources/libraries/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js' ,
        'bootstrap-js' => 'resources/libraries/bootstrap-3.1.1/js/bootstrap.min.js',
        'summernote' => 'resources/summernote-master/dist/summernote.min.js',
    ) ;

    function __construct(){
        parent::__construct() ;
        $this->load->model('general/general') ;
        $this->load->model('registration/register') ;
    }

    public function index(){
        main::$left = true ;
        main::$middle_class = "col-md-8" ;
        main::$right_class = "col-md-4" ;
        $this->load->view('index') ;
    }

    public function language(){
        $this->session->set_userdata(array('prev' => current_url()));
        $lang = $this->session->userdata('language') ;
        if($lang == null){
            $this->session->set_userdata(array('language' => 'english'));
        }

        $this->lang->load('header' , $this->session->userdata('language')) ;
        $this->lang->load('signup' , $this->session->userdata('language')) ;
    }

    public function change(){
        if($this->session->userdata('language') == "english")
            $this->session->set_userdata(array('language' => 'french'));
        else
            $this->session->set_userdata(array('language' => 'english'));
        redirect($this->session->userdata('prev'));
    }

    public function loadPost($post){
        $config['base_url'] = site_url('main/index');
        $config['total_rows'] = $this->db->count_all($post);
        $config['per_page'] = 1;

        $this->pagination->initialize($config);


        return $this->general->posts($post) ;
    }

    public function loadDownloads(){
        $config['base_url'] = site_url('resources/download');
        $config['total_rows'] = $this->db->count_all('downloads');
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        return $this->general->downloads() ;
    }

    public function loadComment($comment , $postID){ //This method loads the comments that belong to a post with a particular post id
        return $this->general->comments($comment , $postID) ;
    }

    public function getPostType($table){
        return $this->general->setPostType($table);
    }

    public function getPostID($table){
        return $this->general->setPostID($table);
    }

    public function insertPost($table){
        if($this->general->setPosts($table))
        {
           // $this->index() ;
            redirect($this->session->userdata('prev')) ;
        }
        else
            $this->load->view('templates/error') ;
    }

    public function insertComment($comment , $postID){
        if($this->general->setComments($comment , $postID))
            redirect($this->session->userdata('prev'));
        else
            $this->load->view('templates/error');
    }

    public function insertDownload(){
        if($this->general->setDownloads()){
            redirect($this->session->userdata('prev')) ;
        }
        else
            $this->load->view('templates/error');
    }

    public function loadAccountsID(){
        return $this->register->getAccountsID() ;
    }

    public function loadCategory(){
        return $this->register->getCategory();
    }

    public function loadUploader(){
        return $this->general->getUploader() ;
    }

    public function loadDownloadComment(){
        return $this->general->getDownloadsComment() ;
    }

    public function signup(){
        $signup_styles = array(
            'signin' => 'resources/stylesheets/signin.css' ,
            'date-time-picker' => 'resources/stylesheets/bootstrap-datetimepicker.css',
        );

        $signup_scripts = array(
            'jquery1' => 'resources/libraries/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js' ,
            'moment' => 'resources/javascripts/moment.js',
            'date-time-picker-1' => 'resources/javascripts/bootstrap-datetimepicker.js',
            'date-time-picker-2' => 'resources/javascripts/bootstrap-datetimepicker_002.js',
            'scripts' => 'resources/javascripts/scripts.js',
        ) ;

        main::$css = array_merge(main::$css , $signup_styles) ;
        main::$js = array_merge(main::$js , $signup_scripts);

        main::$right = true ;
        main::$left = true ;
        main::$middle_class = "" ;
        main::$view_source = "registration/signup" ;
        main::index() ;
    }
} 