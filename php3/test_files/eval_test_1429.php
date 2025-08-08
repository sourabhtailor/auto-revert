<?php
// Eval injection test variation #1429
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>