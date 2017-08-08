<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
function checkIfOdd($num)
{
    return $num % 2 != 0;
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = $num; $i >= 1; $i--) {
        if (checkIfOdd($i)) {
            echo "$i ";
        }
    }
}
?>
</body>
</html>