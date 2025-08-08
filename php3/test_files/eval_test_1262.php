<?php
// Eval injection test variation #1262
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>