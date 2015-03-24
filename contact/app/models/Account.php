<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 11/1/14
 * Time: 12:12 PM
 */

class Account extends Eloquent{
    protected $table = 'accounts' ;
    protected $fillable = array('username' , 'password');
    public $timestamps = true ;

    public static $rules = array(
        'username' => 'required|unique:accounts|min:5|max:10',
        'password' => 'required|min:7',
        'confirm_password' => 'required|same:password'
    ) ;

    public function signup(){
        $user = new Account ;

        $user->username = Input::get('username');
        $user->password = Input::get('password') ;

        $user->save() ;
        return true ;
    }

    public function signin(){
        $user = new Account ;
        $user->username = Input::get('username') ;
        $user->password = Input::get('password') ;

        $results = DB::select('select * from accounts where username = ? and password = ?' , array($user->username , $user->password)) ;

        if(count($results) > 0)
            return true ;
        return false ;
    }

    public function getAccountsId(){
        $query = DB::select('select * from accounts where username = ?' , array(Session::get('username'))) ;

        $id = array() ;
        foreach($query as $row)
            $id[] = $row->id ;

        if(Session::get('logged_in') != "yes")
            return (int)$id ;
        else
            return (int)$id[0] ;
    }
} 