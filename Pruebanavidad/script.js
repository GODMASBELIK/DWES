// El archivo js...
// Así os ahorro el gran trabajo y sudor que supone crearlo y así Miguel está obligado a no integrarlo en el HTML


console.log(a2)
function elem_visibles() {
var audioElement = document.querySelector('audio');
var a2 = document.querySelector('img.destellos');
var a3 = document.querySelector('img.hohoho');
var a4 = document.querySelector('img.luna');
    a2.classList.toggle('destellosnew');
    a3.classList.toggle('hohoho2');
    a4.classList.toggle('luna2');
    audioElement.play()
}