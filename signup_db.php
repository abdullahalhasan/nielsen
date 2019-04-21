<?php
function dba_sign($name,$password){
try {$servername = "localhost";
$username = "mindscape";
$password = "1234";
$dbname = "question";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (username, password) 
    VALUES (:name, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
}
    $conn =null;
?>