<?php
// Eval injection test variation #720
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>