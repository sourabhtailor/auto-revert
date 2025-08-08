<?php
// Eval injection test variation #1152
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>