<?php

include "db.php"; 
$error="";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>  
    <body onload="document.pos.barcode.focus();">
        <div class="container">
            <form class="pos-style" name="pos" action="" method="post">
                <div class="form-group">
                    <input type="text" name="barcode" class="form-control" placeholder="bar code reader">
                </div>
            </form>
        </div>
    </body>
</html>