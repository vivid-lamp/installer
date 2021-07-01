<?php

if ($_SERVER['REQUEST_URI'] == '/favicon.ico') {
    return false;
}
if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"])) {
    return false;
} else {
    $_SERVER["SCRIPT_FILENAME"] = __DIR__ . '/index.php';
    require __DIR__ . "/index.php";
}