<?php
// Eval injection test variation #936
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>