/*
    Sélectionne la liste déroulante
    Écoute l'événement dans la liste déroulante
*/
const productDropdown = document.getElementById('product');

productDropdown.addEventListener('change', function() {
    // Récupére la valeur sélectionnée (nom du produit)
    const selectedProduct = this.value;

    //Récupère la description et l'image en fonction du produit
    const productInfo = getProductInfo(selectedProduct);

    // Mets à jour la description
    document.getElementById('description').value = productInfo.description;

    // Mets à jour l'image 
    document.getElementById('productImage').src = productInfo.image_path;
});
