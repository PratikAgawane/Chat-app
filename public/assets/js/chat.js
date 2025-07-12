const socket = new WebSocket("ws://localhost:8080");

socket.onmessage = function(event) {
    const data = JSON.parse(event.data);
    const div = document.createElement("div");
    div.textContent = `${data.username}: ${data.message} (${data.time})`;
    document.getElementById("chat-box").appendChild(div);
};

function sendMessage() {
    const msg = document.getElementById("msg").value;
    const data = {
        username: username,
        message: msg,
        time: new Date().toLocaleTimeString()
    };
    socket.send(JSON.stringify(data));
    document.getElementById("msg").value = '';
}
