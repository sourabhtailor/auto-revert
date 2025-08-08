<?php
// Eval injection test variation #769
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>