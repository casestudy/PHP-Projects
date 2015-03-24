<?php
/**
 * Created by PhpStorm.
 * User: femenchaazombofabrice
 * Date: 10/2/14
 * Time: 9:48 AM
 */

//namespace application\models\posts;


class general extends CI_Model{
    function __construct(){
        parent::__construct() ;
    }

    public function posts($table){
        $this->db->order_by("date" , "desc") ;
        $query = $this->db->get($table , main::$per_page , $this->uri->segment(3)) ;

        return $query ;
    }

    public function downloads(){
        main::$per_page = 3 ;
        $this->db->order_by("date" , "desc") ;
        $query = $this->db->get('downloads' , main::$per_page , $this->uri->segment(3)) ;

        return $query ;
    }

    public function comments($commentTable , $postTable){//This method will return the comments that belongs to a particular post.
        $query = $this->db->get_where($commentTable , array($postTable."_id" => $this->setPostID($postTable))) ;
        return $query ;
    }

    public function setPosts($table){
        unset($_POST['submit']) ;
        if($_FILES['file']['name'] != ""){ //if the user has chosen to upload a file then proceed with the if.
            if(!empty($_POST['post'])){  //if the user has chosen to upload a file but still tries to write a text post, priority is given to the text post.
                unset($_FILES) ;
                unset($_POST['file']) ;

                $date = new DateTime() ;
                $_POST['date'] = $date->format('Y-m-d H:i:s');
                $tmp = $this->session->userdata('userid') ;
                $_POST['accounts_id'] = $tmp[0];
                $_POST['type'] = 1 ;

                $this->db->insert($table , $_POST) ;
                return true ;
            }
            else{  //the user choose just to upload just a file
                $date = new DateTime() ;
                $_POST['date'] = $date->format('Y-m-d H:i:s');
                $tmp = $this->session->userdata('userid') ;
                $_POST['accounts_id'] = $tmp[0];
                $_POST['type'] = 2 ;
                $_POST['post'] = "resources/posts/userid".$tmp[0]."_".do_hash(file_get_contents($_FILES['file']['tmp_name']));

                if($_FILES['file']['error'] == 0){
                    $post = file_get_contents($_FILES['file']['tmp_name']);
                    file_put_contents('resources/posts/userid'.$tmp[0]."_".do_hash(file_get_contents($_FILES['file']['tmp_name'])) , $post);
                }

                $this->db->insert($table , $_POST) ;
                unset($_FILES) ;
                unset($_POST['file']) ;

                return true ;
            }
        }
        else{ //The user choose to write a text post
            $date = new DateTime() ;
            $_POST['date'] = $date->format('Y-m-d H:i:s');
            $tmp = $this->session->userdata('userid') ;
            $_POST['accounts_id'] = $tmp[0];
            $_POST['type'] = 1 ;

            $this->db->insert($table , $_POST) ;
            return true ;
        }
    }

    public function setDownloads()
    {
        unset($_POST['submit']) ;

        $date = new DateTime() ;
        $_POST['date'] = $date->format('Y-m-d H:i:s');
        $tmp = $this->session->userdata('userid') ;
        $_POST['accounts_id'] = $tmp[0];
        $name = do_hash(file_get_contents($_FILES['file']['tmp_name'])) ;
        $_POST['path'] = "resources/downloads/userid".$tmp[0]."_".$name;

        if($_FILES['file']['error'] == 0){
            $post = file_get_contents($_FILES['file']['tmp_name']);
            file_put_contents('resources/downloads/userid'.$tmp[0]."_".$name , $post);
        }
        else
            echo "Failed" ;

        $this->db->insert('downloads' , $_POST) ;
        return true ;

    }
    public function setPostType($table){
        if($this->posts($table)->num_rows() > 0){
            foreach($this->posts($table)->result() as $row)
                $type = $row->type ;
            return $type ;
        }
        return false ;
    }

    public function setPostID($postTable){ //This function will return the id of a particular post
        if($this->posts($postTable)->num_rows() > 0){
            foreach($this->posts($postTable)->result() as $row)
                $id = $row->id ;
            return (int)$id ;
        }
        return false ;
    }

    public function setComments($commentTable , $postTable){
        unset($_POST['submit']) ;
        $date = new DateTime() ;
        $_POST['date'] = $date->format('Y-m-d H:i:s');
        $tmp = $this->session->userdata('userid') ;
        $_POST['accounts_id'] = $tmp[0] ;
        $_POST[$postTable."_id"] = $this->setPostID($postTable) ;

        $this->db->insert($commentTable , $_POST) ;
        return true ;
    }

    public function getDownloadsComment(){
        $query = $this->db->get('downloads_comments') ;
        return $query ;
    }

    public function setDownloadsComment(){
        unset($_POST['accounts_id']) ;
        unset($_POST['submit']) ;
        $date = new DateTime() ;
        $_POST['date'] = $date->format('Y-m-d H:i:s');

        $this->db->insert('downloads_comments' , $_POST) ;
        return true ;
    }

    public function getID(){
        $this->db->select('accounts_id') ;
        $this->db->order_by("date" , "desc") ;
        $this->db->limit(1) ;
        $query = $this->db->get('downloads')->row_array() ;

        $id = array_values($query) ;

        return (int)$id ;
    }

    public function getUploader(){
        $tmp = $this->getID() ;
        $this->db->select('surname') ;
        $this->db->select('givenname') ;
        $query = $this->db->get_where('accounts' , array('id' => $tmp)) ;

        return $query ;
    }
} 