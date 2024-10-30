var array = [];
var text = "";
for (let i = 0; i < 20; i++) {
    array.push(Math.floor(Math.random()*20)+1);
}

for (const element of array) {
for (let i = element; i > 0; i--) {
    text += "*";
}
console.log(element + " " + text);
text = "";

}