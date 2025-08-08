<?php
// Eval injection test variation #1161
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>