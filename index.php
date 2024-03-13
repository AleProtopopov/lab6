<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="get1.php" method="get">
    <label for="lessons">Ліга: </label>
    <select name="Group" id="Group">
    <?php
    require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->lab6->games;
    $cursor = $collection->distinct('Liga');
    foreach($cursor as $duty)
    {
        echo"<option value='$duty'>$duty</option>";
    }
    ?>
    </select>
    <input type="submit" value="Go">
</form>
<form action="get2.php" method="get">
    <label for="lessons">Команда(список): </label>
    <select name="Group" id="Group">
    <?php
    require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->lab6->team;
    $cursor = $collection->distinct('name');
    foreach($cursor as $duty)
    {
        echo"<option value='$duty'>$duty</option>";
    }
    ?>
    </select>
    <input type="submit" value="Go">
</form>
<form action="get3.php" method="get">
    <label for="lessons">Команда(ігри): </label>
    <select name="Group" id="Group">
    <?php
    require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->lab6->team;
    $cursor = $collection->distinct('name');
    foreach($cursor as $duty)
    {
        echo"<option value='$duty'>$duty</option>";
    }
    ?>
    </select>
    <input type="submit" value="Go">
</body>
</html>