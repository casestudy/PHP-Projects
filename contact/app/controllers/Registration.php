<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/28/14
 * Time: 10:32 PM
 */
include 'Main.php' ;
class Registration extends BaseController{

    public function signup(){
        $validation = Validator::make(Input::all() , Account::$rules) ;
        if($validation->fails()){
            return Redirect::to('/registration/signup')->withErrors($validation);
        }
        else{
            if(with(new Account)->signup()){
                Session::put('logged_in' , 'yes');
                Session::put('username' , Input::get('username')) ;
                Session::put('accounts_id' , (new Account)->getAccountsId()) ;
                return Redirect::to('/accounts') ;
            }
            else{
                return Redirect::to('/registration/signup') ;
            }
        }
    }

    public function signin(){
        if(with(new Account)->signin()){
            Session::put('logged_in' , 'yes');
            Session::put('username' , Input::get('username')) ;
            Session::put('accounts_id' , (new Account)->getAccountsId()) ;
            Session::put('prev' , URL::current());
            return Redirect::to('/accounts');
        }
        else{
            Session::forget('logged_in') ;
            return Redirect::to('/main') ;
        }
    }

    public function signout(){
        Session::flush() ;
        return Redirect::to('/main') ;
    }
}