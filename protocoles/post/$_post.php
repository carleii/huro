<?php
$HURO = connectDb();
if(isset($_POST) and !empty($_POST) and $_POST != null and isset($_POST['save-acc'])){
$utilisateur = new Utilisateur($_POST['name'], $_POST['telephone'], $_POST['password'], null, 1);
if ($utilisateur->register()) {
    if ($utilisateur->id_entreprise = $utilisateur->createEntreprise($_POST['business-name'], $_POST['business-adress'])) {
        // logo
        if (isset($_FILES['resume'])) {
            $entreprise = new Entreprise($utilisateur->telephone);
            $logo_name = $_FILES['resume']['name'];
            $logoEx = explode(".", $logo_name);
            $logo_name = $entreprise->nom.'.'.$logoEx[1];
            if (move_uploaded_file($_FILES['resume']['tmp_name'], "./protocoles/logo/".$logo_name)) {                
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
                if ($handle = fopen($_FILES['resume_product']['tmp_name'],"r")) {
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
           for ($i=0; $i < count($tels); $i++) { 
                $employer = new Utilisateur("Employer", $tels[$i], $tels[$i], $utilisateur->id_entreprise, 2);
                $employer->register();
            # code...
           }
        # code...
        }   
                 
        if (setcookie('andhisnameisjhoncena', $utilisateur->telephone, time() + 24*60*60*30)) {
            header("Location: ./?f");exit();
            # code...
        }
        # code...
    }else {
        // utilisateur failed
        die(mysqli_error($HURO));
    }
    # code...
}
};