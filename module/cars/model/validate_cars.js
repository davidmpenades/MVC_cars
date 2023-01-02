// console.log("hola");
function validate_Num_bastidor(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9A-Z]{12}$/;

        return reg.test(texto);
    }
    return false;
}

function validate_Marca(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-zñ'\\s]/;

        return reg.test(texto);
    }
    return false;
}

function validate_Modelo(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-z0-9]/;
        return reg.test(texto);
    }
    return false;
}

function validate_Matricula(texto) {
    if (texto.length > 0) {
        var reg = /^([0-9]{4})([A-Z]{3})$/;
        return reg.test(texto);
    }
    return false;
}

function validate_kms(texto) {
    if (texto.length > 0) {
        var reg = /[0-9]/;
        return reg.test(texto);
    }
    return false;
}
function validate_Categoria(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}
function validate_Tipo(array) {
    var i;
    var ok = 0;
    for (i = 0; i < array.length; i++) {
        if (array[i].cheked) {
            ok = 1;
        }
    }
    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

// function validate_Tipo(array) {
//     var check = false;
//     for (var i = 0; l = array.option.length, o; i < l; i++) {
//         o = array.options[i];
//         if (o.selected) {
//             check = true;
//         }
//     }
//     return check;
// }

function validate_Comentarios(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-zñ'\\s]/;

        return reg.test(texto);
    }
    return false;
}

function validate_Fecha_alta(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_Color(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-z0-9]/;
        return reg.test(texto);
    }
    return false;
}

function validate_Extras(texto) {
    var i;
    var ok = 0;
    for (i = 0; i < texto.length; i++) {
        if (texto[i].cheked) {
            ok = 1;
        }
    }
    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}
function validate_Imagenes(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-z0-9]/;
        return reg.test(texto);
    }
    return false;
}
function validate_Precio(texto) {
    if (texto.length > 0) {
        var reg = /[0-9]/;
        return reg.test(texto);
    }
    return false;
}
function validate_Num_puertas(texto) {
    if (texto.length > 0) {
        var reg = /[0-9]/;
        return reg.test(texto);
    }
    return false;
}
function validate_Ciudad(texto) {
    if (texto.length > 0) {
        var reg = /[A-Za-z0-9]/;
        return reg.test(texto);
    }
    return false;
}
function validate_Latitud(texto) {
    if (texto.length > 0) {
        var reg = /[0-9]+(\.[0-9]{1,7})/;
        return reg.test(texto);
    }
    return false;
}
function validate_Longitud(texto) {
    if (texto.length > 0) {
        var reg = /[-,0-9]+(\.[0-9]{1,7})/;
        return reg.test(texto);
    }
    return false;
}


