<?php
// Eval injection test variation #598
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>