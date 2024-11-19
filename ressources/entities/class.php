<?php
// Classe de base Utilisateur
class Utilisateur {
    protected $conn;
    protected $table = "utilisateurs";
    public $id_utilisateur;
    public $nom;
    public $email;
    public $telephone;
    public $mot_de_passe;
    public $niveau_acces;
    public $status_;
    public $id_entreprise;

    public function __construct() {
        // 
    }

    // Méthode pour s'inscrire
    public function register() {
        $query = "INSERT INTO " . $this->table . " SET nom = ?, email = ?, telephone = ?, mot_de_passe = ?, niveau_acces = 1";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("ssss", $this->nom, $this->email, $this->telephone, $this->mot_de_passe);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour s'authentifier
    public function authenticate() {
        $query = "SELECT id_utilisateur, mot_de_passe, status_, niveau_acces FROM " . $this->table . " WHERE email = ? OR telephone = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("ss", $this->email, $this->telephone);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->id_utilisateur, $stored_pass, $this->status_, $this->niveau_acces);

        if ($stmt->fetch()) {
            if (password_verify($this->mot_de_passe, $stored_pass) && $this->status_ != 'revoque') {
                return true;
            }
        }
        return false;
    }

    // Révoquer un utilisateur
    public function revoke() {
        $query = "UPDATE " . $this->table . " SET status_ = 'revoque' WHERE id_utilisateur = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_utilisateur);
        return $stmt->execute();
    }

    // Créer une entreprise (Admin1)
    public function createEntreprise($nom, $adresse) {
        $entreprise = new Entreprise;
        $entreprise->nom = $nom;
        $entreprise->adresse = $adresse;
        $entreprise->id_utilisateur = $this->id_utilisateur;
        return $entreprise->create();
    }
}

// Classe Admin1 (hérite de Utilisateur)
class Admin1 extends Utilisateur {
    public function __construct() {
        parent::__construct();
    }

    // Créer un produit
    public function createProduit($nom, $nature, $unite, $prix_standard, $prix_minimum, $id_entreprise) {
        $produit = new Produit;
        $produit->nom = $nom;
        $produit->nature = $nature;
        $produit->unite = $unite;
        $produit->prix_standard = $prix_standard;
        $produit->prix_minimum = $prix_minimum;
        $produit->id_entreprise = $id_entreprise;
        return $produit->create();
    }

    // Enregistrer un stock
    public function enregistrerStock($id_produit, $quantite, $date_enreg, $id_entreprise) {
        $stock = new Stock;
        $stock->id_produit = $id_produit;
        $stock->quantite = $quantite;
        $stock->date_enreg = $date_enreg;
        $stock->id_entreprise = $id_entreprise;
        return $stock->create();
    }
}

// Classe Admin2 (hérite de Admin1)
class Admin2 extends Admin1 {
    public function __construct() {
        parent::__construct();
    }

    // Ajouter un client
    public function ajouterClient($nom, $numero, $adresse, $id_entreprise) {
        $client = new Client;
        $client->nom = $nom;
        $client->numero = $numero;
        $client->adresse = $adresse;
        $client->id_entreprise = $id_entreprise;
        return $client->create();
    }

    // Modifier les informations d'un client
    public function modifierClient($id_client, $nom, $numero, $adresse) {
        $client = new Client;
        $client->id_client = $id_client;
        $client->nom = $nom;
        $client->numero = $numero;
        $client->adresse = $adresse;
        return $client->update();
    }

    // Enregistrer une vente
    public function enregistrerVente($id_utilisateur, $id_client, $date_vente, $prix, $id_entreprise) {
        $vente = new Vente;
        $vente->id_utilisateur = $id_utilisateur;
        $vente->id_client = $id_client;
        $vente->date_vente = $date_vente;
        $vente->prix = $prix;
        $vente->id_entreprise = $id_entreprise;
        return $vente->create();
    }

    // Valider un stock
    public function validerStock($id_stock) {
        $stock = new Stock;
        $stock->id_stock = $id_stock;
        return $stock->validate();
    }
}

// Classe Admin3 (hérite de Admin2)
class Admin3 extends Admin2 {
    public function __construct() {
        parent::__construct();
    }

    // Annuler une vente
    public function annulerVente($id_vente) {
        $vente = new Vente;
        $vente->id_vente = $id_vente;
        return $vente->cancel();
    }

    // Consulter les rapports financiers généraux
    public function consulterRapportsFinanciersGeneraux($date) {
        // Logique pour consulter les rapports financiers généraux à une date donnée
        // Cela dépend des détails du rapport financier, que vous devrez implémenter
        return "Rapport financier général pour la date: " . $date;
    }
}

// Classe Administrateur (hérite de Admin3)
class Administrateur extends Admin3 {
    public function __construct() {
        parent::__construct();
    }

