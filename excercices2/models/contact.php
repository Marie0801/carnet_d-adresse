
<?php
class Contact
{
    
    private $nom;
    private $prenom;
    private $numero;
    private $email;
    private $descrip;
    

    public function __construct($nom, $prenom,  $numero, $email, $descrip)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numero = $numero;
        $this->email = $email;
        $this->descrip = $descrip;
    }

    public function creerContact()
    {
        global $db;
        $resultat = false;

        $nom = $this->nom;
        $prenom = $this->prenom;
        $numero = $this->numero;
        $email = $this->email;
        $descrip = $this->descrip;

        $requete = 'INSERT INTO contact (nom, prenom, numTelephone, email, Descrip) VALUES (:nom, :prenom, :numTelephone, :email, :Descrip)';

        $stetment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $stetment->execute(
            [
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':numTelephone' => $numero,
                ':email' => $email,
                ':Descrip' => $descrip
            ]
        );

        if ($execution) {
            $resultat = true;
        }
        return $resultat;
    }

    public static function getContactId($numContact)
    {
        global $db;
        $requete = 'SELECT * FROM contact WHERE numContact= :numContact';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute(
            [
                ':numContact' => $numContact
            ]
        );

        if ($execution) {
            if ($data = $stetment->fetch()) {
                $contact= new Contact ($data['nom'], $data['prenom'], $data['numTelephone'], $data['email'], $data['Descrip']);
                return $contact;
            } else return null;
        } else return null;
    }

    

    public function getNumContact(){
        global $db;
        $requete = 'SELECT numContact FROM contact WHERE nom = :nom AND numTelephone = :numTelephone';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute(
            [
                ':nom' => $this -> getNom(),
                ':numTelephone' => $this -> getnumTelephone()
            
            ]
        );
        if ($execution) {
            if ($data = $stetment->fetch()) {
                $numContact = $data['numContact'];
                return $numContact;
            } else return null;
        } else return null;
    }

    static function getContacts(){
        global $db;
        $requete = 'SELECT * FROM contact WHERE 1';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute ([]);
        $contacts = [];
        if ($execution) {
            while ($data = $stetment -> fetch()) {
                $contact = new Contact ($data['nom'], $data['prenom'], $data['numTelephone'], $data['email'], $data['Descrip']);
                array_push($contacts,$contact);
            }
            return $contacts;
        } else return [];
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNumTelephone()
    {
        return $this->numero;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getDescrip()
    {
        return $this->descrip;
    }
    

    /**
     * Set the value of ad$adress2
     *
     * @return  self
     */
}
?>
