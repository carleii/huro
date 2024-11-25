$("#enregistrer-produit").on("submit", function (e) {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/add_produit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log((xhr.response));
                notyf.error(xhr.response);
            }
        }
    }
    let formData = new FormData(this);
    xhr.send(formData);
});
