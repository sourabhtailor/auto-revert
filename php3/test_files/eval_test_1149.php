<?php
// Eval injection test variation #1149
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>