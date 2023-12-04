
<?php
// include '../configuration/config.php';
// include '../models/contact.php';


//  Contact :: getContactId($numContact);


// function getListeLivresDispo(){
//     return Tarif :: getLivresDispo();
// }
?>
<?php
include_once '../configuration/config.php';
include_once '../models/contact.php';

// Vérifiez si un numéro de contact a été envoyé par POST
if(isset($_POST['numContact'])) {
    $numContact = $_POST['numContact'];

    // Utilisation de la méthode statique de la classe Contact pour obtenir les détails du contact par son ID
    $contactDetails = Contact::getContactId($numContact);

    // Faites quelque chose avec les détails du contact récupérés
    // Par exemple, affichez-les ou effectuez d'autres opérations
}
?>
