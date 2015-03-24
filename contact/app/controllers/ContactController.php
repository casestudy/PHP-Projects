<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 11/3/14
 * Time: 3:17 PM
 */

class ContactController extends BaseController{
    public function putContact(){
        $validation = Validator::make(Input::all() , Contacts::$rules) ;
        if($validation->fails()){
            $GLOBALS['contact_failed'] = "Sorry! your contact was not stored.";
            return Redirect::to('/accounts')->withErrors($validation);
        }
        else{
            if(with(new Contacts)->addContacts()){
                return Redirect::to('/accounts');
            }
            else{
                echo "<div><h1>Could not add contact</h1></div>" ;
                return Redirect::to('/accounts');
            }
        }
    }

    public function removeContact($pic){
            if(with(new Contacts)->deleteContact($pic)){
                return Redirect::to('/accounts');
            }
            else{
                echo "<div><h1>Could not delete contact</h1></div>" ;
                return Redirect::to('/accounts') ;
            }
    }

    public function updateContact($phone){
        if(with(new Contacts)->editContacts($phone)){
            return Redirect::to('/accounts') ;
        }
        else{
            echo "<div><h1>Could not update contact</h1></div>" ;
            return Redirect::to('/accounts');
        }
    }

    public function export(){
        $id = new Account() ;
        //$query = User::where('accounts_id' , '=' , $id->getAccountsId())->get()->toArray();
        $query = DB::select("select name, surname,email,phone,gender,address,picture,accounts_id from contacts where accounts_id = ?" , array($id->getAccountsId()));

        Main::$name = Session::get('username').".csv" ;

        $file = fopen(Main::$name , 'w+') ;


        foreach($query as $row){
            fputcsv($file, (array) $row);
        }
        fclose($file) ;
        return Redirect::to('/accounts')->with('alertMessage', "Contacts Exported Successfully with the name  ".main::$name) ;

    }

    public function import(){
        $account = new Account() ;
        if (isset($_POST['submit'])) {

            //Obtaining existing data for comparison
            //$query = DB::table('contacts')->select('email')->where('accounts_id', '=',$account->getAccountsId())->get();
            $query = DB::select('select email,phone from contacts where accounts_id = ?' , array(Session::get('accounts_id'))) ;
            $existData = array();
            $realData = array();
            foreach ($query as $key ) {
                $existData[] = (array)$key;
            }
            foreach ($existData as $key => $value) {
                $realData[] = $existData[$key]['email'];
            }
            if(count($realData) != 0 ){
                //Import uploaded file to database

                Main::$name = Session::get('username').".csv";
                $handle = fopen(Main::$name, "r");
                while ((($data = fgetcsv($handle,1000,",")) !== FALSE)) {

                    for($i = 0;$i<count($realData);$i++) {

                        if(in_array($data[2],$realData) ){
                            break;
                        }
                        else
                        {
                            if (($data[3][0] == '7') || ($data[3][0]=='9')) {
                                DB::insert('insert into contacts (name,surname,email,phone,gender,address,picture,accounts_id) values (?,?,?,?,?,?,?,?)',
                                    array($data[0],$data[1],$data[2],'6'.$data[3],$data[4],$data[5],$data[6],$account->getAccountsId()));
                            }
                            else if ($data[3][0] == '7') {
                                DB::insert('insert into contacts (name,surname,email,phone,gender,address,picture,accounts_id) values (?,?,?,?,?,?,?,?)',
                                    array($data[0],$data[1],$data[2],'2'.$data[3],$data[4],$data[5],$data[6],$account->getAccountsId()));
                            }
                            else{
                                DB::insert('insert into contacts (name,surname,email,phone,gender,address,picture,accounts_id) values (?,?,?,?,?,?,?,?)',
                                    array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$account->getAccountsId()));
                            }
                            break;
                        }

                    }
                }
                fclose($handle);
                return Redirect::to('/accounts')->with('alertMessage', "Contacts Imported Successfully");
            }
            else{
                Main::$name = Session::get('username').".csv";
                $handle = fopen(Main::$name, "r");
                while ((($data = fgetcsv($handle,1000,",")) !== FALSE)) {
                    DB::insert('insert into contacts (name,surname,email,phone,gender,address,picture,accounts_id) values (?,?,?,?,?,?,?,?)',
                        array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$account->getAccountsId()));
                }
                fclose($handle);
                return Redirect::to('/accounts')->with('alertMessage', "Contacts Imported Successfully");
            }
        }
        else
        {
            return Redirect::to('/accounts');

        }

    }
} 