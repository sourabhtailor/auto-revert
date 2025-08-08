<?php
// Eval injection test variation #1108
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>