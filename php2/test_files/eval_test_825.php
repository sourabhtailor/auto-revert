<?php
// Eval injection test variation #825
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>