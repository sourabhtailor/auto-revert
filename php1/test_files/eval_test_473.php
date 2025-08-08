<?php
// Eval injection test variation #473
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>