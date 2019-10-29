<!DOCTYPE html>
<html>
<head>
<title>examloginpage</title>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$unmae=$_GET['uname'];
$upass=$_GET['upass'];
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
    $sql = "SELECT pass from users where id =$uname";
    $result = $conn->query($sql)
    if ($result->num_rows == 1) {
        
        while($row = $result->fetch_assoc()) {
            if($pass ==$row['userpass'])
            {
                echo "login sucessfull"
            }
            else{
                echo " login failed wrong user credentials"
            }
        }
    }
}
?>
    
</head>
    <body>
        <form action ="examlogin.php" method ="post">
        <label>Username:<input type = "text" name="username" validate ></label>
            <br>
        <label>Password:<input type = "text" name="pass" validate ></label>
            <br>
        <button type ="submit">loign</button>
            
        </form>
    
    </body>
</html>