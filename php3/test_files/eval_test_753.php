<?php
// Eval injection test variation #753
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>