<?php
class DB{
    private static $ins;
    public static function GetIns(){
        if(self::$ins == null)
            self::$ins = new PDO('mysql:host=localhost;dbname=db', 'root', '');
        return self::$ins;
    }

}
?>