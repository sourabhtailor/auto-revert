<?php
// Eval injection test variation #1136
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>