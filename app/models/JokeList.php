
<?php
class JokeList extends DBconnection{
    public $id;
    public $value;
    public $datetime;
    public function update($data){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE jokes SET value=:value,datetime=:datetime WHERE id=:id');
        $stmt->bindParam(":value",$data["value"]);
        $stmt->bindParam(":datetime",$data["datetime"]);
        $stmt->bindParam(":id",$data["id"]);
        $stmt->execute();
    }
    public function getOne($id){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes where id=:id');
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id){
        $db = self::getConnection();
        $stmt = $db->prepare('DELETE FROM jokes WHERE id=:id');
        $stmt->bindParam(":id",$id);
        $stmt->execute();

    }
    public function add($value,$datetime){
        $db = self::getConnection();
        $stmt = $db->prepare('INSERT INTO jokes (value, datetime) VALUES (:value,:datetime)');
        $stmt->bindParam(":value",$value);
        $stmt->bindParam(":datetime",$datetime);
        $stmt->execute();

    }
    public static function getAll(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes ORDER BY datetime DESC ');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}