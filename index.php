<?php
if($_POST){
    require 'DB.php';
    if($_POST['var1'] == "get"){
        $value = (int)$_POST['val1'];
        $sql = "SELECT * FROM `table` LIMIT :count";
        $s = DB::GetIns()->prepare($sql);
        $s->bindParam(":count",$value,PDO::PARAM_INT);
        $s->execute();
        $result = $s->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row){
            foreach ($row as $vals){
                echo "$vals ";
            }
            echo "<br>";
        }
    }
    if($_POST['var1'] == "sort"){

        $sql = "SELECT * FROM `table` ORDER BY {$_POST['var2']} {$_POST['val2']}";
        $s = DB::GetIns()->prepare($sql);
        $s->execute();
        $result = $s->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row){
            foreach ($row as $vals){
                echo "$vals ";
            }
            echo "<br>";
        }
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="index.php" method="post">
    <input name="var1">=<input name="val1"><br>
    <input name="var2">=<input name="val2"><br>
    <input type="submit">
</form>
</body>
</html>
