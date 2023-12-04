<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    <title>enregister les contacts</title>
    <?php include_once "../includes/fromwork.php"?>
    <?php include_once "../controllers/getListeContact.php";?>
    <?PHP  include_once "../includes/header.php"; ?>
    

</head>
<body>



<div class="content">
    <section style="border:1px solid">
    <h3 style="text-align: center; color:rgba(19, 0, 75, 0.952);margin-top:5px"><strong>ENREGISTRER LES CONTACTS</h3>
    

    <form action="../controllers/creerContact.php" method="POST">
    <section class="row" style="margin: 15px;">
    <div class="col-4"></div>
        <div class="col-4">
<!-- <label class="form-label">Numero</label>
        <input type="number" name=NumLocataire class="form-control" required><br> -->
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" required><br>
        <label class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom" required><br>
        <label class="form-label">numTelephone</label>
        <input type="number" class="form-control" name="numero" required><br>
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" required><br>
        <label class="form-label">description</label>
        <textarea name="descrip" id="" cols="30" rows="10" class="form-control"></textarea><br>

        </section>
        <button type="sumit" value="Envoyer" class="btn btn-block"
        style="background-color:rgba(19, 0, 75, 0.952); color:white; width:200px; margin-left:auto; margin-right:auto;">Enregistrer</button><br>
    </form>
    <div class="mx-5">
        <div class="text-center">
        <h2>listes des contancts</h2>
        </div>
    
        <!-- <table class="table table-striped"> -->
        <thead class="table-dark">
        <!-- <tr>
            <th>NumContact</th>
            <th>Nom</th>
            
        </tr> -->
        </thead>
    
        <?php
    
        $contact = getListeContact();
        
        for($i = 0; $i < count($contact); $i++) {
    
            $_SESSION['numContact']=$contact[$i]->getNumContact();
            // echo "<a href='detail.php?id=" . $contact[$i]->getNumContact() . "'>" . $contact[$i]->getNom() . "</a><tr>";
            echo "<th scope =\"row\">".$contact[$i]->getNumContact()."   </th>";
            echo "<th scope =\"row\"><a href='detail.php?id=" . $contact[$i]->getNumContact() . "'>" . $contact[$i]->getNom() . "</a></th><br>";
            "</tr>";
        
        
        }
            ?>
            
        </table>
        
    </div>
    </div>
    <?php
// include_once "../includes/fromwork.php";


// $contacts = getListeContact();

// foreach ($contacts as $contact) {
//     echo "<tr class='contact-row'>";
//     echo "<th scope=\"row\"><div class='liste'>" . $contact->getNumContact() . "</div></th>";
//     echo "<td><button class='btn detail-btn' data-toggle='details-" . $contact->getNumContact() . "'>" . $contact->getNom() . "</button></td>";
//     echo "</tr>";

//     echo "<tr class='details-row' id='details-" . $contact->getNumContact() . "' style='display: none;'>";
//     echo "<td colspan='2'>";
//     echo "<div class='details'>";
//     echo "<p><strong>Nom:</strong> " . $contact->getNom() . "</p>";
//     echo "<p><strong>Prenom:</strong> " . $contact->getPrenom() . "</p>";
//     echo "<p><strong>Numéro de téléphone:</strong> " . $contact->getNumTelephone() . "</p>";
//     echo "<p><strong>Email:</strong> " . $contact->getEmail() . "</p>";
//     echo "<p><strong>Description:</strong> " . $contact->getDescrip() . "</p>";
//     echo "</div>";
//     echo "</td>";
//     echo "</tr>";
// }
?>

<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     const detailBtns = document.querySelectorAll('.detail-btn');

    //     detailBtns.forEach(function (btn) {
    //         btn.addEventListener('click', function () {
    //             const targetId = this.getAttribute('data-toggle');
    //             const targetDetails = document.getElementById(targetId);

    //             if (targetDetails.style.display === 'none') {
    //                 targetDetails.style.display = 'table-row';
    //             } else {
    //                 targetDetails.style.display = 'none';
    //             }
    //         });
    //     });
    // });
</script>
<?php
// include_once "../includes/fromwork.php";
// include_once "../controllers/getListeContact.php";

// $contacts = getListeContact();

// foreach ($contacts as $contact) {
//     echo "<tr class='contact-row'>";
//     echo "<th scope=\"row\"><div class='liste'>" . $contact->getNumContact() . "</div></th>";
//     echo "<td><button class='btn detail-btn' data-toggle='details-" . $contact->getNumContact() . "'>" . $contact->getNom() . "</button></td>";
//     echo "</tr>";

