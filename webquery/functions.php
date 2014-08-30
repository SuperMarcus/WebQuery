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

function putmsg($msg, $type = "p", $bar = true){
    echo "<".$type.">".$msg."</".$type.">".($bar ? "<bar>" : "");
}