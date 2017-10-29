<?php
opcache_reset();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('dbconnect.php');


        $countAll = "SELECT * FROM apartments";
    $s = $pdo->prepare($countAll);
 $s->execute();

//        $result = $pdo->query($countAll);


//print_r($result);

while($row=$s->fetch(PDO::FETCH_ASSOC)) {
    
//    print_r($row);
    
    echo $row['ApartmentNo'];
}
//foreach($result as $fetchRow)
//            {
//    echo $fetchRow['ApartmentNo'];
//
//}

?>