class Carta {
    constructor(palo, valor) {
      if (palo >= 1 && palo <= 4 &&valor >= 1 && valor <= 10) {
        this.palo = palo;
        this.valor = valor;
      } else {
        return null; 
      }
    }

    darValor(palo, valor) {
      if (palo >= 1 && palo <= 4 &&valor >= 1 && valor <= 10) {
        this.palo = palo;
        this.valor = valor;
      }
    }
  
    toString() {
      const palos = ['Oros', 'Espadas', 'Bastos', 'Copas'];
      const valores = ['As', '2', '3', '4', '5', '6', '7', 'Sota', 'Caballo', 'Rey'];
      
      return `${valores[this.valor - 1]} de ${palos[this.palo - 1]}`;
    }
  }
  
  class Baraja {
    constructor() {
      this.cartas = [];
  
      for (let palo = 1; palo <= 4; palo++) {
        for (let valor = 1; valor <= 10; valor++) {
          this.cartas.push(new Carta(palo, valor));
        }
      }
    }
  
    barajar() {
      for (let i = this.cartas.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [this.cartas[i], this.cartas[j]] = [this.cartas[j], this.cartas[i]]; 
      }
    }
  
    toString() {
      return this.cartas.map(carta => carta.toString()).join(', ');
    }
  }
  
  const baraja = new Baraja();

  console.log('Baraja inicial:', baraja.toString());
  baraja.barajar();
  console.log('Baraja barajada:', baraja.toString());
  
  const carta = new Carta(1, 5); 
  console.log('Carta específica:', carta.toString());
  
  carta.darValor(4, 10);
  console.log('Carta modificada:', carta.toString());
  