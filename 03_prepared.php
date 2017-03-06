<?php

include 'db_credentials.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO messages(inhoud, tijdstip) VALUES(:inhoud, now())");
    // vervolledig de code om 3 testberichten toe te voegen
    // m.b.v. bovenstaand prepared statement
    $stmt->bindValue(':inhoud', 'Test', PDO::PARAM_STR);
    $stmt->execute();
    $stmt->bindValue(':inhoud', '1111', PDO::PARAM_STR);
    $stmt->execute();
    $stmt->bindValue(':inhoud', 'Test1', PDO::PARAM_STR);
    $stmt->execute();
    echo "3 testberichten toegevoegd...";
}

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

?>
