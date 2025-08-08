<?php
// Eval injection test variation #1212
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>