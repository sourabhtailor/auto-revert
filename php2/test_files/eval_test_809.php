<?php
// Eval injection test variation #809
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>