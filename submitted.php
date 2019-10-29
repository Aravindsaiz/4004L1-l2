<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$uname=$_POST['username'];
$upass=$_POST['pass'];
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo " database Connected successfully";
    echo "<br>";

    echo  "<h1>$uname</h1>";
    echo "<br>";
    

    $sql = "SELECT * from users where uname =$uname;";

    $result = $conn->query($sql);
    $row = mysql_fetch_assoc($result);
    if($row['pass']==$upass)
    {
        echo "login to exam portal sucessfull";
    }
    else{
        echo "login to exam portal failed";
    }
   

$conn->close();

}
?>