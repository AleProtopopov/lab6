<?php
$liga = $_GET["Group"];
require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->lab6->team;
    $cursor = $collection->find(['name' => $liga],['leader' => 1,'team_members' => 1,]);
    echo "<table border='1'>";
    echo "<thead><tr><td>Leader</td><td>Team members:</td></tr>";
    foreach($cursor as $duty)
    {
        echo "<tr><td>";
        echo $duty['leader'];
        echo "</td>";
        foreach($duty['team_members'] as $members)
        {
            echo "<td>";
            echo $members;
            echo "</td>";
        }
        echo "</tr>";
    }
?>