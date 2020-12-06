var carrito = new Array();
var codigoArray = 0;
var nombreArray = "";
var cantidadArray = 0;
var precioTotalArray = 0;
var precioUnidadArray = 0;


function cambiarPrecio(codigo) {
    const precioUnidad = document.querySelector('#precio' + codigo),
        precioTotal = document.querySelector('#precioTotal' + codigo),
        cantidad = document.querySelector('#cantidad' + codigo);

    prueba = "La cambie dentro de cambiar precio";
    cantidad.addEventListener('change', (e) => {
        let valorInput = e.target.value;
        precioTotal.value = precioUnidad.value * valorInput;
    });

}




