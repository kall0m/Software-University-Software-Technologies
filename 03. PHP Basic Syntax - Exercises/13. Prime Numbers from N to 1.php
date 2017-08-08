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
function checkIfPrime($num)
{
    $div = 2;

    while ($num % $div != 0) {
        $div++;
    }

    if ($div == $num) {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = $num; $i >= 2; $i--) {
        if (checkIfPrime($i)) {
            echo "$i ";
        }
    }
}
?>
</body>
</html>