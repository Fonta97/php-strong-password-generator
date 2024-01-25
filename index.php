<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password poco sicure</title>
    </head>

<form>
    <input type="number" name="pws_lng">
    <input type="submit" value="GENERA">
</form>

<?php

$pws_lng = $_GET["pws_lng"] ?? -1;

echo "lng: " . $pws_lng;

echo "<br>";

$c='A':
$c_ascii = ord($c);
$c_char = chr($c_ascii);

echo $c;
echo "<br>";
echo $c_ascii;
echo "<br>";
echo $c_char;

?>

</body>
</html>