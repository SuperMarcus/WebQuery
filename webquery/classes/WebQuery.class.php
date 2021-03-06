<?php
/**
 *
 * WebQuery
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, second version of the License, or
 * (at your option) any later version.
 *
 * @author Marcus, ZZM
 * @link https://github.com/SuperMarcus/WebQuery
 *
 */

class WebQuery{
    private $socket;

    public function __construct($address, $port){
        putmsg("Connecting server: ".$address.":".$port);
        $this->socket = new QuerySocket($address, $port);
        if($this->socket->openStream() == 0){

        }
    }
}