<?php
// Eval injection test variation #1097
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>