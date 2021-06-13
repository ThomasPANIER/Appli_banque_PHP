
<?php

class Account {

    protected $id;
    protected $type_compte;
    protected $nom;
    protected $date_ouverture;
    protected $solde;
    protected $id_client;
    protected $commentaire;
    
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() : int {
        return $this->id;
    }

    public function setType_compte(string $type_compte) {
        $this->type_compte = $type_compte;
    }
    public function getType_compte() : string {
        return $this->type_compte;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getNom() : string {
        return $this->nom;
    }
    
    public function setDate_ouverture(string $date_ouverture) {
        $this->date_ouverture = $date_ouverture;
    }
    public function getDate_ouverture() : string {
        return $this->date_ouverture;
    }

    public function setSolde(int $solde) {
        $this->solde = $solde;
    }
    public function getSolde() : int {
        return $this->solde;
    }

    public function setId_client(int $id_client) {
        $this->id_client = $id_client;
    }
    public function getId_client() : int {
        return $this->id_client;
    }

    public function setCommentaire(string $commentaire) {
        $this->commentaire = $commentaire;
    }
    public function getCommentaire() : string {
        return $this->commentaire;
    }

    public function __construct(?array $data = null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter= "set". ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter(htmlspecialchars($value));
                }
            }
        }
    }

}