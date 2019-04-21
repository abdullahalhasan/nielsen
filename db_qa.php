<?php
session_start();


function dba_start($qid,$aid){
try {$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nielsen_web";
date_default_timezone_set("Asia/Dhaka");
$time= date("Y-m-d h:i:sa");
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO qdemo (iid, qaid, qid, aid,time) 
    VALUES (:iid, :qaid, :qid, :aid, :time)");
    $iid= "Bot";
    $qaid=$_SESSION['phn_num'];
    $stmt->bindParam(':iid', $iid);
    $stmt->bindParam(':qaid', $qaid);
    $stmt->bindParam(':qid', $qid);
    $stmt->bindParam(':aid', $aid);
    $stmt->bindParam(':time',$time);

   
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
}
    $conn = null;

function arr_concate($arr1){
    $result="";     
    $count = count($arr1);
        for($i=0;$i<$count;$i++){
            $result=$result.$arr1[$i].',';
        }
    return $result;
    }
?>