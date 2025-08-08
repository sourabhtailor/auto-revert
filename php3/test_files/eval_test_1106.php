<?php
// Eval injection test variation #1106
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>