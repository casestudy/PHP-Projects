<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/28/14
 * Time: 10:31 AM
 */

class Main extends BaseController{
    public static $head = false ;

    public static $header = false ;

    public static $left = true ;
    public static $left_class = "col-md-2" ;

    public static $right = true;
    public static $right_class = "col-md-2" ;

    public static $middle = false ;
    public static $middle_class = "col-md-8" ;

    public static $footer = false ;

    public static $view = false ;
    public static $view_source = "home/home" ;

    public static $title = "Welcome" ;
    public static $app_name = "Contact Manager" ;

    public static $logged_in = "no" ;

    public static $where = "" ;

    public static $name = "" ;

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
        'scripts' => 'resources/javascripts/scripts.js'
    ) ;

    public function index(){
        return View::make('main/index') ;
    }

    public function getSignup(){
        Main::$view_source = "registration/signup" ;
        return Main::index() ;
    }

    public function accounts(){
        Main::$view_source = "accounts/contact" ;
        return Main::index() ;
    }

    public function searchPage(){
        Main::$where = Input::get('search') ;
        if(strlen(Main::$where) == 0){
            echo "Where is false" ;
            return Redirect::to('/accounts');
        }
        else{
            Main::$view_source = "accounts/search" ;
            return Main::index() ;
        }
    }

    public function setContacts(){
        $contacts = new Contacts ;
        return $contacts->getContacts() ;
    }

    public function resultSearch(){
        $contacts = new Contacts() ;
        return $contacts->searchContact() ;
    }

    public function language(){
        Session::put('prev' , URL::current()) ;

        if(Session::get('language') == null)
            Session::put('language' , 'en') ;
    }

    public function change(){
        if(Session::get('language') == 'en'){
            Session::put('language' , 'fr') ;
        }
        else{
            Session::put('language' , 'en');
        }
        return Redirect::to(Session::get('prev'));
    }
} 