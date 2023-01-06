<?php

class JokeController{
    public $id;
    public $value;
    public $datetime;
    public $joke;
    public function __construct(){
        $this->joke = new JokeList;
    }


    public function getJokes(){
        return $this->joke->getAll();
    }


    public function getOneJoke($id){
        return $this->joke->getOne($id);
    }


    public function  JokeList($data){
        $title = "Home";
        ob_start();
        include_once 'app/views/JokesList.php';
        $content = ob_get_clean();
        include_once 'app/views/home.php';
    }


    public function updateJoke($data){
        $title = "Update";
        ob_start();
        include_once 'app/views/update.php';
        $content = ob_get_clean();
        include_once 'app/views/home.php';
    }



    public function deleteJoke($id){
        $res = $this->joke->delete($id);
        if($res){
            header("location:../home");
        }
    }



    public function addJoke(){
        $title = "Create";
        ob_start();
        include_once 'app/views/create.php';
        $content = ob_get_clean();
        include_once 'app/views/home.php';
    }




    public function storeJoke($data,$order,$id=null){
        if($order=="create"){
            $result = $this->joke->add($data,date('Y-m-d H:I:S'));
            if($result){
                header("location:home");
            }
        }

        else if($order=="update"){
            
            $result = $this->joke->update($data,date('Y-m-d H:I:S'),$id);
            if($result){
                header("location:home");
            }
        }
    }
}