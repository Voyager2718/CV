<?php
$request = $_POST['infoWindow'];

switch ($request) {
    case "pic":
        echo "<img src = 'resources/me.jpg' />";
        break;
    case "lille1":
        echo "<img src = 'http://nonlineaire.univ-lille1.fr/ECC11/media/img/ecc11/photo_aerienne_campus.jpg' />";
        break;
    case "val":
        echo "<img src = 'http://www.univ-valenciennes.fr/ensiame/sites/default/files/images/actu2013-14/ensiame-batiment-320-213.jpg' />";
        break;
    default:
        echo "No parameter.";
        break;
}
