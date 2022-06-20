<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="main.css?v=2">
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
$sql = "SELECT id, login, password, name, type_id, blocked, date_created, 'e-mail' FROM user_tbl";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
    echo    '<table class="center">';
    echo '<tr>'. 
        '<th>id</th>'.
        '<th>login</th>'.
        '<th>haslo</th>'.
        '<th>Nazwa</th>'.
        '<th>typ ID</th>'.
        '<th>zablokowany</th>'.
        '<th>data utworzenia</th>'.
        '<th>email</th></tr>';
    
        while($row = mysqli_fetch_assoc($result)){
            //echo "id: " . $row["id"]. " - login: " . $row["login"]. " - password " . $row["password"]. " - name " . $row["name"];
             //echo " - type_id " . $row["type_id"]. " - blocked" . $row["blocked"]." - date_created " . $row["date_created"]."- e-mail " . $row["e-mail"]"<br>";
            echo '<tr>';
            echo '<td>'.$row["id"].'</td>'.
                 '<td>'.$row["login"].'</td>'.
                 '<td>'.$row["password"].'</td>'.
                 '<td>'.$row["name"].'</td>'.
                 '<td>'.$row["type_id"].'</td>'.
                 '<td>'.$row["blocked"].'</td>'.
                 '<td>'.$row["date_created"].'</td>'.
                 '<td>'.$row["e-mail"].'</td>';
            echo '</tr>';
        }
    echo '</table>';
}
   
else {
    echo "0 results";
}
?>
#echo usun z tabeli wyrarzenia dopisz text ,zrob przycisk kompatybilny z baza danych, zrbo podstrone z działajacą funkcą rejestru i dodawania urzytkownika
#echo tu kpojujesz dane z while nazwe i login
#if type_id = 1 - echo'administartor'
#if type_id = 2 - echo'user'
# echo'<ol>'
#       '<li>login 1 - name</li>'
#      '<li>login 2 - name</li>'
#   echo'</ol>'
</body>
</html>