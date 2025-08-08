<?php
// Eval injection test variation #1115
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>