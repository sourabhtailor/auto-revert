<?php
// Eval injection test variation #169
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>