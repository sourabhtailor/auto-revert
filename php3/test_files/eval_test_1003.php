<?php
// Eval injection test variation #1003
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>