<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'start-up.php';
require_once DIR_CONTROLLERS . DS . 'homeController.php';

if (isPost() && $_POST['save_info']) {
	save_info($_POST);
}

$data = load_info(12);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once DIR_TEMPLATE . DS . 'header.php'?>
</head>
<body>
    <h1>Hello</h1>
    <?php include_once DIR_TEMPLATE . DS . 'footer.php'?>
</body>
</html>