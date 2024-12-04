<?php
// $message
$tellToUser = "";
// register
if (isset($_POST) and !empty($_POST) and $_POST != null and isset($_POST['save-acc'])) {
    $utilisateur = new Utilisateur($_POST['name'], $_POST['telephone'], $_POST['password'], null, 4);
    if ($utilisateur->register()) {
        if ($utilisateur->id_entreprise = $utilisateur->createEntreprise($_POST['business-name'], $_POST['business-adress'])) {
            // logo
            if (isset($_FILES['resume'])) {
                $entreprise = new Entreprise($utilisateur->telephone);
                $logo_name = $_FILES['resume']['name'];
                $logoEx = explode(".", $logo_name);
                $logo_name = $entreprise->nom . '.' . $logoEx[1];
                if (move_uploaded_file($_FILES['resume']['tmp_name'], "./protocoles/logo/" . $logo_name)) {
                    $entreprise->updateLogo($logo_name);
                    # code...
                }
                # code...
            }
            // produits
            if (isset($_FILES['resume_product'])) {
                $file_name = $_FILES['resume_product']['name'];
                $fileEx = explode(".", $file_name);
                if ($fileEx[1] == "csv") {
                    if ($handle = fopen($_FILES['resume_product']['tmp_name'], "r")) {
                        $row = fgetcsv($handle, 1000, ";");
                        while (($row = fgetcsv($handle, 1000, ";")) !== false) {
                            $product = new Produit(null, $utilisateur->id_entreprise, $row[0], $row[1], $row[2]);
                            $product->create();
                        }
                        # code...
                    }
                    # code...
                }
                # code...
            }
            // employers
            if (isset($_POST['resume_employer'])) {
                $tels = explode(",", $_POST['resume_employer']);
                for ($i = 0; $i < count($tels); $i++) {
                    $employer = new Utilisateur("Employer", $tels[$i], $tels[$i], $utilisateur->id_entreprise, 3);
                    $employer->register();
                    # code...
                }
                # code...
            }

            if (setcookie('andhisnameisjhoncena', $utilisateur->telephone . '$$$' . $utilisateur->mot_de_passe, time() + 24 * 60 * 60 * 30)) {
                header("Location: ./webapp-welcome.php?f");
                exit();
                # code...
            }
            # code...
        } else {
            // utilisateur failed
        }
        # code...
    }
};
// login
if (isset($_POST['login'])) {
    $utilisateur = new Utilisateur(null, $_POST['tel'], $_POST['password']);
    if ($utilisateur->authenticate()) {
        if (setcookie('andhisnameisjhoncena', $utilisateur->telephone . '$$$' . $_POST['password'], time() + 24 * 60 * 60 * 30)) {
            header("Location: ./webapp-welcome.php?f");
            exit();
            # code...
        }
        # code...
    } else {
        $tellToUser .= "Failed";
    }
    # code...
}
// Enregistrer un produit
if (isset($_POST['save-produit'])) {
    print_r($_POST);
    exit();
    # code...
}
// Enregistrer des produits avec Excel
if (isset($_POST['file_product'])) {
    $file_name = $_FILES['product_excel']['name'];
    $fileEx = explode(".", $file_name);
    if ($fileEx[1] == "csv") {
        if ($handle = fopen($_FILES['product_excel']['tmp_name'], "r")) {
            $row = fgetcsv($handle, 1000, ";");
            while (($row = fgetcsv($handle, 1000, ";")) !== false) {
                $product = new Produit(null, $utilisateur->id_entreprise, $row[0], $row[1], $row[2], null, $row[3], $row[4]);
                $product->create();
            }
            # code...
        }
        # code...
    }
    # code...
}
// Enregistrer un nouveau stock
if (isset($_POST['new_stock'])) {
    if (isset($_COOKIE['new_stock.php'])) {
        header("Location: new_stock.php");exit();
        # code...
    }
    setcookie("new_stock", uniqid(), time() + 60*60*12);
    header("Location: new_stock.php");exit();
    # code...
}
// Enregistrer les employers
if (!isset($_POST['add_user']) and $_SERVER['SCRIPT_NAME'] == '/huro/e_v.php') {
    header("Location: ./users.php?kjhgfghbevzjvhzvejbhnvbberbethegetr");exit();
    # code...
}
if (isset($_POST['add_user'])) {
    $ev = [];
    $e_tel = explode(",", $_POST['e_tel']);
    for ($i=0; $i < count($e_tel); $i++) {        
        if ($utilisateur->niveau_acces == 4) {
            $p = random_int(9999, 99999);
            $e = new Utilisateur(null, $e_tel[$i], $p, $entreprise->id_entreprise, $_POST['role']);
            if ($e->register()) {
                $ev[$i] = [$e_tel[$i], $p];
                # code...
            }
            # code...
        }
        # code...
    }
    # code...
}