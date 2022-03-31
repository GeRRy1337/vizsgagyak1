<?php
$error="";
if(isset($_POST['jelentkezesGomb'])){
    if(!isset($_POST['nev'])){
        $error.= "Név kitöltése kötzelező";
    }
    if(!isset($_POST['email'])){
        $error.= "Email kitöltése kötzelező";
    }
    if(!isset($_POST['szul'])){
        $error.= "Születési dátum- kitöltése kötzelező";
    }elseif( date_diff( date_create($_POST['szul']),date_create("now"))->y<14 ){
        $error.= "A jelentkezéshez legalább 14 évesnek kell lenned!";
    }
    if(!isset($_POST['nem'])){
        $error.= "Nem kitöltése kötzelező";
    }
    if($error==""){
        $sql="INSERT INTO jelentkezes(nev,email,szul,nem) values(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss",$nev,$email,$szul,$nem);
        $nev=$_POST['nev'];
        $email=$_POST['email'];
        $szul=$_POST['szul'];
        $nem=$_POST['nem'];
        if ($stmt->execute()){
            $stmt->close();
            $jelentkezes->set_jelentkezo($conn->insert_id,$conn);
            include "view/sikeres.php";
            exit();
        }else{
            $error="Hiba a feltöltés közben!";
        }
    }
}

    include "view/".($error==""?"jelentkezes":"hiba").".php";
?>