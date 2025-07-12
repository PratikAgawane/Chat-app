<?php require '../includes/auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">
    <div class="container-fluid vh-100 d-flex flex-column">
        <header class="py-3 px-4 bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="m-0">Real-Time Chat</h4>
            <span>👋 Welcome, <?= $_SESSION['username'] ?>!</span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </header>

        <div id="chat-box" class="flex-grow-1 overflow-auto px-4 py-3 bg-white border-start border-end"></div>

        <footer class="d-flex p-3 border-top bg-light">
            <input type="text" id="msg" class="form-control me-2" placeholder="Type your message..." autofocus />
            <button onclick="sendMessage()" class="btn btn-primary">Send</button>
        </footer>
    </div>

    <script>
        const username = "<?= $_SESSION['username'] ?>";
    </script>
    <script src="assets/js/chat.js"></script>
</body>
</html>
