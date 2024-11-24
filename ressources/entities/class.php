<?php
// Classe de base Utilisateur
class Utilisateur
{
    protected $HURO;
    protected $table = "utilisateur";
    public $id_utilisateur;
    public $nom;
    public $email;
    public $telephone;
    public $mot_de_passe;
    public $niveau_acces;
    public $status_;
    public $id_entreprise;

    public function __construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null)
    {
        $this->HURO = connectDb();
        $this->nom = mysqli_real_escape_string($this->HURO, $nom);
        $this->telephone = mysqli_real_escape_string($this->HURO, $telephone);
        $this->mot_de_passe = md5(mysqli_real_escape_string($this->HURO, $mot_de_passe));
        $this->id_entreprise = mysqli_real_escape_string($this->HURO, $id_entreprise);
        $this->niveau_acces = $niveau_acces;
    }

    // Méthode pour s'inscrire
    public function register()
    {
        $query = "INSERT INTO " . $this->table . " (nom, telephone, mot_de_passe, id_entreprise, niveau_acces) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("sssii", $this->nom, $this->telephone, $this->mot_de_passe, $this->id_entreprise, $this->niveau_acces);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
            # code...
        }
    }

    // Méthode pour s'authentifier
    public function authenticate()
    {
        $query = "SELECT nom, mot_de_passe, status_, niveau_acces, id_entreprise FROM " . $this->table . " WHERE telephone = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("s", $this->telephone);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->nom, $stored_pass, $this->status_, $this->niveau_acces, $this->id_entreprise);

        if ($stmt->fetch()) {
            return ($this->mot_de_passe == $stored_pass && $this->status_ != 'revoque') ? true : false ;            
        }
        return false;
    }

    // Révoquer un utilisateur
    public function revoke()
    {
        $query = "UPDATE " . $this->table . " SET status_ = 'revoque' WHERE id_utilisateur = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_utilisateur);
        return $stmt->execute();
    }

    // Créer une entreprise (Admin1)
    public function createEntreprise($nom, $adresse)
    {
        $entreprise = new Entreprise($this->telephone);
        $entreprise->nom = $nom;
        $entreprise->adresse = $adresse;
        return $entreprise->create();
    }
}

// Classe Admin1 (hérite de Utilisateur)
class Admin1 extends Utilisateur
{
    public function __construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null)
    {
        parent::__construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null);
    }

    // Créer un produit
    public function createProduit($id_produit, $id_entreprise, $nom, $prix_standard, $prix_minimum, $nature, $unite, $quantite_dispo)
    {
        $produit = new Produit($id_produit, $id_entreprise, $nom, $prix_standard, $prix_minimum, $nature, $unite, $quantite_dispo);       
        return $produit->create();
    }

    // Enregistrer un stock
    public function enregistrerStock($id_produit, $quantite, $date_enreg, $id_entreprise)
    {
        $stock = new Stock;
        $stock->id_produit = $id_produit;
        $stock->quantite = $quantite;
        $stock->date_enreg = $date_enreg;
        $stock->id_entreprise = $id_entreprise;
        return $stock->create();
    }
}

// Classe Admin2 (hérite de Admin1)
class Admin2 extends Admin1
{
    public function __construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null)
    {
        parent::__construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null);
    }

    // Ajouter un client
    public function ajouterClient($nom, $numero, $adresse, $id_entreprise)
    {
        $client = new Client;
        $client->nom = $nom;
        $client->numero = $numero;
        $client->adresse = $adresse;
        $client->id_entreprise = $id_entreprise;
        return $client->create();
    }

    // Modifier les informations d'un client
    public function modifierClient($id_client, $nom, $numero, $adresse)
    {
        $client = new Client;
        $client->id_client = $id_client;
        $client->nom = $nom;
        $client->numero = $numero;
        $client->adresse = $adresse;
        return $client->update();
    }

    // Enregistrer une vente
    public function enregistrerVente($id_utilisateur, $id_client, $date_vente, $prix, $id_entreprise)
    {
        $vente = new Vente;
        $vente->id_utilisateur = $id_utilisateur;
        $vente->id_client = $id_client;
        $vente->date_vente = $date_vente;
        $vente->prix = $prix;
        $vente->id_entreprise = $id_entreprise;
        return $vente->create();
    }

    // Valider un stock
    public function validerStock($id_stock)
    {
        $stock = new Stock;
        $stock->id_stock = $id_stock;
        return $stock->validate();
    }
}

