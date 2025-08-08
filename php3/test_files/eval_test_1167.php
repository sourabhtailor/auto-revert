<?php
// Eval injection test variation #1167
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>