<?php require 'connection.php';?>
<?php
if(isset($_POST["submit"])){
    $nume=$_POST["nume"];
    $email=$_POST["email"];
    $subiect=$_POST["subiect"];
    $mesaj=$_POST["mesaj"];

   $query="INSERT INTO tb_data VALUES('','$nume','$email','$subiect','$mesaj')";
   mysqli_query($conn,$query);
   echo"Trimis";
}
?>  
