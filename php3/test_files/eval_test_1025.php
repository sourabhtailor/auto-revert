<?php
// Eval injection test variation #1025
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>