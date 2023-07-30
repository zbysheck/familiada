<?php
namespace App\Http\WebSockets;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class ChatSocket implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
        echo "Connection established\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo sprintf('Received: %s', $msg);
        $from->send('Hello, client! Message received: ' . $msg);
    }

    public function onClose(ConnectionInterface $conn) {
        echo "Connection closed\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}
