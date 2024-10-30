var aleatorio = parseInt(Math.random() * 100) + 1;
var number = 1;
var si = true;
console.log(aleatorio);
var quepringado = 0;
while (si) {
    if (Number(number) && number > 0 && number <= 100) {
        var number = prompt("Adivina el numero del 1-100");
        
        if (number == aleatorio && si && number > 0 && number <= 100) {
            alert("Has acertado, el numero era: " + aleatorio);
            alert("Numero de intentos: " + quepringado);
            si = confirm("¿Quieres volver a jugar?");
        }
        
        if (number > aleatorio && si && number > 0 && number <= 100) {
            alert("Es menor el numero");
            quepringado++;
        }
        if (number < aleatorio && si && number > 0 && number <= 100) {
            alert("Es mayor el numero");
            quepringado++;
        }
    } else {
        if (number === null) {
            si = false;
        } else {
            alert("Formato incorrecto");
            var number = 1;
        }

  }
}
