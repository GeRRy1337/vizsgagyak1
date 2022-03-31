<?php
    if(isset($_POST['jelszo'])){
        if($_POST['jelszo']=="admin"){
            include "view/admin.php";
        }else{
            include "view/login.php";
        }
    }else{
        include "view/login.php";

    }
?>