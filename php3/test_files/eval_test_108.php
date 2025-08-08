<?php
// Eval injection test variation #108
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>