// Classe Admin3 (hérite de Admin2)
class Admin3 extends Admin2
{
    public function __construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null)
    {
        parent::__construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null);
    }

    // Annuler une vente
    public function annulerVente($id_vente)
    {
        $vente = new Vente;
        $vente->id_vente = $id_vente;
        return $vente->cancel();
    }

    // Consulter les rapports financiers généraux
    public function consulterRapportsFinanciersGeneraux($date)
    {
        // Logique pour consulter les rapports financiers généraux à une date donnée
        // Cela dépend des détails du rapport financier, que vous devrez implémenter
        return "Rapport financier général pour la date: " . $date;
    }
}

// Classe Administrateur (hérite de Admin3)
class Administrateur extends Admin3
{
    public function __construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null)
    {
        parent::__construct($nom, $telephone, $mot_de_passe, $id_entreprise = null, $niveau_acces = null);
    }

    // Supprimer un produit
    public function supprimerProduit($id_produit)
    {
        $produit = new Produit;
        $produit->id_produit = $id_produit;
        return $produit->delete();
    }

    // Supprimer une vente
    public function supprimerVente($id_vente)
    {
        $vente = new Vente;
        $vente->id_vente = $id_vente;
        return $vente->delete();
    }

    // Supprimer un client
    public function supprimerClient($id_client)
    {
        $client = new Client;
        $client->id_client = $id_client;
        return $client->delete();
    }

    // Revoquer un utilisateur
    public function revokeUtilisateur($id_utilisateur) {}

    // Non révoquer un utilisateur
    public function nonRevokeUtilisateur($id_utilisateur)
    {
        $query = "UPDATE " . $this->table . " SET status_ = 'actif' WHERE id_utilisateur = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $id_utilisateur);
        return $stmt->execute();
    }

    // Créer une entreprise
    public function creerEntreprise($nom, $adresse)
    {
        return parent::createEntreprise($nom, $adresse);
    }
}

// Classe Client
class Client
{
    protected $HURO;
    private $table = "client";

    public $id_client;
    public $nom;
    public $adresse;
    public $numero;
    public $id_entreprise;

    public function __construct()
    {
        $this->HURO = connectDb();
        // 
    }

    // Créer un client
    public function create() {}

    // Update un client
    public function update() {}

    // Delete un client
    public function delete() {}
}

// Classe Entreprise
class Entreprise
{
    protected $HURO;
    private $table = "entreprise";

    public $id_entreprise;
    public $nom;
    public $adresse;
    public $telephone_utilisateur;
    public $logo;

    public function __construct($telephone_utilisateur)
    {
        $this->HURO = connectDb();
        $this->telephone_utilisateur = $telephone_utilisateur;
        $query = "SELECT id_entreprise, nom_entreprise, telephone_utilisateur, logo FROM " . $this->table . " WHERE telephone_utilisateur = ?  ";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param('s', $telephone_utilisateur);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() != 0) {
            $stmt->bind_result($this->id_entreprise, $this->nom, $this->telephone_utilisateur, $this->logo);
            $stmt->fetch();
            # code...
        }
        # code...
        // 
    }

    // Créer une entreprise
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " (nom_entreprise, adresse_entreprise, telephone_utilisateur) VALUES (?, ?, ?)";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("ssi", $this->nom, $this->adresse, $this->telephone_utilisateur);
        if ($stmt->execute()) {
            // Get id_enterprise
            $query = "SELECT id_entreprise FROM " . $this->table . " WHERE telephone_utilisateur = ?";
            $stmt = $this->HURO->prepare($query);
            $stmt->bind_param('i', $this->telephone_utilisateur);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($this->id_entreprise);
            if ($stmt->fetch()) {
                // update utilisateur_id_entreprise
                $query = "UPDATE utilisateur SET id_entreprise = ? WHERE telephone = ? ";
                $stmt = $this->HURO->prepare($query);
                $stmt->bind_param("is", $this->id_entreprise, $this->telephone_utilisateur);
                $stmt->execute();
                return $this->id_entreprise;
                # code...
            } else {
                return false;
            }
        }
        return false;
    }

    // Supprimer une entreprise
    public function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_entreprise = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_entreprise);
        return $stmt->execute();
    }

    // uptade logo
    public function updateLogo($path)
    {
        $query = "UPDATE " . $this->table . " SET logo = ? WHERE telephone_utilisateur = ? ";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("ss", $path, $this->telephone_utilisateur);
        return $stmt->execute();
    }
}

// Classe Produit
class Produit
{
    protected $HURO;
    private $table = "produit";

    public $id_produit;
    public $nom;
    public $nature;
    public $unite;
    public $prix_standard;
    public $prix_minimum;
    public $quantite_dispo;
    public $id_entreprise;

