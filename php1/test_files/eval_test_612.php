<?php
// Eval injection test variation #612
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>