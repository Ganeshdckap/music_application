<?php
require ("models/model.php");

class Controller {
    private $Model;

    public function __construct() {


        $this->Model = new Model();
    }


    public function home(){
        $album=$this->Model->showMusic();
        require "views/home.view.php";
    }

    public  function  artistlist(){
        $artist=$this->Model->showArtist();
        require "views/home.view.php";
    }

    public  function  musiclist(){
        $album=$this->Model->showMusic();
        require "views/home.view.php";
    }
    public  function addplaylist($datas){
        if ($datas){
            if ($datas['playlist_for'] =='Artist'){
                $artist=$this->Model->showArtist();
                $_SESSION['Artist']=$datas['playlist_for'];
                
            }
            if ($datas['playlist_for'] =='Album'){
                $album=$this->Model->showMusic();
                $_SESSION['Album']=$datas['playlist_for'];
                
            }
        }
        else{
            require "views/addplaylist.view.php";
        }

    }
    public function addplaylistalbum($albums){

        $this->Model->addplaylistalbums($albums);
        $this->home();

    }
    public function addplaylistartist($albums){
        $this->Model->addplaylistartist($albums);
        $this->home();

    }


  
    public function loginPage($data){
        if ($data){
           $checkadmin= $this->Model->checkadmin($data);
           $check =$this->Model->registration($data);
           if ($checkadmin){
               $_SESSION['admin']=$checkadmin->username;
               $this->home();
           }
           elseif ($check){
               $_SESSION['user']=$check->username;
               $this->home();
           }
           else{
               $session['error']='user is not existed';
               require "views/registration/login.php";
           }
        }
        else{
            require "views/registration/login.php";
        }
    }

    
    public function logout(){
        session_destroy();
        header("location:/");

    }


    public function addMusic($data,$musicImage){
        if ($data and $musicImage){
            $this->Model->addMusic($data,$musicImage);
            $this->home();

        }
        else{
            $artistname =$this->Model->showArtist();
            require "views/addmusic.view.php";
        }
    }

  
    public function addArtist($artist,$image){
        if ($artist and $image){
            $this->Model->addArtist($artist,$image);
            $this->home();

        }
        else{
            require "views/addartist.view.php";
        }
    }

}