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
function getFibonacci($num)
{
    if ($num == 0) {
        return 1;
    }
    if ($num == 1) {
        return 1;
    }
    return getFibonacci($num - 1) + getFibonacci($num - 2);
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = 0; $i < $num; $i++) {
        $fib = getFibonacci($i);
        echo "$fib ";
    }
}
?>
</body>
</html>