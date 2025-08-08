<?php
// Eval injection test variation #205
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>