<?php
include "function.php";
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['registerEmail']) && isset($_POST['registerPassword']) && isset($_POST['phone'])){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $registerEmail = $_POST['registerEmail'];
    $registerPassword= $_POST['registerPassword'];
    $phone = $_POST['phone'];

    //check exist email

    $checkUsernameSqlQuery = "SELECT * FROM users where unique_email = '$registerEmail' limit 1";
    $result = $mysql->query($checkUsernameSqlQuery);
    if ($result && $result->num_rows > 0) {
        echo "Email is exist!";
        die;
    }
    else
    {
    //Insert User
    $registerPassword = password_hash($registerPassword,PASSWORD_DEFAULT);
    $insertUserQuery = "INSERT INTO users (`first_name`, `last_name`, `unique_email`, `password`, `phone`)
                        VALUES ('$firstname', '$lastname', '$registerEmail', '$registerPassword', '$phone')";
                       $result = $mysql->query($insertUserQuery);
                       if (!$result) {
                           echo "Error while insert user!";
                           die;
                       }
                       else
                       {
                        $id = $mysql -> insert_id;
                        echo "Insert success";
    //Login and Redirect
                        $_SESSION['user'] = [
                            'id' => $row["id"],
                            'name' => $row["first_name"]. " " . $row['last_name'],
                            'role' => $row["role"],
                            'registerEmail' => $row["unique_email"],
                            'phone' => $row["phone"]                   
                        ];
                        header("location: " . getUrl("?register_success=true"));
                       }
    }
}