<?php
  include("connect.php");
?>
<?php 
    $UserName = $_POST['UserLogin'];
    $PassWord = $_POST['PassLogin'];
    $sql = "select ID_Customer from customer where Username = '$UserName' and Password = '$PassWord'";
    $result = $conn -> prepare($sql);
    $result->execute();
    $fetch = $result->fetch(PDO::FETCH_ASSOC);
    $id = "";
    $id .=  $fetch['ID_Customer'] ;
    if($id==null)
    {
        header("Location: LoginPage.php");
    }
    else{
        session_start();
        $_SESSION["id"] = $id;
        header("Location: Homepage.php");
    }
    ?>