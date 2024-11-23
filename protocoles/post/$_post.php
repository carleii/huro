<?php
$HURO = connectDb();
if(isset($_POST) and !empty($_POST) and $_POST != null and isset($_POST['save-acc'])){
    print_r($_POST);print_r($_FILES);exit();
$utilisateur = new Utilisateur($_POST['name'], null, $_POST['telephone'], $_POST['password']);
if ($utilisateur->register()) {
    if ($utilisateur->createEntreprise($_POST['business-name'], $_POST['business-adress'])) {
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
        if (setcookie('andhisnameisjhoncena', $utilisateur->id_utilisateur, time() + 24*60*60*360)) {
            header("Location: ./auth-register.php?f");exit();
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