<?php

$json = file_get_contents("gallery.json");
$json_decoded = json_decode($json, true);
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
    <h1 class="text-center">Gallery</h1>
        <div class="row">
            <?php
            foreach ($json_decoded as $value) {
                echo ("<div class='col-4'>");
                echo ("<img class='img-fluid' src='images/" . $value['name'] . "'>");
                echo ("</div>");
            }
            ?>
        </div>
    </div>
</body>

</html>