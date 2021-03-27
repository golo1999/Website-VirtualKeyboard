<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['screen']))
        echo "This is the text you submitted: " . $_POST['screen'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Submit page </title>
</head>
<body>
    <a href="index.php" target="_self"> Go back to keyboard </a>
</body>
</html>