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
    }

    public function openStream(){
        $errno = 0;
        $errstr = "";
        $this->socket = @fsockopen("udp://".$this->address, $this->port, $errno, $errstr, 5);
        if(!$this->socket){
            if($errno == 0){
                putmsg("Could not create socket connection. [Internal error]");
                return -1;
            }
            putmsg("Could not create socket connection. [Socket returned an error code ".$errno."]");
            return $errno;
        }
        stream_set_timeout($this->socket, 5);
        stream_set_blocking($this->socket, true);

        return 0;
    }
}