<?php
$liga = $_GET["Group"];
require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->lab6->games;
    $cursor = $collection->find(['Liga' => $liga],['Match' => 1, 'Date' => 1,'City' => 1,'Comand_A' => 1,'Comand_B' => 1,'Winner' => 1,]);
    echo "<table border='1'>";
    echo "<thead><tr><td>Match</td><td>Date</td><td>City</td><td>Comand_A</td><td>Comand_B</td></tr></thead>";
    foreach($cursor as $duty)
    {
        echo "<tr><td>";
        echo $duty['Match'];
        echo "</td><td>";
        echo $duty['Date'];
        echo "</td><td>";
        echo $duty['City'];
        echo "</td><td>";
        echo $duty['Comand_A'];
        echo "</td><td>";
        echo $duty['Comand_B'];
        echo "</td></tr>";
    }
?>