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
    public function  JokeList($data){
        $title = "Home";
        ob_start();
        include_once '../app/views/JokesList.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function updateJoke(){
        $this->update($data);
    }
    public function deleteJoke(){
    }
    public function addJoke(){
       
        $title = "Create";
        ob_start();
        include_once '../app/views/create.php';
        $content = ob_get_clean();
        echo "<script>document.write('');</script>";
        include_once '../app/views/home.php';
    }
}