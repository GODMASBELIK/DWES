const bienvenido = function () {
    return "Bienvenido de nuevo, "; 
};

const usuario  = function (hola) {
    console.log(hola()+ "Javier");
}

usuario(bienvenido);