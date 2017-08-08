<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capital-Case Words</title>
</head>
<body>
<?php
if (isset($_GET["text"])) {
    $text = $_GET["text"];
    preg_match_all('/\w+/', $text, $words);
    $words = $words[0];
    $upperWords = array_filter($words, function ($word) {
        return strtoupper($word) == $word;
    });
    echo implode(', ', $upperWords);

    /*$text = $_GET["text"];
    preg_match_all('/\w+/', $text, $words);
    $words = $words[0];
    $capsWords = array();
    $check = 0;
    foreach ($words as $word) {
        for ($i = 0; $i < strlen($word); $i++){
            if ($word[$i] >= ord(A) && $word[$i] <= ord(Z)) {
                $check++;
            }
        }
        if ($check == strlen($word)) {
            $capsWords[] = $word;
        }
    }
    echo implode(', ', $capsWords);*/

    //I tried, but I've failed...
}
?>
<form>
    <textarea name="text"></textarea><br/>
    <input type="submit" value="Extract"/>
</form>
</body>
</html>
