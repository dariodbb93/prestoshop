<?php

// connessione al database con metodo procedurale



$connection = mysqli_connect("localhost", "root", "toor", "annunci");

$filesArray = [];

$sqlQuery = "SELECT * FROM annuncios";

$result= mysqli_query($connection, $sqlQuery);



while($row = mysqli_fetch_assoc($result)){

array_push($filesArray, $row["file"]);




}

echo json_encode($filesArray);



mysqli_close($connection);





?>



