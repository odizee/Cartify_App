<?php

$email = $_POST['email'];
    
$dbhost = "db4free.net:3306";
$dbusername = "odizee1";
$dbpassword = "odizee295";
$tablename = "odizeedb";

//MySQL Connection
$sqlconn = new mysqli($dbhost, $dbusername, $dbpassword, $tablename);

//chech success
if ($sqlconn->connect_error){
    echo "$sqlconn->connect_error";
    die("COnnection Failed : ". $sqlconn->connect_error);
    }else{
        $stmt = $sqlconn->prepare("insert into reg(email) values(?)");
        $stmt->bind_param("s", $email);
        $execval = $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $sqlconn->close();
}
?>
