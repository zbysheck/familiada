<!DOCTYPE html>
<html>
<body>
<button onclick="sendMessage()">Send Message</button>
<p id="messages"></p>

<script>
    const connection = new WebSocket('ws://localhost:8080');

    connection.onopen = () => {
        console.log('Connection open');
    };

    connection.onerror = (error) => {
        console.log(`WebSocket error: ${error}`);
    };

    connection.onmessage = (e) => {
        console.log(e.data);
        document.getElementById('messages').innerText += '\n' + e.data;
    };

    function sendMessage() {
        connection.send('Hello from client!');
    }
</script>
</body>
</html>
