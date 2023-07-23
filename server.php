<?php

main();

function main() {

    $result = shell_exec("ipconfig");
    echo($result);

}