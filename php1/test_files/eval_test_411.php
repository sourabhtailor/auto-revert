<?php
// Eval injection test variation #411
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>