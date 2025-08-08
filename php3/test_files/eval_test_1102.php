<?php
// Eval injection test variation #1102
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>