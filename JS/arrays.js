var number = Number(prompt("Numero"));
var number2 = number;
var factores = [];
while (number < 1 || !Number(number)) {
    alert("no");
    var number = Number(prompt("Numero"));
}
for (let i = 1; i <= number; i++) {
    if (number % i === 0 && i != 1) {
        console.log(number + "/" + i);
        number /= i;
        console.log(number);
        factores.push(i);
        i = 1;
    }
}
console.log(factores);
factores.forEach(element => {
    console.log("Factor primo "+ element); 
});
factores.toString;