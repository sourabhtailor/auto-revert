<?php
// Eval injection test variation #1426
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>