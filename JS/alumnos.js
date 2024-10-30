let quierealumnos = true;
let arraysalumnos = [];
let grupos = [[]];
let nomore = [];
do {
    let alumno = prompt("Introduce un alumno / Para terminar escribe 'fin'");
    
    if (alumno === "fin") {
        quierealumnos = false;
    } else if (!arraysalumnos.includes(alumno)) {
        arraysalumnos.push(alumno);

        if (grupos[grupos.length - 1].length === 3) {
            grupos.push([]); 
        }
        grupos[grupos.length - 1].push(alumno);

    } else {
        alert("Este alumno ya existe");
    }

} while (quierealumnos);

for (const grupo of grupos) {
    console.log(grupo);
    if (grupo.length < 3) {
        console.log("ta pocho");
        
        for (const element of grupo) {
            let rand;
            do {
                rand = Math.floor(Math.random() * (grupos.length - 1));
                console.log(rand);
            } while (nomore.includes(rand) || rand === grupos.length -1);

            grupos[rand].push(element);
            nomore.push(rand);
        }
        grupos.pop();
    }
}

console.log("Lista de todos los alumnos:", arraysalumnos);
console.log("Grupos de alumnos:", grupos);


console.log("Lista de todos los alumnos:", arraysalumnos);
console.log("Grupos de alumnos:", grupos);
