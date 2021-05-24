
function facturar() {
    var nombreCliente = $("nombreCliente").val();
    var cedula = $("cedula").val();
    var fecha = $("fecha").val();
    var producto = $("producto").val();
    var descripcion = $("descripcion").val();
    var cantidad = $("cantidad").val();
    var valor = $("valor").val();

    var resultado = "";
    
    if ($("nombreCliente").val() === ""){
        resultado = resultado + "<br> * debe ingresar el nombre del cliente";
    }

    if($("cedula").val() === ""){
        resultado = resultado + "<br> * debe ingresar el numero de cedula";
    }

    if ($("fecha").val() === "") {
        resultado = resultado + "<br> * Debe ingresar fecha del documento contable";
    }

    if ($("producto").val() === "") {
        resultado = resultado + "<br> * Debe ingresar el nombre del producto";
    }

    if($("descripcion").val() === "") {
        resultado = resultado + "<br> * Debe ingresar la descripción del producto";
    }

    if ($("cantidad").val() === "") {
        resultado += "<br> * Debe ingresar la cantidad de items del documento contable";
    }

    if ($("valor").val() === "") {
        resultado = resultado + "<br> * Debe ingresar valor del documento contable";
    }

    











    