const { send } = require("process");
const WebSocket = require("ws");

const wss = new WebSocket.Server({host: "0.0.0.0", port: 8085 });

wss.on("connection", (client) => {
    console.log("connected");

    client.on("message", (message) => {
        console.log("not bad");
        console.log(message.toString());
        broadcast()
    })

    function broadcast() {
        wss.clients.forEach(client => {
            if(client.readyState === WebSocket.OPEN)
            client.send();
        });
    }

});