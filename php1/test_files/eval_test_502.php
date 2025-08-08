<?php
// Eval injection test variation #502
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>