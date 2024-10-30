let numero=prompt("Escribe un numero");

if(isNaN(Number(numero))) {
    alert("No es un numero")
} else {
    if(numero % 2 === 0) {
        alert("El numero " + numero + " es par");
    } else {
        alert("El numero " + numero + " es impar");
    }
}