    public function __construct($id_produit, $id_entreprise, $nom, $prix_standard, $prix_minimum, $nature = null, $unite = null, $quantite_dispo = 0)
    {
        $this->HURO = connectDb();
        if (!is_null($id_produit)) {
            $query = "SELECT id_produit, nom_produit, nature, prix_standard, prix_minimum, quantite_disponible, id_entreprise FROM " . $this->table . " WHERE id_produit = ?  ";
            $stmt = $this->HURO->prepare($query);
            $stmt->bind_param('i', $id_produit);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows() != 0) {
                $stmt->bind_result($this->id_produit, $this->nom, $this->nature, $this->prix_standard, $this->prix_minimum, $this->quantite_dispo, $this->id_entreprise);
                $stmt->fetch();
                # code...
            }
            # code...
        }else{
            $this->nom = $nom;
            $this->prix_standard = $prix_standard;
            $this->prix_minimum = $prix_minimum;
            $this->nature = $nature;
            $this->unite = $unite;
            $this->quantite_dispo = $quantite_dispo;
            $this->id_entreprise = $id_entreprise;
        }

        // 
    }

    // Créer un produit
    public function create()
    {
        $query = "INSERT INTO " . $this->table . "(nom_produit, prix_standard, prix_minimum, id_entreprise, nature, unite, quantite_disponible) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("siiissi", $this->nom, $this->prix_standard, $this->prix_minimum, $this->id_entreprise, $this->nature, $this->unite, $this->quantite_dispo);
        return $stmt->execute();
    }

    // Modifier un produit
    public function update()
    {
        $query = "UPDATE " . $this->table . " SET nom = ?, nature = ?, unite = ?, prix_standard = ?, prix_minimum = ? WHERE id_produit = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("sssssi", $this->nom, $this->nature, $this->unite, $this->prix_standard, $this->prix_minimum, $this->id_produit);
        return $stmt->execute();
    }

    // Supprimer un produit
    public function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_produit = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_produit);
        return $stmt->execute();
    }
}

// Classe Stock
class Stock
{
    protected $HURO;
    private $table = "stock";

    public $id_stock;
    public $id_produit;
    public $quantite;
    public $date_enreg;
    public $status_;
    public $id_entreprise;

    public function __construct()
    {
        $this->HURO = connectDb();
        // 
    }

    // Enregistrer un stock
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " SET id_produit = ?, quantite = ?, date_enreg = ?, status_ = 'non validé', id_entreprise = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("issi", $this->id_produit, $this->quantite, $this->date_enreg, $this->id_entreprise);
        return $stmt->execute();
    }

    // Valider un stock
    public function validate()
    {
        $query = "UPDATE " . $this->table . " SET status_ = 'validé' WHERE id_stock = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_stock);
        return $stmt->execute();
    }

    // Annuler un stock
    public function cancel()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_stock = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_stock);
        return $stmt->execute();
    }
}

// Classe Vente
class Vente
{
    protected $HURO;
    private $table = "vente";

    public $id_vente;
    public $id_utilisateur;
    public $id_client;
    public $date_vente;
    public $prix;
    public $status__vente;
    public $id_entreprise;

    public function __construct()
    {
        $this->HURO = connectDb();
        // 
    }

    // Enregistrer une vente
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " SET id_utilisateur = ?, id_client = ?, date_vente = ?, prix = ?, status__vente = 'complète', id_entreprise = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("iissi", $this->id_utilisateur, $this->id_client, $this->date_vente, $this->prix, $this->id_entreprise);
        return $stmt->execute();
    }

    // Annuler une vente
    public function cancel()
    {
        $query = "UPDATE " . $this->table . " SET status__vente = 'annulée' WHERE id_vente = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_vente);
        return $stmt->execute();
    }

    // Supprimer une vente
    public function delete()
    {
        $query = "UPDATE " . $this->table . " SET status__vente = 'annulée' WHERE id_vente = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("i", $this->id_vente);
        return $stmt->execute();
    }
}

// Classe Trace
class Trace
{
    protected $HURO;
    private $table = "trace";

    public $id_trace;
    public $id_utilisateur;
    public $date_heure;
    public $libelle;

    public function __construct()
    {
        $this->HURO = connectDb();
        // 
    }

    // Enregistrer une trace
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " SET id_utilisateur = ?, date_heure = ?, libelle = ?";
        $stmt = $this->HURO->prepare($query);
        $stmt->bind_param("iss", $this->id_utilisateur, $this->date_heure, $this->libelle);
        return $stmt->execute();
    }
}
