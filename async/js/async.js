'use strict';
loadProducts();
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
                    loadProducts();
                }else{
                    notyf.error("Il semblerait que ce produit existe déjà."); 
                }
                
            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});

function loadProducts(){
    let ul = document.getElementById("product-list");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/fetch_produit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log((xhr.response));
                if (xhr.response != "") {
                    ul.innerHTML = xhr.response;
                }else{
                    notyf.error("Vous n'avez aucun produit enregistré."); 
                }
                
            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
}