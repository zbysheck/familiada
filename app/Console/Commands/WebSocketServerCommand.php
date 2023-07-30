<?php
namespace App\Console\Commands;

use App\Http\WebSockets\ChatSocket;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Illuminate\Console\Command;

class WebSocketServerCommand extends Command
{
    protected $signature = 'ratchet:serve';
    protected $description = 'Start the WebSocket server';

    public function handle()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new ChatSocket()
                )
            ),
            8080
        );

        $server->run();
    }
}
