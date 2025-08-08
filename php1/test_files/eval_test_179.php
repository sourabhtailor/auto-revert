<?php
// Eval injection test variation #179
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>