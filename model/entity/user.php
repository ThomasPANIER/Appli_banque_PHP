
<?php

class User {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $solde;
    protected $numero;
    protected $adresse;
    protected $ville;
    protected $code_postal;
    protected $tel;
    protected $email;
    protected $sexe;
    protected $date_adhesion;
    protected $date_naissance;
    protected $mdp;
    protected $commentaire;
    
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() : int {
        return $this->id;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getNom() : string {
        return $this->nom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    }

    public function setNumero(string $numero) {
        $this->numero = $numero;
    }
    public function getNumero() : string {
        return $this->numero;
    }

    public function setVoie(string $voie) {
        $this->voie = $voie;
    }
    public function getVoie() : string {
        return $this->voie;
    }

    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }
    public function getAdresse() : string {
        return $this->adresse;
    }

    public function setVille(string $ville) {
        $this->ville = $ville;
    }
    public function getVille() : string {
        return $this->ville;
    }

    public function setCode_postal(string $code_postal) {
        $this->code_postal = $code_postal;
    }
    public function getCode_postal() : string {
        return $this->code_postal;
    }

    public function setTel(string $tel) {
        $this->tel = $tel;
    }
    public function getTel() : string {
        return $this->tel;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function getEmail() : string {
        return $this->email;
    }

    public function setSexe(string $sexe) {
        $this->sexe = $sexe;
    }
    public function getSexe() : string {
        return $this->sexe;
    }

    public function setDate_adhesion(string $date_adhesion) {
        $this->date_adhesion = $date_adhesion;
    }
    public function getDate_adhesion() : string {
        return $this->date_adhesion;
    }

    public function setDate_naissance(string $date_naissance) {
        $this->date_naissance = $date_naissance;
    }
    public function getDate_naissance() : string {
        return $this->date_naissance;
    }

    public function setMdp(string $mdp) {
        $this->mdp = $mdp;
    }
    public function getMdp() : string {
        return $this->mdp;
    }

    public function setCommentaire(string $commentaire) {
        $this->commentaire = $commentaire;
    }
    public function getCommentaire() : string {
        return $this->commentaire;
    }

    public function __construct(?array $data=null) {
        if($data){
            foreach($data as $key=>$value){
                $setter= "set". ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter(htmlspecialchars($value));
                }
            }
        }
    }
}