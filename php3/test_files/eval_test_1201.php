<?php
// Eval injection test variation #1201
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>