<?php

$username = filter_input(INPUT_POST, 'username')
$password = filter_input(INPUT_POST, 'password')
$firstname = filter_input(INPUT_POST, 'firstname')
$lastname = filter_input(INPUT_POST, 'lastname')
$email = filter_input(INPUT_POST, 'email')
echo "hello";
if(!empty($username)){
  if(!empty($password)){
    if(!empty($firstname)){
      if(!empty($lastname)){
        if(!empty($email)){
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "ankam"

          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
          if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
          }
          else{
            $sql = "INSERT INTO data_login (username, password, firstname, lastname, email) values ('$username, '$password', '$firstname', '$lastname', '$email')";
            if($conn->query(sql)){
              echo "Login Success";
            }
            else{
              echo "Error: ". $sql ."<br>". $conn-error;
            }
            $conn->close();
          }
        }
        else{
          echo "Please enter the email";
          die();
        }
      }
      else{
        echo "Please enter the lastname";
        die();
      }
    }
    else{
      echo "Please enter the firstname";
      die();
    }
  }
  else{
    echo "Please enter the password";
    die();
  }
}
else{
  echo "Username should not be empty";
  die();
}

?>
