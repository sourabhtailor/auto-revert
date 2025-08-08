<?php
// Eval injection test variation #571
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>