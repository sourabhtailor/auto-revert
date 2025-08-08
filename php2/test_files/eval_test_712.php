<?php
// Eval injection test variation #712
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>