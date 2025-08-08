<?php
// Eval injection test variation #1159
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>