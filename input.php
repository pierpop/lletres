<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input calendari</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="text">
    <input type="submit" value="Enviar">
    </form>
</body>

<?php
if (!empty($_POST)) {
    file_put_contents('text.txt', $_POST['text']);
}
?>
</html>