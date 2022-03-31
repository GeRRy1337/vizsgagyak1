<?php

class Jelentkezes{
    private $id;
    private $nev;
    private $email;
    private $szul;
    private $nem;

    public function set_jelentkezo($beid,$conn)
    {
        $sql="Select * from jelentkezes where id=".$beid;
        if ($result = $conn->query($sql)){
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $this->id=$row['id'];
                    $this->nev=$row['nev'];
                    $this->email=$row['email'];
                    $this->szul=$row['szul'];
                    $this->nem=$row['nem'];
                }
            }
        }
    }

    public function get_id (){
        return $this->id;
    }
    public function get_nev (){
        return $this->nev;
    }
    public function get_email (){
        return $this->email;
    }
    public function get_szul (){
        return $this->szul;
    }
    public function get_nem (){
        return $this->nem;
    }


}

?>