<?php
// Eval injection test variation #1146
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>