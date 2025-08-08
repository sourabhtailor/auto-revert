<?php
// Eval injection test variation #679
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>