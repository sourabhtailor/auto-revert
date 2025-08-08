<?php
// Eval injection test variation #1148
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>