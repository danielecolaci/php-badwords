<?php

$text = $_GET['text'];
$ban = $_GET['ban'];

var_dump($_GET);

$banned_word = '*****';

$text_length = strlen($text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Results</title>

    <style>
        body{
            text-align: center;
        }

        div{
            border: 1px solid black;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div>    
    <h2>Text</h2>
    <p><?php echo $text ?></p>
    <h4>Length: <i><?php echo $text_length ?> characters.</i></h4>
    </div>
</body>
</html>