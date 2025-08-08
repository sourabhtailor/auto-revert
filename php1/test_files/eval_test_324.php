<?php
// Eval injection test variation #324
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>