function validate() {
    // console.log("hola validate js");
    // return true;
    var check = true;

    var v_Num_bastidor = document.getElementById('Num_bastidor').value;
    var v_Marca = document.getElementById('Marca').value;
    var v_Modelo = document.getElementById('Modelo').value;
    var v_Matricula = document.getElementById('Matricula').value;
    var v_kms = document.getElementById('kms').value;
    var v_Categoria = document.getElementsByName('Categoria[]');
    var v_Tipo = document.getElementsById('Tipo[]');
    var v_Comentarios = document.getElementById('Comentarios').value;
    var v_Fecha_alta = document.getElementById('Fecha_alta').value;
    var v_Color = document.getElementById('Color').value;
    var v_Extras = document.getElementById('Extras[]');
    var v_Imagenes = document.getElementById('Imagenes').value;
    var v_Precio = document.getElementById('Precio').value;
    var v_Num_puertas = document.getElementById('Num_puertas').value;
    var v_Ciudad = document.getElementById('Ciudad').value;
    var v_Latitud = document.getElementById('Latitud').value;
    var v_Longitud = document.getElementById('Longitud').value;

    var r_Num_bastidor = validate_Num_bastidor(v_Num_bastidor);
    var r_Marca = validate_Marca(v_Marca);
    var r_Modelo = validate_Modelo(v_Modelo);
    var r_Matricula = validate_Matricula(v_Matricula);
    var r_kms = validate_kms(v_kms);
    var r_Categoria = validate_Categoria(v_Categoria);
    var r_Tipo = validate_Tipo(v_Tipo);
    var r_Comentarios = validate_Comentarios(v_Comentarios);
    var r_Fecha_alta = validate_Fecha_alta(v_Fecha_alta);
    var r_Color = validate_Color(v_Color);
    var r_Extras = validate_Extras(v_Extras);
    var r_Imagenes = validate_Imagenes(v_Imagenes);
    var r_Precio = validate_Precio(v_Precio);
    var r_Num_puertas = validate_Num_puertas(v_Num_puertas);
    var r_Ciudad = validate_Ciudad(v_Ciudad);
    var r_Latitud = validate_Latitud(v_Latitud);
    var r_Longitud = validate_Longitud(v_Longitud);



    if (!r_Num_bastidor) {
        document.getElementById('error_Num_bastidor').innerHTML = " * El número de bastidor introducido no es válido";
        check = false;
    } else {
        document.getElementById('error_Num_bastidor').innerHTML = "";
    }
    if (!r_Marca) {
        document.getElementById('error_Marca').innerHTML = " * La Marca introducida no es válida";
        check = false;
    } else {
        document.getElementById('error_Marca').innerHTML = "";
    }
    if (!r_Modelo) {
        document.getElementById('error_Modelo').innerHTML = " * El modelo introducido no es válido";
        check = false;
    } else {
        document.getElementById('error_Modelo').innerHTML = "";
    }
    if (!r_Matricula) {
        document.getElementById('error_Matricula').innerHTML = " * La matrícula introducida no es válida";
        check = false;
    } else {
        document.getElementById('error_Matricula').innerHTML = "";
    }
    if (!r_kms) {
        document.getElementById('error_kms').innerHTML = " * Los kilómetros introducidos no son válidos";
        check = false;
    } else {
        document.getElementById('error_kms').innerHTML = "";
    }
    if (!r_Categoria) {
        document.getElementById('error_Categoria').innerHTML = " * No has seleccionado ningúna categoria de vehículo";
        check = false;
    } else {
        document.getElementById('error_Categoria').innerHTML = "";
    }
    if (!r_Tipo) {
        document.getElementById('error_Tipo').innerHTML = " * No has seleccionado ningún tipo de vehículo";
        check = false;
    } else {
        document.getElementById('error_Tipo').innerHTML = "";
    }

    if (!r_Comentarios) {
        document.getElementById('error_Comentarios').innerHTML = " * No has rellenado el campo de comentarios";
        check = false;
    } else {
        document.getElementById('error_Comentarios').innerHTML = "";
    }

    if (!r_Fecha_alta) {
        document.getElementById('error_Fecha_alta').innerHTML = " * No has introducido ninguna fecha";
        check = false;
    } else {
        document.getElementById('error_Fecha_alta').innerHTML = "";
    }

    if (!r_Color) {
        document.getElementById('error_Color').innerHTML = " * No has rellenado el campo de color";
        check = false;
    } else {
        document.getElementById('error_Color').innerHTML = "";
    }

    if (!r_Extras) {
        document.getElementById('error_Extras').innerHTML = " * Debes seleccionar almenos uno de los extra";
        check = false;
    } else {
        document.getElementById('error_Extras').innerHTML = "";
    }
    if (!r_Imagenes) {
        document.getElementById('error_Imagenes').innerHTML = " * Debes introducir al menos una fotografia";
        check = false;
    } else {
        document.getElementById('error_Imagenes').innerHTML = "";
    }
    if (!r_Precio) {
        document.getElementById('error_Precio').innerHTML = " * Debes introducir el precio del vehiculo";
        check = false;
    } else {
        document.getElementById('error_Precio').innerHTML = "";
    }
    if (!r_Num_puertas) {
        document.getElementById('error_Num_puertas').innerHTML = " * Debes introducir el numero de puertas del vehiculo";
        check = false;
    } else {
        document.getElementById('error_Num_puertas').innerHTML = "";
    }
    if (!r_Ciudad) {
        document.getElementById('error_Ciudad').innerHTML = " * Debes introducir la ciudad donde se encuentra el vehiculo";
        check = false;
    } else {
        document.getElementById('error_Ciudad').innerHTML = "";
    }
    if (!r_Latitud) {
        document.getElementById('error_Latitud').innerHTML = " * Debes introducir la Latitud donde se encuentra el vehiculo";
        check = false;
    } else {
        document.getElementById('error_Latitud').innerHTML = "";
    }
    if (!r_Longitud) {
        document.getElementById('error_Longitud').innerHTML = " * Debes introducir la Longitud donde se encuentra el vehiculo";
        check = false;
    } else {
        document.getElementById('error_Longitud').innerHTML = "";
    }


    return check;
}
