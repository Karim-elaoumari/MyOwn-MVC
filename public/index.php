<?php
include_once '../autoload.php';
    $joke1 = new JokeController;
    $data = $joke1->getJokes();
    $joke1->JokeList($data);
    if(isset($_GET["create"])){
        $joke1->addJoke();
    }
?>
