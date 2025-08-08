<?php
// Eval injection test variation #1084
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>