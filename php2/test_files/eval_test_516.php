<?php
// Eval injection test variation #516
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>