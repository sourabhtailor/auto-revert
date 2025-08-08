<?php
// Eval injection test variation #374
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>