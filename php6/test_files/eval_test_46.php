<?php
// Eval injection test variation #46
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>