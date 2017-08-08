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
function getTribonacci($num)
{
    if ($num == 0) {
        return 1;
    }
    if ($num == 1) {
        return 1;
    }
    if ($num == 2) {
        return 2;
    }
    return getTribonacci($num - 1) + getTribonacci($num - 2) + getTribonacci($num - 3);
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = 0; $i < $num; $i++) {
        $trib = getTribonacci($i);
        echo "$trib ";
    }
}
?>
</body>
</html>