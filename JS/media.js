var media = 0;
var count = 0;
var STOP = true;
do {

    var numero = Number(prompt("Pon numero"));
    if (Number(numero) || numero === 0) {
        if (numero = isNaN) {
            STOP = false;
            alert("ahora por tonto ni te doy la media");
        }
        if (numero === 0) {
            STOP = false;
            media = media/ count;
            alert(media);
        } else {
            media += numero;
            count++;
            console.log(media, count);
        }
    } else {
        alert("nope");
    }

}
while(STOP) 
