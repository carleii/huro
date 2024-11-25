$("#enregistrer-produit").on("submit", function (e) {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/add_produit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log((xhr.response));
                if (xhr.response == 1) {
                    notyf.success("Le produit a été enregistré dans la base de données");
                }else{
                    notyf.error("Il semblerait que ce produit existe déjà."); 
                }
                
            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});
