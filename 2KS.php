<?php
if (!isset($_COOKIE['visited'])) {
    setcookie("visited", "yes");
    $str = "cookie o nazwie visited nie jest ustawione.";
} else {
    $str = "Cookie o nazwie visited jest ustawione.";
    $str .= "jego wartość to: ($_COOKIE['visited']}"
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>
<body>
    
</body>
</html>