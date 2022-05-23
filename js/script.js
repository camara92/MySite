var slide = new Array(

    "https://picsum.photos/600/400?random=2",
    "https://picsum.photos/600/400?random=3",
    "https://picsum.photos/600/400?random=4",
    "https://picsum.photos/600/400?random=5");
var numero = 0;

function ChangeSlide(sens) {
    //boucler les  images qui se trouvent dans la data d'images voir scripts array 

    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
    //ici en bas on peut slider par un timer 
    //setInterval("ChangeSlide(1)", 5000);
}

var createShop = function () {
	var shop = document.getElementById("boutique");
	for(var i = 0; i < catalogue.length; i++) {
		shop.appendChild(createProduct(catalogue[i], i));
	}
}