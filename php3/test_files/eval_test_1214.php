<?php
// Eval injection test variation #1214
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>