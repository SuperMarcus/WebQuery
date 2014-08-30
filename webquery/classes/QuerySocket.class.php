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

class QuerySocket{
    private $address, $port, $socket = null;

    public function __construct($address, $port){
        $this->address = $address;
        $this->port = $port;
        $this->openStream();
    }

    public function openStream(){
        $this->socket = @fsockopen("udp://".$this->address, $this->port);
    }
}