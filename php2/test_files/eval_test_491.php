<?php
// Eval injection test variation #491
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>