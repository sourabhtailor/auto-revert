<?php
// Eval injection test variation #1036
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>