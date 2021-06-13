

<?php

class Operation {

    protected $id;
    protected $id_compte;
    protected $id_client;
    protected $type_operation;
    protected $nom;
    protected $montant;
    protected $date_operation;
    protected $commentaire;
    
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() : int {
        return $this->id;
    }

    public function setId_compte( $id_compte) {
        $this->id_compte = $id_compte;
    }
    public function getId_compte() {
        return $this->id_compte;
    }

    public function setId_client(int $id_client) {
        $this->id_client = $id_client;
    }
    public function getId_client() : int {
        return $this->id_client;
    }

    public function setType_operation(string $type_operation) {
        $this->type_operation = $type_operation;
    }
    public function getType_operation() : string {
        return $this->type_operation;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getNom() : string {
        return $this->nom;
    }
    
    public function setMontant( $montant) {
        $this->montant = $montant;
    }
    public function getMontant() {
        return $this->montant;
    }

    public function setDate_operation(string $date_operation) {
        $this->date_operation = $date_operation;
    }
    public function getDate_operation() : string {
        return $this->date_operation;
    }

    public function setCommentaire(string $commentaire) {
        $this->commentaire = $commentaire;
    }
    public function getCommentaire() : string {
        return $this->commentaire;
    }

    // public function hydrate(array $data) {
    //     foreach ($data as $key => $value) {
    //         $methode = "set" . ucfirst($key);
    //         $this->$methode($value);
    //     }
    // }

    // function __construct($data)
    // {
    //     $this->hydrate($data);
    // }

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