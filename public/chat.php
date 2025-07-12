<?php
require '../includes/auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h2>Welcome, <?= $_SESSION['username'] ?></h2>

<div id="chat-box"></div>

<input type="text" id="msg" placeholder="Type a message..." autofocus />
<button onclick="sendMessage()">Send</button>

<script>
const username = "<?= $_SESSION['username'] ?>";
</script>
<script src="assets/js/chat.js"></script>
</body>
</html>
