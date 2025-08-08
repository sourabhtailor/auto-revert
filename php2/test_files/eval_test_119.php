<?php
// Eval injection test variation #119
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>