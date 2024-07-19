<?php
include("connection.php");

$sql = "SELECT * FROM projects";

$data = $conn->prepare($sql);

$data->execute();

$result = $data->get_result();

if($result->num_rows > 0)
{
    $project= [];
    while($row = $result->fetch_assoc())
    {
        $project[] = $row;
    }
}

 


$data->close();

$conn->close();


?>