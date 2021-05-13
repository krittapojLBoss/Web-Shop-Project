<?php
  include("connect.php");
?>
<?php 
     session_start();
     $id = $_SESSION['id'];
     $FirstName = $_POST['FirstName'];
     $LastName = $_POST['LastName'];
     $Phone = $_POST['Phone'];
     $password = $_POST['PassWord'];
     $sql = "update customer set FirstName='$FirstName',LastName='$LastName',NumberPhone='$Phone', Password='$password' where ID_Customer = '$id'";
    //  // $sql = "INSERT INTO user(firstname,lastname,phone,Address,username,password) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
     $result = $conn -> prepare($sql);
     $result->execute();
     $_SESSION["id"] = $id;
     header("Location: Homepage.php");
    ?>