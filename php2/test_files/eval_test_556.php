<?php
// Eval injection test variation #556
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>