<?php

$gallery = array();
$validate_picture = false;
$timestamp = time();

$fichier_json = file_get_contents('gallery.json');
$array_json = json_decode($fichier_json);
if (isset($_FILES['file'])) {
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $_FILES['file']['name'] = $timestamp . '.' . $ext;
    $file = $_FILES['file'];
    echo ("<br>");
    echo ("<br>");
    $dossier = 'images/';
    $fichier = basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)) {


        if (empty($fichier_json)) {
            echo 'Upload effectué avec succès !';
            echo ("<br>");
            echo 'test tableau vide';
            array_push($gallery, $_FILES['file']);
            var_dump($gallery);
            $gallery = json_encode($gallery);
            var_dump($gallery);
            $fichier_json = $fichier_json . $gallery;
            $bytes = file_put_contents("gallery.json", $fichier_json);
            var_dump($fichier_json);

            $validate_picture = true;
        } else {
            echo 'Upload effectué avec succès !';
            echo ("<br>");
            echo 'test tableau plein';
            array_push($gallery, $_FILES['file']);
            $gallery_encoded = json_decode(json_encode($gallery), FALSE);
            $array_json[] = $gallery_encoded[0];
            $encoded_json = json_encode($array_json);
            $bytes = file_put_contents("gallery.json", $encoded_json);
            $validate_picture = true;
        }
    } else {
        echo 'Echec de l\'upload !';
    }
} else {
    echo ('no file found');
}
