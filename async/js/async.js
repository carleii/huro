'use strict';
loadProducts();
loadStock();
// Enregistrer un produit
$("#enregistrer-produit").on("submit", function (e) {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/add_produit.php", true);
    xhr.setRequestHeader('Cache-Control', 'no-cache, no-store, max-age=0');
    xhr.setRequestHeader('Expires', 'Thu, 1 Jan 1970 00:00:00 GMT');
    xhr.setRequestHeader('Pragma', 'no-cache');
    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                if (xhr.response == 1) {
                    notyf.success("Le produit a été enregistré dans la base de données");
                    loadProducts();
                } else {
                    console.log(xhr.response);                    
                    notyf.error("Il semblerait que ce produit existe déjà.");
                }

            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});

// Charger les produits dans le tableau
function loadProducts() {
    let ul = document.getElementById("product-list");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/fetch_produit.php?ktsp='heyf'", true);
    xhr.setRequestHeader('Cache-Control', 'no-cache, no-store, max-age=0');
    xhr.setRequestHeader('Expires', 'Thu, 1 Jan 1970 00:00:00 GMT');
    xhr.setRequestHeader('Pragma', 'no-cache');

    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                if (xhr.response != "") {
                    ul.innerHTML = xhr.response;
                } else {
                    notyf.error("Vous n'avez aucun produit enregistré.");
                }

            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
}


// Enregistrer un nouveau stock
$("#enregistrer-stock").on("submit", function (e) {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/add_stock.php", true);
    xhr.setRequestHeader('Cache-Control', 'no-cache, no-store, max-age=0');
    xhr.setRequestHeader('Expires', 'Thu, 1 Jan 1970 00:00:00 GMT');
    xhr.setRequestHeader('Pragma', 'no-cache');

    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log(xhr.response);                
                if (xhr.response == 1) {
                    notyf.success("Le stock a été enregistré dans la base de données");
                    loadStock();
                } else {
                    notyf.error("Cet enregistrement a déjà été fait.");
                }

            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});

// Charger les enregistrement du stock encours dans le tableau
function loadStock() {
    let ul = document.getElementById("stock-list");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/fetch_stock.php", true);
    xhr.setRequestHeader('Cache-Control', 'no-cache, no-store, max-age=0');
    xhr.setRequestHeader('Expires', 'Thu, 1 Jan 1970 00:00:00 GMT');
    xhr.setRequestHeader('Pragma', 'no-cache');

    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                if (xhr.response != "") {
                    ul.innerHTML = xhr.response;
                } else {
                    notyf.error("Vous n'avez aucun stock en cours enregistré.");
                }

            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
}

// Enregistrer une vente
$("#enregistrer-sell").on("submit", function (e) {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/add_sell.php", true);
    xhr.setRequestHeader('Cache-Control', 'no-cache, no-store, max-age=0');
    xhr.setRequestHeader('Expires', 'Thu, 1 Jan 1970 00:00:00 GMT');
    xhr.setRequestHeader('Pragma', 'no-cache');

    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log(xhr.response);                
                if (xhr.response == 1) {
                    notyf.success("Enregistré dans la base de données");
                    // loadStock();
                } else {
                    notyf.error("Cet enregistrement a déjà été fait.");
                }

            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});
