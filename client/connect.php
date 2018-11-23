<?php



$username = filter_input(INPUT_POST, 'username')
$password = filter_input(INPUT_POST, 'password')

if(!empty($username)){
  if(!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ankam"

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
      die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
    }
    else{
      $sql = "select password from data_login where username=$username";
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
    echo "Please enter the password";
    die();
  }
}
else{
  echo "Username should not be empty";
  die();
}

?>
