let fecha = new Date();
let nombre = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
let dia = fecha.getDay()

if (dia === 0 || dia === 6 || (fecha.getHours() < 9 || fecha.getHours() > 14)) {
    document.write("<h1>Pagina cerrada</h1>");
    document.write("<p>Prueba otro dia entresemana desde las 9:00 mañana - 2:00 de la tarde</p>");
} else {
    document.write("<h1>Bienvenido</h1>");
    document.write("<p>Hoy es " + nombre[dia]+ " y la hora es " + fecha.getHours() + ":" + fecha.getMinutes() + "</p>");

}