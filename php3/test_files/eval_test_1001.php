<?php
// Eval injection test variation #1001
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>