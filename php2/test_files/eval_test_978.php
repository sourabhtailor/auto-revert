<?php
// Eval injection test variation #978
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>