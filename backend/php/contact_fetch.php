<?php
include ("connection.php");

 $sql = "SELECT * FROM contact";

$data =  $conn->prepare($sql);

$data->execute();

$result = $data->get_result();

if($result->num_rows > 0)
{

    $contact= [];
    while($row = $result->fetch_assoc())
    {
        $contact[] = $row;
    }

}

 






?>