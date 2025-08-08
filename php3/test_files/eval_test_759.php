<?php
// Eval injection test variation #759
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>