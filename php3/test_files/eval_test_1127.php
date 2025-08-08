<?php
// Eval injection test variation #1127
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>