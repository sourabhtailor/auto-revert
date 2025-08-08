<?php
// Eval injection test variation #1395
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>