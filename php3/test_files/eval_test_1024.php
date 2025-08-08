<?php
// Eval injection test variation #1024
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>