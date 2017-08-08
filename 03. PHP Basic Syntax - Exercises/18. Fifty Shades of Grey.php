<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<?php $colorIndex = 0; ?>
<?php for ($i = 0; $i < 5; $i++): ?>
    <?php $increasedColorIndex = $colorIndex; ?>
    <?php for ($j = 0; $j < 10; $j++): ?>
        <?php $shade = "rgb($increasedColorIndex, $increasedColorIndex, $increasedColorIndex)"; ?>
        <div style="background-color: <?= $shade ?>"></div>
        <?php $increasedColorIndex += 5; ?>
    <?php endfor; ?>
    <?php $colorIndex += 51; ?>
    <br/>
<?php endfor; ?>
</body>
</html>