<?php
// Eval injection test variation #1436
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>