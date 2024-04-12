<?php 

$name = 'Hello'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><?php echo $name ?></h1>

    <form action="script.php" method="get">
        <input type="text" placeholder="Type your text" name="text">
        <input type="text" placeholder="Type banned word" name="ban">
        <button type="submit">Submit</button>
    </form>
</body>
</html>