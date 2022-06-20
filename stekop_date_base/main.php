<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="main.css?v=1">
    <title>Document</title>
</head>
<body>
    
<?php
include "db_conn.php";

// Create connection
$con = mysqli_connect($serwer,$user,$password,$db_name);
if(mysqli_connect_error()) {
    echo "invalid syntax" .mysqli_connect_error();
    exit();
}
$sql = "SELECT login,name,email,blocked,type_id FROM `user_tbl`;";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
    echo    '<table class="center">';
    echo '<tr>'. 
        
        '<th>Login</th>'.
        '<th>Nazwa</th>'.
        '<th>Email</th>'.
        '<th>zablokowany</th>'.
        '<th>Akcje</th>';

    echo'</tr>';    
        while($row = mysqli_fetch_assoc($result)){
            //echo " - login: " . $row["login"]. " - name " . $row["name"]."- e-mail " . $row["e-mail"]";
             //echo " - type_id " . $row["type_id"]. " - blocked" . $row["blocked"].<br>";
            echo '<tr>';
            echo 
                 '<td>'.$row["login"].'</td>'.
                 '<td>'.$row["name"].'</td>'.
                 '<td>'.$row["email"].'</td>'.
                 '<td>'.blocked_text($row["blocked"]).'</td>'.
                 '<td>'.'<input class="but-green" type="submit" name="edytuj" value="edytuj" >'.'<input class="but-red"type="submit" name="zablokuj" value="zablokuj">'.'</td>';
            echo '</tr>';
        }
    echo '</table>';

    
    echo'<ol>';
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        //echo " -login: " . $row["login"] ;
        echo'<li>'.$row["login"].'- '.type_id_text($row["type_id"]).'</li>';
    
    }
    echo'</ol>';
}
else {
    echo "0 results";
}
?>
</body>
</html>
<?php
    function blocked_text($blocked)
     {
         if ($blocked == 0)
            return "Nie";
        return "<span style='color: red;'>Tak</span>";
     }
?>
<?php
    function type_id_text($type_id)
    {
        if ($type_id == 1)
            return"<span style='color: blue;'>administrator<span>";
        return"uzytkownik";
    }
?>
