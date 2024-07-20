<?php
$server = "localhost";
$usernme = "root";
$pw = "";
$db = "catalog_z";
// trying to make connection
try{
    $con = new PDO(   //calling PDO to make connetion
        "mysql:host=$server;dbname=$db",
        $usernme,
        $pw
    );

/*by using connection set attributes that respons on any 
errors may ocure in server*/
    $con->setAttribute(  
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "Connected Successfully";
}catch (PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}