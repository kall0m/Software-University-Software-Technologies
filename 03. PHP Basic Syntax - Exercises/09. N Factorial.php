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
function getFactorial($num)
{
    if ($num == 0) {
        return 1;
    }
    return getFactorial($num - 1) * $num;
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    echo getFactorial($num);
}
?>
</body>
</html>