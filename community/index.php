<?php

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/asset/css/index.css">
</head>
<body>
<?php
    $header = new \Main\Header();

    if($_GET['type'] === 'Write'){
        $type = new \Community\Write();
    }else if($_GET['type'] === 'View'){
        $type = new \Community\View();
    }else if($_GET['type'] === 'Update'){
        $type = new \Community\Update();
    }else if($_GET['type'] === 'Delete'){
        $type = new \Community\Delete();
    }
?>
<a href="?type=Delete">delete</a>
<a href="?type=Update">update</a>
<a href="?type=View">View</a>
<a href="?type=Write">Write</a>
<?php
    $footer = new \Main\Footer();
?>

</body>
</html>
