<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dump a HTTP GET Request</title>
</head>
<body>
<form>
    Name:<br/>
    <input type="text" name="personName"/><br/>
    Age:<br/>
    <input type="number" name="age"/><br/>
    Town:<br/>
    <select name="townId">
        <option value="1">Sofia</option>
        <option value="2">Varna</option>
        <option value="3">Bourgas</option>
    </select><br/>
    <input type="submit"/>
</form>
<?php var_dump($_GET); ?>
</body>
</html>
