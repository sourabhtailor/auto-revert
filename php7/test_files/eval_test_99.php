<?php
// Eval injection test variation #99
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>