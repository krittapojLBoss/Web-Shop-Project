<?php
  include("connect.php");
?>
<?php 
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Phone = $_POST['Phone'];
    $username = $_POST['UserName'];
    $password = $_POST['PassWord'];
    $sql = "insert into customer(FirstName,LastName,NumberPhone,Username,Password) VALUES ('$FirstName','$LastName','$Phone','$username','$password')";
    // $sql = "INSERT INTO user(firstname,lastname,phone,Address,username,password) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
    $result = $conn -> prepare($sql);
    $result->execute();
    header("Location: LoginPage.php");
    ?>