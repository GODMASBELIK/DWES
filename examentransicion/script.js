// El archivo js...
// Así os ahorro el gran trabajo y sudor que supone crearlo y así Miguel está obligado a no integrarlo en el HTML
var a2 = document.querySelector('img.copos');

var audioElement = document.querySelector('audio');

console.log(a2);
console.log(audioElement);
function nevar() {
    a2.classList.add('hohoho');
    setTimeout(() => {
        a2.classList.add('hohoho2');
        setTimeout(() => {
            a2.classList.remove('hohoho');

            setTimeout(() => {
                a2.classList.remove('hohoho');
                a2.classList.remove('hohoho2');
            }, 2000);
        }, 2000);
    }, 7000);

    audioElement.play()

    
}