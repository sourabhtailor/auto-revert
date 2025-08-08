<?php
// Eval injection test variation #558
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>