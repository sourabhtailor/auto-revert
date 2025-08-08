<?php
// Eval injection test variation #890
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>