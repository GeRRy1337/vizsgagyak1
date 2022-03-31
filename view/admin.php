<div class="container">
<table class="table">
<tr>
    <th>Rajtszám</th>
    <th>Név</th>
    <th>Email</th>
    <th>Születés</th>
    <th>Nem</th>
</tr>
<?php 
    $sql="Select id from jelentkezes";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $jelentkezes->set_jelentkezo($row['id'],$conn);
            echo "<tr>";
            echo "<td>".$jelentkezes->get_id()."</td>";
            echo "<td>".$jelentkezes->get_nev()."</td>";
            echo "<td>".$jelentkezes->get_email()."</td>";
            echo "<td>".$jelentkezes->get_szul()."</td>";
            echo "<td>".$jelentkezes->get_nem()."</td>";
            echo "</td>";
        }
    }
    ?>
    </table>
</div>