<?php
try{
    $database = new PDO('mysql:host=localhost;dbname=distribution-alimentaire', 'root', '');
}
catch(exception $e){
    die('error: '.$e->getmessage());
}


// $results = $database-> query('select email FROM login');
// while($row = $results->fetch())
// {
//     echo $row['email'];
// }

?>