<?php
include_once 'autoload.php';
$joke1 = new JokeController;
$pages = ['home','create','update',"delete"];
if(isset($_GET['page'])){ 
   if($_GET['page']==$pages[1]){
    if(isset($_POST["createJoke"])){
        $joke1->storeJoke($_POST["jokeValue"],"create");
      }
      else{
        $joke1->addJoke();
      }
        
    }
    else if($_GET['page']==$pages[2]){
        if(isset($_POST["id"])){
            $data = $joke1->getOneJoke($_POST["id"]);
            $joke1->updateJoke($data);
        }
        if(isset($_POST["updateJoke"])){
            $joke1->storeJoke($_POST["JokeValue"],"update",$_POST["JokeId"]);
        }
    }
    else if($_GET['page']==$pages[3]){
        $joke1->deleteJoke($_GET["action"]);
    }
    else{
        $data = $joke1->getJokes();
        $joke1->JokeList($data);
    }
}else{
    $data = $joke1->getJokes();
    $joke1->JokeList($data);
}
?>
