<?php

include '../configuration/config.php';
include '../models/contact.php';


function getListeContact(){
     return Contact :: getContacts();
}

// function getListeLivresDispo(){
//     return Tarif :: getLivresDispo();
// }
?>