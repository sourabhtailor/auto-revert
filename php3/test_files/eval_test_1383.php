<?php
// Eval injection test variation #1383
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>