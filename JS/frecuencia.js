const array = [];
const map = new Map();

 for (let i = 0; i < 10000; i++) {
     array.push(Math.floor(Math.random()*10) + 1);
}

console.log(array);
array.sort();
for (const valor of array) {
    if (map.has(valor)) {
        map.set(valor, map.get(valor) + 1);
    } else {

        map.set(valor, 0);
    }
}

for (const [clave, contador] of map) {
    console.log(`${clave}: ${contador}`);
}
