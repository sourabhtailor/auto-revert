<?php
// Eval injection test variation #201
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>