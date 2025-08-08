<?php
// Eval injection test variation #1026
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>