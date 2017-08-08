<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers 1 to 20</title>
</head>
<body>
<ul>
    <?php for ($i = 1; $i <= 20; $i++):
        $color = $i % 2 == 0 ? "green" : "blue"; ?>
        <li><span style="color:<?= $color; ?>"><?= $i; ?></span></li>
    <?php endfor; ?>
</ul>
</body>
</html>