//     echo "<tr class='details-row' id='details-" . $contact->getNumContact() . "' style='display: none;'>";
//     echo "<td colspan='2'>";
//     echo "<div class='details'>";
//     echo "<p><strong>Nom:</strong> " . $contact->getNom() . "</p>";
//     echo "<p><strong>Prenom:</strong> " . $contact->getPrenom() . "</p>";
//     echo "<p><strong>Numéro de téléphone:</strong> " . $contact->getNumTelephone() . "</p>";
//     echo "<p><strong>Email:</strong> " . $contact->getEmail() . "</p>";
//     echo "<p><strong>Description:</strong> " . $contact->getDescrip() . "</p>";
//     echo "</div>";
//     echo "</td>";
//     echo "</tr>";
// }



// include_once "../controllers/getListeContact.php";
// include_once "../configuration/config.php";

// $affichcontact =$bdd->query("SELECT* FROM  contact");

// $contacts = getListeContact();

// foreach ($contacts as $contact) {
//     echo "<tr class='contact-row'>";
//     echo "<th scope=\"row\"><div class='liste'>" . $contact->getNumContact() . "</div></th>";
//     echo "<td><a href='detail.php?id=" . $contact->getNumContact() . "'>" . $contact->getNom() . "</a></td>";
//     echo "</tr>";
// }
// $numContact = 1;

// while($contact=$affichcontact->fetch_assoc())
// {
    
    
//         echo $numContact ++;


//     echo $contact["nom"];
    
    
//         echo $contact["prenom"];
    
    
//         echo "<td><a href='detail.php?id=" . $contact->getNumContact() . "'>" . $contact->getNom() . "</a></td>";


// }
?>


<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     const detailBtns = document.querySelectorAll('.detail-btn');

    //     detailBtns.forEach(function (btn) {
    //         btn.addEventListener('click', function () {
    //             const targetId = this.getAttribute('data-toggle');
    //             const targetDetails = document.getElementById(targetId);

    //             if (targetDetails.style.display === 'none') {
    //                 targetDetails.style.display = 'table-row';
    //             } else {
    //                 targetDetails.style.display = 'none';
    //             }
    //         });
    //     });
    // });
</script>


            
    <!-- <div class="mx-5">
    <div class="text-center">
        <h2>Liste des employés</h2>
    </div><br>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NumContact</th>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
            <a href=""></a>
        </thead>
        <tbody>
            <?php
            // $contacts = getListeContact(); // Supposons que getListeContact() récupère les données des employés

            // foreach ($contacts as $contact) {
            //     echo "<tr class='employe-row'>";
            //     echo "<td><a href=". $contact->getNumContact()."></td>";
            //     echo "<td class='nom-link' data-numcontact='" . $contact->getNumContact() . "'>" . $contact->getNom() . "</td>";
            //     echo "<td><a href=". $contact->getPrenom()."></td>";
            //     echo "</tr>";
            //     echo "<tr class='details-row' style='display:none;'>";
            //     echo "<td colspan='3' class='details' data-numcontact='" . $contact->getNumContact() . "'>";
            //     // Affichez ici les détails supplémentaires de l'employé (tels que numéro de téléphone, email, etc.)
            //     echo "Détails pour " . $contact->getNom() . " - Ces détails peuvent inclure le numéro de téléphone, l'email, etc.";
            //     echo "</td>";
            //     echo "</tr>";
            // }
            ?>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nomLinks = document.querySelectorAll('.nom-link');

        nomLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                const numContact = this.getAttribute('data-numcontact');
                const detailsRows = document.querySelectorAll('.details-row');

                detailsRows.forEach(function (row) {
                    if (row.querySelector('.details').getAttribute('data-numcontact') === numContact) {
                        row.style.display = row.style.display === 'none' ? 'table-row' : 'none';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    });

</script> -->
<script>
    // var details=document.querySelector('#details');
    // var btn=document.querySelector('.btn');
    // var liste=document.querySelector('.liste');
    // btn.addEventListener('click', function ajouter(){
    //     if(details.style.display=='none'){
    // details.style.display='inline-block'
    //     }else{
    //         details.style.display='none'
    //         liste.style.display='inline-block'
    //     }
    // });
</script>
<?php include_once "../includes/fromwork2.php"?>

</body>
</html>