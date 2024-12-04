class Ordenador {
    constructor(marca, modelo, ram = 4, discoDuro = 512, pulgadas = 17) {
      this.marca = marca;
      this.modelo = modelo;
      this.ram = ram;
      this.discoDuro = discoDuro;
      this.pulgadas = pulgadas;
    }
  
    toString() {
      return `Marca: ${this.marca}\nModelo: ${this.modelo}\nRAM: ${this.ram} GB\nDisco Duro: ${this.discoDuro} GB\nPulgadas de Pantalla: ${this.pulgadas}"`;
    }
  }
  
  class Portatil extends Ordenador {
    constructor(marca, modelo, ram, discoDuro, pulgadas, autonomia = 4) {
      super(marca, modelo, ram, discoDuro, pulgadas);
      this.autonomia = autonomia
    }
    toString() {
      return `${super.toString()}\nAutonomía: ${this.autonomia} horas`;
    }
  }
  
  
  const ordenador1 = new Ordenador("HP", "Pavilion", 8, 1024, 15);
  console.log(ordenador1.toString());
  
  const portatil1 = new Portatil("Dell", "XPS", 16, 512, 13, 8);
  console.log(portatil1.toString());
  
  const portatil2 = new Portatil("Apple", "MacBook Air", 8, 256);
  console.log(portatil2.toString());
  