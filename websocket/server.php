<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require __DIR__ . '/../vendor/autoload.php';
require_once 'ChatApp.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new ChatApp()
        )
    ),
    8080
);

echo "WebSocket Server started on ws://localhost:8080\n";
$server->run();
