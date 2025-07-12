const socket = new WebSocket("ws://localhost:8080");

socket.onmessage = function(event) {
    const data = JSON.parse(event.data);
    displayMessage(data.username, data.message, data.time);
};

function sendMessage() {
    const msg = document.getElementById("msg").value.trim();
    if (msg === "") return;

    const data = {
        username: username,
        message: msg,
        time: new Date().toLocaleTimeString()
    };
    socket.send(JSON.stringify(data));
    document.getElementById("msg").value = '';
}

function displayMessage(sender, message, time) {
    const chatBox = document.getElementById("chat-box");

    const msgDiv = document.createElement("div");
    msgDiv.classList.add("chat-message");

    const bubble = document.createElement("div");
    bubble.classList.add("chat-bubble");
    bubble.classList.add(sender === username ? "sent" : "received");
    bubble.innerText = message;

    const meta = document.createElement("div");
    meta.classList.add("meta");
    meta.innerText = `${sender} • ${time}`;

    msgDiv.appendChild(bubble);
    msgDiv.appendChild(meta);
    chatBox.appendChild(msgDiv);

    chatBox.scrollTop = chatBox.scrollHeight;
}
