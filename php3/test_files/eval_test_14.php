<?php
// Eval injection test variation #14
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>