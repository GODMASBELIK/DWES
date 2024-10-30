/*
Crea una aplicacion web que pida, en sendos cuadros de lectura de datos: el nombre, los apellidos
el salario (numero con decimales) y la edad de una persona (un numero)

Supondremos que el usuario escribe los datos correctamente (no los validaremos)
La pagina indicara el nombre y apellidos escritos, la edad y el salario (una vez recalculado con lo que indican los puntos siguientes)

si el salario es mayor de 2000 euros, no cambiara

Si el salario esta entre 1000 y 2000

-Si ademas la edad es mayor de 45 años, se sube 3%

-Si la edad es menor de 45 o igual, se sube un 10%

-Si el salario indicado es menor de 1000

- Los menores de 30 años cobraran exactamente 1100 euros

- Si la edad es de 30 a 45 años, el salrio sube un 3%

- A los mayores de 45 años, sube un 15%
*/

let nombre=prompt("Escribe un nombre");
let apellido=prompt("Escribe tu primer apellido");
let apellido2=prompt("Escribe tu segundo apellido");
let salario=Number(prompt("Escribe un salario"));

if(isNaN(Number(salario))) {
    alert("No es un numero")
} 
let edad=Number(prompt("Escribe un edad"));

if(isNaN(Number(edad))) {
    alert("No es un numero")
} 

if (salario >= 2000) {
    salario = salario;
}

if (salario<= 2000 && salario >= 1000) {
    if (edad >= 45) {
        let porcentajeSalario = salario * 0.03;
        salario += porcentajeSalario;
        console.log("porcentaje "+ porcentajeSalario);
        console.log("salario: "+ salario);

    } else {
        let porcentajeSalario = salario * 0.1;
        salario += porcentajeSalario;
        console.log("porcentaje "+ porcentajeSalario);
        console.log("salario: "+ salario);

    }
} else {
    if (edad < 30) {
        salario = 1100;
    }

    if (edad >= 30 && edad <= 45) {
        let porcentajeSalario = salario * 0.03;
        salario += porcentajeSalario;
        console.log("porcentaje "+ porcentajeSalario);
        console.log("salario: "+ salario);

    } else {
        let porcentajeSalario = salario * 0.15;
        salario += porcentajeSalario;
        console.log("porcentaje "+ porcentajeSalario);
        console.log("salario: "+ salario);

    }
}

alert("salario: " + salario);

