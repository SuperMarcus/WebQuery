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

require(__DIR__."classes".DIRECTORY_SEPARATOR."WebQuery.class.php");

if(!isset($_POST['host']) or !isset($_POST['port'])){
    echo "Bad post.";
    exit(0);
}

echo "<html>";
echo "<head><title>Web Query</title></head>";
echo "<body>";

$error = 0;
$address = $_POST['host'];
$port = $_POST['port'];

if(!isset($address)){
    echo "<P>Please input server address.</p><br>";
    $error++;
}

if(!isset($port)){
    echo "<p>Please input server port.</p><br>";
    $error++;
}

if($error > 0){
    echo "<p>Please check all the arguments and try again.</p><br>";
}

$query = new WebQuery($address, $port);

echo "</body>";
echo "</html>";