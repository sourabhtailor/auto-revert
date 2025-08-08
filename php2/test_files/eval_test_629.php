<?php
// Eval injection test variation #629
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>