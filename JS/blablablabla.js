function Punto(x,y) {
    this.x = x;
    this.y = y;

    this.cambiar=(x,y) => {
        this.x=x;
        this.y=y;
    }

    this.copy= () => {
     return new Punto(this.x, this.y);
    }

    this.equal= (h1) => {
        return this.x === h1.x && this.y === h1.y;
       }
       this.suma = (h1) => {
        let x2, y2;
        x2 = this.x + h1.x;
        y2 = this.y + h1.y;
        return new Punto(x2,y2);
       }
    this.obtenerDistancia=(h2) => {
       return Math.sqrt(Math.pow(this.x - h2.x, 2) + Math.pow(this.y - h2.y, 2));
    }

    this.toString=()=> {
        console.log("("+this.x+","+this.y+")");
        return "("+this.x+","+this.y+")";
    }
}

let h = new Punto(5,11);


h.cambiar(6,12);

console.log(h.copy());

console.log(h); 
console.log(h2);
console.log(h.equal(h2));

h2.cambiar(2,12);
console.log(h2);
console.log(h.equal(h2));

let h3 =h.suma(h2);

console.log(h3);

console.log(h.obtenerDistancia(h3));

h.toString();

