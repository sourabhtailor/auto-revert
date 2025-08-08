<?php
// Eval injection test variation #1166
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>