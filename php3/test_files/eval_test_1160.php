<?php
// Eval injection test variation #1160
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>