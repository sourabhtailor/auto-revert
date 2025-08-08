<?php
// Eval injection test variation #327
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>