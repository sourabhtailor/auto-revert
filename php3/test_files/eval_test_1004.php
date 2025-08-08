<?php
// Eval injection test variation #1004
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>