<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include("connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
   $message = $_POST['msg'];

    $sql = "INSERT INTO contact (name, email, msg) VALUES (?,?,?)";

    $data = $conn->prepare($sql);

    $data->bind_param("sss", $name, $email, $message);
    
   
    if($data->execute())
    {
      echo '  <script> alert("msg sent successfully");</script>';
    }
    else
    {
        echo '  <script> alert("msg not sent successfully");</script>';
    }



}






?>