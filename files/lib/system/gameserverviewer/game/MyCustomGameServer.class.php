<?php

namespace wcf\system\gameserverviewer\game;

use wcf\data\gameserverviewer\Server;
use wcf\system\gameserverviewer\game\data\Player;

class MyCustomGameServer extends AbstractServerObjectType
{
    #[\Override]
    public function query(Server $server): bool
    {
        $host = $server->host;
        $port = $server->port;

        // Your code to query the server.
        // ...
        $queryResult = null; // Replace this with the result of your query.

        if ($queryResult === null) {
            // Return false if the query failed to mark the server as offline.
            return false;
        }

        // Uncomment the applicable lines to store server information from the query.
        // $this->joinLink = $queryResult['joinLink'];
        // $this->maxPlayers = $queryResult['maxPlayers'];
        // $this->numPlayers = $queryResult['numPlayers'];
        /*
         * $this->players = array_filter(
         *     array_map(static function ($player) {
         *         return new Player($player['name']);
         *     }, $queryResult['players'])
         * );
         */
        // $this->mapName = $queryResult['mapName'];
        // $this->version = $queryResult['version'];
        // $this->rawData = $queryResult;

        // Return true if the query was successful to mark the server as online.
        return true;
    }
}
