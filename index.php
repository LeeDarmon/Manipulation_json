<?php

require('controller.php');

if ($validate_picture == true){
    include('gallery.php');
}
else {
    include('form.php');
}