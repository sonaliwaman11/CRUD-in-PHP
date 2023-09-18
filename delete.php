<?php
    include "connection.php";
    if(isset($_GET['userSno'])){
        $userSno=$_GET['userSno'];
        $sql="DELETE from user where UserSNo=$userSno";
        $conn->query($sql);
    }
    header('location:/crud/index.php');
?>