    // Supprimer un produit
    public function supprimerProduit($id_produit) {
        $produit = new Produit;
        $produit->id_produit = $id_produit;
        return $produit->delete();
    }

    // Supprimer une vente
    public function supprimerVente($id_vente) {
        $vente = new Vente;
        $vente->id_vente = $id_vente;
        return $vente->delete();
    }

    // Supprimer un client
    public function supprimerClient($id_client) {
        $client = new Client;
        $client->id_client = $id_client;
        return $client->delete();
    }

    // Revoquer un utilisateur
    public function revokeUtilisateur($id_utilisateur) {
        $utilisateur = new Utilisateur;
        $utilisateur->id_utilisateur = $id_utilisateur;
        return $utilisateur->revoke();
    }

    // Non révoquer un utilisateur
    public function nonRevokeUtilisateur($id_utilisateur) {
        $query = "UPDATE " . $this->table . " SET status_ = 'actif' WHERE id_utilisateur = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $id_utilisateur);
        return $stmt->execute();
    }

    // Créer une entreprise
    public function creerEntreprise($nom, $adresse) {
        return parent::createEntreprise($nom, $adresse);
    }
}

// Classe Entreprise
class Entreprise {
    private $table = "entreprises";

    public $id_entreprise;
    public $nom;
    public $adresse;
    public $id_utilisateur;

    public function __construct() {
        // 
    }

    // Créer une entreprise
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET nom = ?, adresse = ?, id_utilisateur = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("ssi", $this->nom, $this->adresse, $this->id_utilisateur);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Supprimer une entreprise
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_entreprise = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_entreprise);
        return $stmt->execute();
    }
}

// Classe Produit
class Produit {    
    private $table = "produits";

    public $id_produit;
    public $nom;
    public $nature;
    public $unite;
    public $prix_standard;
    public $prix_minimum;
    public $quantite_dispo;
    public $id_entreprise;

    public function __construct() {
        // 
    }

    // Créer un produit
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET nom = ?, nature = ?, unite = ?, prix_standard = ?, prix_minimum = ?, quantite_dispo = 0, id_entreprise = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("sssssi", $this->nom, $this->nature, $this->unite, $this->prix_standard, $this->prix_minimum, $this->id_entreprise);
        return $stmt->execute();
    }

    // Modifier un produit
    public function update() {
        $query = "UPDATE " . $this->table . " SET nom = ?, nature = ?, unite = ?, prix_standard = ?, prix_minimum = ? WHERE id_produit = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("sssssi", $this->nom, $this->nature, $this->unite, $this->prix_standard, $this->prix_minimum, $this->id_produit);
        return $stmt->execute();
    }

    // Supprimer un produit
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_produit = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_produit);
        return $stmt->execute();
    }
}

// Classe Stock
class Stock {    
    private $table = "stocks";

    public $id_stock;
    public $id_produit;
    public $quantite;
    public $date_enreg;
    public $status_;
    public $id_entreprise;

    public function __construct() {
        // 
    }

    // Enregistrer un stock
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET id_produit = ?, quantite = ?, date_enreg = ?, status_ = 'non validé', id_entreprise = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("issi", $this->id_produit, $this->quantite, $this->date_enreg, $this->id_entreprise);
        return $stmt->execute();
    }

    // Valider un stock
    public function validate() {
        $query = "UPDATE " . $this->table . " SET status_ = 'validé' WHERE id_stock = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_stock);
        return $stmt->execute();
    }

    // Annuler un stock
    public function cancel() {
        $query = "DELETE FROM " . $this->table . " WHERE id_stock = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_stock);
        return $stmt->execute();
    }
}

// Classe Vente
class Vente {    
    private $table = "ventes";

    public $id_vente;
    public $id_utilisateur;
    public $id_client;
    public $date_vente;
    public $prix;
    public $status__vente;
    public $id_entreprise;

    public function __construct() {
        // 
    }

    // Enregistrer une vente
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET id_utilisateur = ?, id_client = ?, date_vente = ?, prix = ?, status__vente = 'complète', id_entreprise = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("iissi", $this->id_utilisateur, $this->id_client, $this->date_vente, $this->prix, $this->id_entreprise);
        return $stmt->execute();
    }

    // Annuler une vente
    public function cancel() {
        $query = "UPDATE " . $this->table . " SET status__vente = 'annulée' WHERE id_vente = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("i", $this->id_vente);
        return $stmt->execute();
    }
}

// Classe Trace
class Trace {    
    private $table = "traces";

    public $id_trace;
    public $id_utilisateur;
    public $date_heure;
    public $libelle;

    public function __construct() {
        // 
    }

    // Enregistrer une trace
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET id_utilisateur = ?, date_heure = ?, libelle = ?";
        $stmt = HURO->prepare($query);
        $stmt->bind_param("iss", $this->id_utilisateur, $this->date_heure, $this->libelle);
        return $stmt->execute();
    }
}

?>
