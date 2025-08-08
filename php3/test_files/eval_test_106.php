<?php
// Eval injection test variation #106
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>