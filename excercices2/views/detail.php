
<?php
session_start();
include_once "../includes/fromwork.php";
include_once "../controllers/getListeContact.php";
include_once "../includes/header.php";
include_once "../controllers/getContactById.php";
$numContact=$_GET['id'];


$contact = Contact:: getContactId($numContact);

    
            "<tr>";
            echo "<th scope =\"row\"><div class='liste'><strong>Numero:</strong>".$contact->getNumContact()." </th><br>";
            // echo "<td><button class=btn>".$contact[$i]->getNom()."</button> </td><br>";
            // "<th scope =\"row\"><div id='details' style='display:none'>";
            echo "<td><strong>Prenom:</strong>".$contact->getPrenom()."</td><br>";
            echo "<td><strong>numTelephone:</strong>".$contact->getNumTelephone()."</td><br>";
            echo "<td><strong>Email:</strong>".$contact->getEmail()."</td><br>";
            echo "<td><strong>description:</strong>".$contact->getDescrip()."</td><br>
            </div>
            </div> </tr><br>";
            echo "<a href='formulaire.php'>Retour</a>";

//             // echo "<th scope =\"row\"><div id=details style=display:none>".$contact[$i]->getNumContact()."</th><br>";
//             // echo "<td>".$contact[$i]->getPrenom()."</td><br>";
//             // echo "<td>".$contact[$i]->getNumTelephone()."</td><br>";
//             // echo "<td>".$contact[$i]->getEmail()."</td><br>";
//             // echo "<td>".$contact[$i]->getDescrip()."</td><br>
//             // </div>
        
        
        
    




// $affichcontact =$basedonne->query("SELECT*FROM  contact WHERE numContact='".$_GET["modif"]."' ");
// $contact=$affichcontact->fetch();

?>




<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     const detailBtns = document.querySelectorAll('.detail-btn');
    //     const detailsRows = document.querySelectorAll('.details-row');

    //     detailBtns.forEach(function (btn, index) {
    //         btn.addEventListener('click', function () {
    //             // Toggle display for details row related to clicked button
    //             detailsRows[index].style.display = detailsRows[index].style.display === 'none' ? 'table-row' : 'none';

    //             // Hide other details rows
    //             detailsRows.forEach(function (row, idx) {
    //                 if (idx !== index) {
    //                     row.style.display = 'none';
    //                 }
    //             });
    //         });
    //     });
    // });
</script>

            