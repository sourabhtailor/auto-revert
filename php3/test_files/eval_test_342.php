<?php
// Eval injection test variation #342
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>