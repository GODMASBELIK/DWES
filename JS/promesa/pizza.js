function realizarPedido(orden) {
  return new Promise((resolve, reject) => {
    console.log("+++++++Procesando tu pedido...");
    setTimeout(() => {
      if (orden) {
        resolve(`Pedido recibido: ${orden}`);
      } else {
        reject("Error: No se ha especificado el pedido");
      }
    }, 2000);
  });
}

// Función para simular la preparación del pedido
function prepararPedido(orden) {
  return new Promise((resolve) => {
    console.log("Preparando tu pedido...");
    setTimeout(() => {
      resolve(`Pedido listo: ${orden}`);
    }, 3000);
  });
}

// Función para simular la entrega del pedido
function entregarPedido(orden) {
  return new Promise((resolve) => {
    console.log("Entregando tu pedido...");
    setTimeout(() => {
      resolve(`Pedido entregado: ${orden}`);
    }, 1000);
  });
}

// Flujo completo del pedido siendo orden= Pizza Margherita
realizarPedido("Pizza Margherita")
  .then((h) => {    //"h" es el valor de la promesa cumplida de la función realizarPedido = `Pedido recibido: ${orden}`
    console.log(h);
    return prepararPedido(h);
  })
  .then((h) => {      //"h" es el valor de la promesa cumplida de la función  prepararPedido = `Pedido listo: Pedido recibido: ${0rden}`
    console.log(h);
    return entregarPedido(h);
  })
  .then((h) => {  //"h"  es ahora el valor de la promesa cumplida por la función entregarPedido = Pedido entregado: Pedido listo: Pedido recibido: Pizza Margherita`
    console.log(h);  
    console.log("¡Gracias por tu pedido!");
  })
  .catch((error) => {
    console.error(error);
  })
  .finally(() => {
    console.log("Proceso finalizado");
  });
