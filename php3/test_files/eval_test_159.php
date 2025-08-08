<?php
// Eval injection test variation #159
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>