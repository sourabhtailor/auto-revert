<?php
// Eval injection test variation #1354
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>