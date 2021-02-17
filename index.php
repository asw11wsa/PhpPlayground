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
    <link rel="stylesheet" type="text/css" href="asset/css/index.css">
</head>
<body>
<div>
    <?php
        $header = new \Main\Header();

        if($_GET['subject']){
            $topic = new \Topic\Topic($_GET['subject']);
        }else{
            echo '<div>
                    <h1>this is main</h1>
                  </div>';
        }

        $footer = new \Main\Footer();
    ?>
</div>
</body>
</html>
