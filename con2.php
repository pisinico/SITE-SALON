<?php
 $nume=$_POST['nume'];
 $email=$_POST['email'];
 $subiect=$_POST['subiect'];
 $mesaj=$_POST['mesaj'];

$host="locahost";
$dbname="message_db";
$username="root";
$password="";
$conn=mysqli_connect('localhost','root','','message_db');
if(mysqli_connect_errno()){
    die("Connection error:".mysqli_connect_error());
}
$sql="INSERT INTO message(nume,email,subiect,mesaj)
        VALUES(?,?,?,?)";

if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssss",
                        $nume,
                        $email,
                        $subiect,
                        $mesaj);

mysqli_stmt_execute($stmt);
echo"Record saved.";
?>