<?php
// Eval injection test variation #596
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>