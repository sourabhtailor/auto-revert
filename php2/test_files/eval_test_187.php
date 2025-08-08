<?php
// Eval injection test variation #187
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>