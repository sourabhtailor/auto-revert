<?php
// Eval injection test variation #386
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>