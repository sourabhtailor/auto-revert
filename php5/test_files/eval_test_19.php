<?php
// Eval injection test variation #19
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>