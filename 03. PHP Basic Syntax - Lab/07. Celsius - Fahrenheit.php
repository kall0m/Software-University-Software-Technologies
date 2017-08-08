<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celsius - Fahrenheit</title>
</head>
<body>
<?php
function celsiusToFahrenheit(float $celsius): float
{
    return $celsius * 1.8 + 32;
}

function fahrenheitToCelsius(float $fahrenheit): float
{
    return ($fahrenheit - 32) / 1.8;
}

?>

<?php
$msgAfterCelsius = "";
if (isset($_GET["cel"])) {
    $cel = floatval(htmlspecialchars($_GET["cel"]));
    $result = celsiusToFahrenheit($cel);
    $msgAfterCelsius = "$cel &deg;C = $result &deg;F";
}

$msgAfterFahrenheit = "";
if (isset($_GET["fah"])) {
    $fah = floatval(htmlspecialchars($_GET["fah"]));
    $result = fahrenheitToCelsius($fah);
    $msgAfterFahrenheit = "$fah &deg;F = $result &deg;C";
}
?>

<form>
    Celsius: <input type="text" name="cel"/>
    <input type="submit" value="Convert"/>
    <?= $msgAfterCelsius ?>
</form>

<form>
    Fahrenheit: <input type="text" name="fah"/>
    <input type="submit" value="Convert"/>
    <?= $msgAfterFahrenheit ?>
</form>
</body>
</html>
