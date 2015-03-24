<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 11/1/14
 * Time: 11:18 PM
 */

class Contacts extends Eloquent{
    protected $table = 'contacts' ;
    protected $fillable = array('name' , 'surname' , 'phone' , 'email' , 'picture' , 'gender' , 'address');
    public $timestamps = true ;

    public static $rules = array(
        'name' => 'required',
        'surname' => 'required',
        'phone' => 'required',
        'email' => 'required' ,
        'gender' => 'required',
        'address' => 'required',
    ) ;

    public function getContacts(){
        $id = new Account() ;
        $query = DB::table('contacts')->where('accounts_id' , '=' , $id->getAccountsId())->paginate(5);

        return $query;
    }

    public function addContacts(){
        $contact = new Contacts ;
        $id = new Account() ;

        $contact->name = Input::get('name');
        $contact->surname = Input::get('surname');
        $contact->phone = Input::get('phone');
        $contact->email = Input::get('email');
        $contact->gender = Input::get('gender');
        $contact->address = Input::get('address');
        $contact->accounts_id = $id->getAccountsId() ;

        if($this->contactExist($contact->phone)){
            echo "Contact already exist." ;
            return false ;
        }
        else{
            if($contact->gender == "M"){
                if(Input::file('file')->getClientOriginalName() != ""){ //If the user has chosen to upload a contact image
                    $contact->picture = $contact->surname."_".Input::file('file')->getFilename() ;
                    Input::file('file')->move('public/contact_images' , $contact->surname."_".Input::file('file')->getFilename()) ;
                }
                else{
                    $contact->file = "public/contact_images/avatarMale" ;
                }
            }
            else{ //Contact is a female
                if(Input::file('file')->getClientOriginalName() != ""){
                    $contact->picture = $contact->surname."_".Input::file('file')->getFilename() ;
                    Input::file('file')->move('public/contact_images' , $contact->surname."_".Input::file('file')->getFilename()) ;
                }
                else{
                    $contact->picture = "public/contact_images/avatarFemale" ;
                }
            }
            $contact->save() ;
            return true ;
        }
    }

    public function deleteContact($pic){
        DB::table('contacts')->where('name' , '=' , $pic)->delete();
        return true ;
    }

    public function editContacts($phone){
        DB::table('contacts')->where('phone'  , '=' , $phone)->update(array('name' => Input::get('name') , 'surname' => Input::get('surname'),
        'phone' => Input::get('phone') , 'email' => Input::get('email') , 'gender' => Input::get('gender') , 'address' => Input::get('address')));
        return true ;
    }

    public function contactExist($phone){
        $query = DB::select('select * from contacts where accounts_id = ?' , array(Session::get('accounts_id'))) ;

        $data = array() ;

        foreach($query as $row)
            $data[] = $row->phone ;

        if(in_array($phone , $data))
            return true  ; //Contact already exist
        return false ; //Contact don't exist
    }

    public function searchContact(){
            $id = new Account() ;
            $search =  Main::$where ;

            $query = DB::select("select * from contacts where (surname like '%$search%' or name like '%$search%' or email like '%$search%' or phone like '%$search%' or address like  '%$search%') and  accounts_id = ?" , array($id->getAccountsId())) ;

            $pagination = Paginator::make($query, count($query), 5);

            $data = array() ;
            foreach($query as $row)
                $data[] = $row ;
            return $data ;
    }

    public function exportContact(){
        $id = new Account() ;
        $query = DB::select("select * from contacts where accounts_id = ?" , array($id->getAccountsId()));

        return $query;
    }
}