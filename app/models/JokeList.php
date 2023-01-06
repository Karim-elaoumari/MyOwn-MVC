
<?php
class JokeList extends DBconnection{
    public $id;
    public $value;
    public $datetime;
    public function update($data,$date,$id){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE jokes SET value=:value,datetime=:datetime WHERE id=:id');
        $stmt->bindParam(":value",$data);
        $stmt->bindParam(":datetime",$date);
        $stmt->bindParam(":id",$id);
        $res = $stmt->execute();
        if($res==true){
            return true;

        }
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
        $res  =$stmt->execute();
        if($res){
            return true;
        }
    }
    public function add($value,$datetime){
        $db = self::getConnection();
        $stmt = $db->prepare('INSERT INTO jokes (value, datetime) VALUES (:value,:datetime)');
        $stmt->bindParam(":value",$value);
        $stmt->bindParam(":datetime",$datetime);
        
        if($stmt->execute()){
            return true;
        }
    }
    public static function getAll(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes ORDER BY datetime DESC ');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}