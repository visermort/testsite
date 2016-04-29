<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Чтение переменных окржения</title>
</head>
<body>
<?php
echo "<pre><h3>Переменная SERVER</h3>";
print_r($_SERVER);
echo "<h3>Переменная REQUEST</h3>";
print_r($_REQUEST);
echo "<h3>Переменная GET</h3>";
print_r($_GET);
echo "<h3>Переменная POST</h3>";
print_r($_POST);
echo "http_accept ".$http_accept;
?>

</body>
</html>