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

echo "<br></br>";

$charSet ="";
for ($x=ord('a');x<=ord('z');$x++) {

    $charSet .= chr($x);
}

for ($x=ord('A');$x<=ord('Z');$x++) {
    $charSet .= chr($x);
}

for ($x=ord('0');x<=ord('z');$x++) {

    $charSet .= chr($x);
}

for ($x=ord('!');$x<=ord('Z');$x++) {
    $charSet .= chr($x);
}

echo $charSet;

$pws="";
for ($x=0;$x<$pws_lng;$x++){

    $rndCharIndex = rand(0, strlen($charSet)-1);
    $rndChar = $charSet[$rndCharIndex];
    $pws .=$rndChar;
}

?>

<h2 style="color: red;">
La tua password è:
<?php echo $pws; ?>
</h2>

</body>
</html>