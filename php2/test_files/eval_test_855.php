<?php
// Eval injection test variation #855
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>