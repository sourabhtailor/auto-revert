<?php
// Eval injection test variation #574
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>