<?php
// Eval injection test variation #1185
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>