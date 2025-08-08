<?php
// Eval injection test variation #1028
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>