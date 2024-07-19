<?php
 session_start();
include("connection.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $passwords = $_POST["password"];

        $sql = "SELECT id, name, email, password, photo FROM users WHERE email = ?";
        $data = $conn->prepare($sql);

        if ($data == false) {
            echo "prepare failed: " . $conn->error;
        } else {
            $data->bind_param("s", $email);
            $data->execute();
            $data->store_result();
       
       
            if ($data->num_rows == 1) {
                $data->bind_result($id, $name, $email, $password, $photo);
                $data->fetch();
              
                if (password_verify($passwords, $password)) {
                    session_regenerate_id();
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    $_SESSION["name"] = $name;
                    $_SESSION["photo"] = $photo;

                   
                    echo json_encode(["status" =>true ]);
                    // header("location: ../dashboard.php");
                } else {
                    // echo "password does not match";

                    echo json_encode(["status" =>false, "error"=> "password does not match" ]);
                     
                   
                }
            } else {
                // echo "No user found with this email";
                echo json_encode(["status" =>false, "error"=> "No user found with this email" ]);
                
               
            }
        }
    }

